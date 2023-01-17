<?php
$title="Форма регистрации"; // название формы
require '../../config.php';
require __DIR__ . '/header.php'; // подключаем шапку проекта


if(isset($_POST['do_signup'])){

    $login = htmlspecialchars($_POST['login']);
    $email = htmlspecialchars($_POST['email']);
    $name = htmlspecialchars($_POST['name']);
    $family = htmlspecialchars($_POST['family']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $password = htmlspecialchars($_POST['password']);
    $password_confirm = htmlspecialchars($_POST['password_confirm']);

    // Создаем массив для сбора ошибок
    $errors = array();

    if(trim($login) == '') {

        $errors[] = "Введите логин!";
    }

    if(trim($email) == '') {

        $errors[] = "Введите Email";
    }
    if(trim($name) == '') {

        $errors[] = "Введите Имя";
    }

    if(trim($family) == '') {

        $errors[] = "Введите фамилию";
    }
    if($phone == '') {

        $errors[] = "Введите номер телефона";
    }
    if($address == '') {

        $errors[] = "Введите адрес доставки";
    }
    if($password == '') {

        $errors[] = "Введите пароль";
    }

    if($password_confirm != $password) {

        $errors[] = "Повторный пароль введен не верно!";
    }
    if(mb_strlen($login) < 5 || mb_strlen($login) > 50) {

        $errors[] = "Недопустимая длина логина";

    }

    if (mb_strlen($name) < 3 || mb_strlen($name) > 50){

        $errors[] = "Недопустимая длина имени";

    }
    if (mb_strlen($family) < 5 || mb_strlen($family) > 50){

        $errors[] = "Недопустимая длина фамилии";

    }

    if (mb_strlen($password) < 3 || mb_strlen($password) > 8){

        $errors[] = "Недопустимая длина пароля (от 3 до 8 символов)";

    }
    if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email)) {

        $errors[] = 'Неверно введен е-mail';

    }
    global $dbs;
    if(empty($errors)){
       // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users ( login, email, name, family,  phone, address, password) VALUES ('$login','$email','$name','$family', '$phone', '$address', '$password')";
        $result = mysqli_query($dbs, $query);
        $msg = "Регистрация прошла успешно";
    }

}

?>


<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-6">
            <!-- Форма регистрации -->
            <h2 class="mb-4">Форма регистрации</h2>
                <?php if(isset($msg)){ ?><div class="alert alert-success" role="alert"> <?php echo $msg; ?> </div><?php }?>
                <?php if(isset($errors)){ ?><div class="alert alert-danger" role="alert"> <?php echo array_shift($errors); ?> </div><?php }?>
            <form action="registration.php" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control mb-3" name="login" id="login" placeholder="Введите логин" required>
                <input type="email" class="form-control mb-3" name="email" id="email" placeholder="Введите Email">
                <input type="text" class="form-control mb-3" name="name" id="name" placeholder="Введите имя" required>
                <input type="text" class="form-control mb-3" name="family" id="family" placeholder="Введите фамилию" required>
                <input type="text" class="form-control mb-3" name="phone" id="phone" placeholder="Введите номер телефона" required>
                <input type="text" class="form-control mb-3" name="address" id="address" placeholder="Введите адресс доставки" required>
                <input type="password" class="form-control mb-3" name="password" id="password" placeholder="Введите пароль" required>
                <input type="password" class="form-control mb-3" name="password_confirm" id="password_confirm" placeholder="Повторите пароль">
                <button class="btn btn-success" name="do_signup" type="submit">Зарегистрировать</button>
            </form>
            <br>
            <p>Если вы зарегистрированы, тогда нажмите <a href="login.php">здесь</a>.</p>
            <p class="mb-5">Вернуться на <a href="../../index.php">главную</a>.</p><br>

        </div>
    </div>
</div>
<?php require __DIR__ . '/footer.php'; ?>


