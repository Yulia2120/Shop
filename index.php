<?php
session_start();
error_reporting(-1);
include 'app/views/header.php';
require_once 'config.php';
require_once 'funcs.php';
require 'app/models/Pagination.php';

$products = get_products();
$page = $_GET['page'] ?? 1;
$per_page = 4;
$total = get_count('products');
$pagination = new Pagination((int)$page, $per_page, $total);
$start = $pagination->get_start();
$products = get_products_pag($start, $per_page);

?>

<body>
<nav class="navbar navbar-expand-lg bg-dark  fixed-top" data-bs-theme="dark" >
    <div class="container">
        <a class="navbar-brand" href="#">Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Каталог товаров</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Вход
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="app/views/registration.php">Регистрация</a></li>
                        <li><a class="dropdown-item" href="app/views/login.php">Авторизация</a></li>
                        <li><a class="dropdown-item" href="app/views/admin/admin.php">Панель администратора</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <button id="get-cart" type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#cart-modal">
                        Корзина <span class="badge badge-light mini-cart-qty"><?= $_SESSION['cart.qty'] ?? 0 ?></span>
                    </button>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<!--    --><?php //debug($_SESSION); //session_destroy(); ?>
<div class="container-fluid">
    <div class="starter-template">
        <h1 class="title">Все товары</h1>
        <div class="row">
            <div class="col-lg-2">
<!--                --><?php //include 'filter.php' ?>
                <div id="myBtnContainer">
                    <button class="btn btn-warning active mb-2" onclick="filterSelection('all')"> Показать все</button>
                    <button class="btn btn-outline-warning text-dark mb-2" onclick="filterSelection('phone')"> Телефоны</button>
                    <button class="btn btn-outline-warning text-dark mb-2" onclick="filterSelection('laptop')">Ноутбуки</button>
                    <button class="btn btn-outline-warning text-dark mb-2" onclick="filterSelection('headset')">Гарнитура</button>
                    <button class="btn btn-outline-warning text-dark mb-2" onclick="filterSelection('slipcovers')">Чехлы</button>
                </div>

            </div>
                <?php if(!empty($products)): ?>
                <?php foreach ($products as $product): ?>
            <div class="col-lg-10 col-md-4 mb-3 me-3 text-center card " id="prod">
                <div class="card-body">
                <div class="thumbnail">
                    <img src="<?= $product['urlimg']?>" alt="<?= $product['title']?>">
                    <div class="title mt-4">
                        <h5><?= $product['title']?></h5>
                        <p class="price"><?=number_format($product['price'], 0, '', ' ')?> грн</p>
                        <p>
                            <a href="?cart=add&id=<?= $product['id']?>" class="btn btn-warning mb-3 add-to-cart" data-bs-toggle="modal" data-bs-target="#cart-modal" data-id="<?= $product['id']?>"><i class="fa-solid fa-cart-arrow-down"></i> В корзину</a>
                            <a class="link-info" href="#">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            </div>
                <?php endforeach; ?>
                <?php endif; ?>
        <div class="row justify-content-center mt-3 mb-5">
            <div class="col-lg-2">
            <?php
            echo $pagination->get_html();
            ?>

            </div>
        </div>
<!--      -->
<!--        </div>-->
</div>
</div>
    <div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                    <button type="button" class="close btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-cart-content">

                </div>
            </div>
        </div>
    </div>
<?php
include 'app/views/footer.php';
?>



