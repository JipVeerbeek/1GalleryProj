<?php
/*if($_POST['email'] == 'jip.veerbeek@hotmail.nl' AND $_POST['wachtwoord'] == 'hallo123') {
    header('Location: gallery.php');
}
else{
    header('Location: tryagain.php');*/

session_start();
unset($_SESSION['is_ingelogd']);

if(isset($_POST['login']) && isset($_POST['wachtwoord'])) {
    $connectie = new PDO('mysql:hostname=localhost;dbname=tryout', 'root', '');

    $query = $connectie->prepare("select * from user where emaill = :emaill");
    $query->bindParam(':emaill', $_POST['login'], PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if($result && $result['passwort'] == $_POST['wachtwoord']) {
        $_SESSION['is_ingelogd'] = $result['emaill'];
        
    }
}

if(isset($_SESSION['is_ingelogd'])) {
    $_SESSION['is_ingelogd'] = true;
    header('Location: gallery.php');
}

else {
    header('Location: tryagain.php');
}

?>




