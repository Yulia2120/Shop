<?php
session_start();
$title="Форма авторизации"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require '../../config.php';

if(isset($_POST['do_login'])){
    global $dbs;
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE login='$login' and password='$password'";
    $result = mysqli_query($dbs, $query) or die(mysqli_error($dbs));
    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['login'] = $login;
    }
    else{
        $false_msg = "Ошибка,  Вы не прошли авторизацию ";
    }
}
if(isset($_SESSION['login'])){
    $login = $_SESSION['login'];
    $msg = "Привет " . $login .",". " авторизация прошла успешно";
}
session_destroy();

?>

<div class="container mt-4 ">
    <div class="row justify-content-center">
        <div class="col-6">
            <!-- Форма авторизации -->
            <h2 class="mb-4">Форма авторизации</h2>
            <?php if(isset($msg)){ ?><div class="alert alert-success" role="alert"> <?php echo $msg; ?> </div><?php }?>
            <?php if(isset($false_msg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $false_msg; ?> </div><?php }?>
            <form action="login.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
                <input type="password" class="form-control" name="password" id="pass" placeholder="Введите пароль" required><br>
                <button class="btn btn-success" name="do_login" type="submit">Авторизоваться</button>
            </form>
            <br>
            <p>Если вы еще не зарегистрированы, тогда нажмите <a href="registration.php">здесь</a>.</p>
            <p>Вернуться на <a href="../../index.php">главную</a>.</p>
        </div>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->