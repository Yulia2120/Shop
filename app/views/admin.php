<?php
$db = mysqli_connect('localhost', 'root', '', 'shop') or die ('Ошибка подключения к базе данных');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://kit.fontawesome.com/23cc510106.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand text-danger" href="../../index.php">STORE</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="../../index.php">Все товары</a></li>
                    <li><a href="#">Категории</a>
                    </li>
                    <li ><a href="#">В корзину</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Панель администратора</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container admin-container">
    <div class="row">
        <div class="col mt-5">
            <form action="" method="post" class="d-flex form-admin">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-11">
                <input class="form-control  me-2 mb-3" type="text" name="search"  placeholder="Search" >
                    </div>
                <div class="col">
                    <button  class="btn btn-success" type="submit" >Search</button>
                </div>
                </div>
            </form>
            <?php
            if(isset($_POST['search'])){
                $searchKey = $_POST['search'];
                $query = "SELECT * FROM `products` WHERE `title` LIKE '%$searchKey%'";
            }else
                $query = "SELECT * FROM `products`";
            $results = mysqli_query($db, $query);
            ?>

            <table class="table shadow">
                <thead class="thead-dark">
                <tr>
                    <th>№</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Url_image</th>
                    <th>Action</th>
                    <?php while($row = mysqli_fetch_object($results)){?>
                <tr>
                    <td><?=$row->id ?></td>
                    <td><?=$row->title ?></td>
                    <td><?=$row->price ?></td>
                    <td><?=$row->description ?></td>
                    <td><?=$row->urlimg ?></td>
                    <td>
                        <div class="wrap">
                        <a href="page_add.php?add_value<?=$row->id ?>" class="btn btn-success mb-3 btn-sm"><i class="far fa-plus"></i></a>
                        <a href="page_edit.php?up_value=<?=$row->id ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="page_delete.php?id_value=<?=$row->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr> <?php } ?>
                </thead>
            </table>
        </div>
    </div>
</div>
<script rel="stylesheet" href="js/bootstrap.bundle.min.js"></script>
</body>
</html>
