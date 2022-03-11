<?php
    $serverName = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "tryout";

    $connectie = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
    if (!$connectie) {
    die("Connection failed: " . mysqli_connect_error());
}