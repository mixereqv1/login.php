<?php
    session_start();
    include_once('functions.php');
    
    checkLogin();
    logout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="top">
        <h1><?php showCurrentPage(); ?></h1>
    </div>
    <div class="left">
        <?php if($_SESSION['logged_in'] == false) { ?>
        <form class="login__form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="text" name="username" placeholder="Login">
            <input type="password" name="password" placeholder="Hasło">
            <input type="submit" name="submit" value="Zaloguj">
        </form>
        <?php } else {?>
            <a href="<?php $_SERVER['PHP_SELF'] ?>?action=logout">Wyloguj</a>
        <?php } ?>
    </div>
    <div class="right">
        <?php 
            if($_SESSION['logged_in'] == true) {
        ?>

            <div class="secret">
                Tajne dane :D
            </div>

        <?php } else {?>

            <div class="log_in">
                Zaloguj się aby zobaczyć tajne dane.
            </div>

        <?php } ?>
    </div>
    <div class="bottom">
        <?php createMenu(); ?>
    </div>
</body>
</html>