<?php
$db = mysqli_connect('localhost', 'root', '', 'shop') or die ('Ошибка подключения к базе данных');


if(!empty($_POST)){
    foreach ($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($db, $value);
    }
    extract($_POST);
    $insert = "INSERT INTO `products`(`title`, `price`, `description`, `urlimg`) VALUES ('$title', '$price', '$description','$urlimg')";
    $query = mysqli_query($db, $insert);
    if($query) header('Location: admin.php');

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление товара</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <script src="https://kit.fontawesome.com/23cc510106.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container admin-container" id="page_add">
    <div class="row">
        <div class="col mt-5">

            <h5 class="title mt-5 mb-3 title-add">Добавить</h5>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="" placeholder="Наименование">
                </div>
                <div class="form-group mt-2">
                    <input type="text" class="form-control" name="price" value="" placeholder="Стоимость">
                </div>
                <div class="form-group mt-2">
                    <input type="text" class="form-control" name="description" value="" placeholder="Описание">
                </div>
                <div class="form-group mt-2">
                    <input type="text" class="form-control" name="urlimg" value="" placeholder="Ссылка на изображение">
                </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
            <button type="submit" name="submit" class="btn btn-success">Добавить</button>
        </div>
        </form>
        </div>
    </div>
</div>
<script rel="stylesheet" href="js/bootstrap.bundle.min.js"></script>
</body>
</html>