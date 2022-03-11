<?php

if(isset($_POST["submit"])) {

    $email = $_POST["login"];
    $pwd = $_POST["wachtwoord"];
    $pwdCheck = $_POST["wachtwoordCheck"];

    require_once 'functions.php';
    require_once 'databaseconn.php';

    if (emptyInputSignup($email, $pwd, $pwdCheck) !== false) {
        header("location: registreren.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: registreren.php?error=invalidEmail");
        exit();
    }

    if (pwdMatch($pwd, $pwdCheck) !== false) {
        header("location: registreren.php?error=passwordsdontmatch");
        exit();
    }

    // if (emailExists($connectie, $email) !== false) {
    //     header ("location: registreren.php?error=usernametaken");
    //     exit();
    // }

    createUser ($connectie, $email, $pwd);

}


else {
    header("location: registreren.php");
}