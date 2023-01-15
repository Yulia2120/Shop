<?php
error_reporting(-1);
require_once 'config.php';
require_once 'funcs.php';
$products = get_products();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Интернет Магазин</title>
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/css/starter-template.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar  navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand text-danger" href="#">STORE</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Все товары</a></li>
                    <li><a href="#">Категории</a></li>
                    <li><a href="#">Корзина</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="app/views/admin.php">Панель администратора</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <div class="starter-template">
        <form action="index.php" method="post" class="d-flex form-admin">
            <div class="row">
                <div class="col-sm-10 col-md-10 col-lg-11">
                    <input class="form-control  me-2 mb-3" type="text" name="search"  placeholder="Search" >
                </div>
                <div class="col">
                    <button  class="btn btn-default" type="submit" name="bsearch" >Search</button>
                </div>
            </div>
        </form>
        <h1 class="title">Все товары</h1>
        <div class="row">
                <?php if(!empty($products)): ?>
                <?php foreach ($products as $product): ?>
            <div class="col-sm-6 col-md-4" id="prod">
                <div class="thumbnail">
                    <img src="<?= $product['urlimg']?>" alt="<?= $product['title']?>">
                    <div class="caption">
                        <h4><?= $product['title']?></h4>
                        <p class="price"><?=number_format($product['price'], 0, '', ' ')?> грн</p>
                        <p>
                            <a href="?cart=add&id=<?= $product['id']?>" class="btn btn-warning add-to-cart" data-id="<?= $product['id']?>" role="button">В корзину</a>
                            <a href="#" class="btn btn-default" role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>
                <?php endif; ?>
        </div>
</div>
</div>
<script src="/public/js/bootstrap.bundle.min.js"></script>
</body>
</html>


