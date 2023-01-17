<?php
$db = mysqli_connect('localhost', 'root', '', 'shop') or die ('Ошибка подключения к базе данных');

if(!empty($_GET['id_value'])){
    $id = (int) $_GET['id_value'];
    $delete = "DELETE FROM products WHERE id = $id";
    $query = mysqli_query($db, $delete);
    if($query) header('Location: admin.php');
    else die("Error");


}



