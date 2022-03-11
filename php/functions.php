<?php

function emptyInputSignup($email, $pwd, $pwdCheck) {
    $result;
    if (empty ($email) || empty($pwd) || empty($pwdCheck)) {
        $result = true;
    }
    
    else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdCheck) {
    $result;
    if ($pwd !== $pwdCheck) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

function emailExists($connectie, $email) {
    $sql = "SELECT * FROM user WHERE emaill = ?;";
    $stmt = mysqli_stmt_init($connectie);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: registreren.php?error=stmtfailed1");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc ($resultData)) {
        return $row;
    }
    
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser ($connectie, $email, $pwd) {
    $sql = "INSERT INTO user (emaill, passwort) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($connectie);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: registreren.php?error=stmtfailed2");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $email, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: gallery.php?error=none");
    exit();

}



