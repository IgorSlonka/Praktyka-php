<?php
        if(isset($_POST['submit'])) {
            $mail = $_POST['mail'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $pwd = $_POST['haslo'];
            $tel = $_POST['tel'];

            include '../classes/dbh.class.php';
            include '../classes/signup.class.php';
            include '../classes/signup-ctrl.class.php';
            $rejestracja = new SignupCtrl($name, $surname, $mail, $pwd, $tel);
            $rejestracja->SignupUser();
            header("location: ../rejestracja.php?error=none");
        }
    ?>