<?php
require_once '../../../../config.php';
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
            <a class="navbar-brand text-danger" href="../../../../index.php">STORE</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="../../../../index.php">Все товары</a></li>
                <li><a href="#">Категории</a>
                <li><a href="../admin.php">Admin/Товары</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container admin-container">
    <div class="row">
        <div class="col">
            <form action="" method="post" class="d-flex form-admin">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-11">
                        <input class="form-control  me-2 mb-5" type="text" name="search"  placeholder="Search" >
                    </div>
                    <div class="col">
                        <button  class="btn btn-success" type="submit" >Search</button>
                    </div>
                </div>
            </form>
            <?php
            if(isset($_POST['search'])){
                global $dbs;
                $searchKey = $_POST['search'];
                $query = "SELECT * FROM `users` WHERE `login` LIKE '%$searchKey%'";
            }else
                $query = "SELECT * FROM `users`";
            $results = mysqli_query($dbs, $query);
            ?>

            <table class="table shadow">
                <thead class="thead-dark">
                <tr>
                    <th>№</th>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Family</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Password</th>
                    <th>Action</th>
                    <?php while($row = mysqli_fetch_object($results)){?>
                <tr>
                    <td><?=$row->id ?></td>
                    <td><?=$row->login ?></td>
                    <td><?=$row->email ?></td>
                    <td><?=$row->name ?></td>
                    <td><?=$row->family ?></td>
                    <td><?=$row->phone ?></td>
                    <td><?=$row->address ?></td>
                    <td><?=$row->password ?></td>
                    <td>
                        <div class="wrap">
                            <a href="add_users.php?add_value<?=$row->id ?>" class="btn btn-success mb-3 btn-sm"><i class="far fa-plus"></i></a>
                            <a href="edit_users.php?up_value=<?=$row->id ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="delete_users.php?id_value=<?=$row->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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