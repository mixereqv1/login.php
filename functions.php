<?php
    function checkLogin() {
        if(isset($_POST['submit'])) {
            if(isset($_GET['action'])) {
                unset($_GET['action']);
            }
            if($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
                $_SESSION['logged_in'] = true;
            }
        }
    }

    function logout() {
        if(isset($_GET['action']) &&$_GET['action'] == 'logout') {
            $_SESSION['logged_in'] = false;
            unset($_GET['action']);
        }
    }

    function createMenu() {
        echo('
            <a href="index.php">Strona index</a>
            <a href="01.php">Strona 01</a>
            <a href="02.php">Strona 02</a>
            <a href="03.php">Strona 03</a>
            <a href="04.php">Strona 04</a>
            <a href="05.php">Strona 05</a>
        ');
    }

    function showCurrentPage() {
        echo('Strona: '. basename($_SERVER['PHP_SELF']));
    }
?>