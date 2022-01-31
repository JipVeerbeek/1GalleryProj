<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="inlogStyle.css">
    </head>

    <body>

    <?php
    
    if(isset($_POST['email']) && isset($_POST['wachtwoord'])) {
        if($_POST['email'] == 'jip.veerbeek@hotmail.nl' AND $_POST['wachtwoord'] == 'hallo123') {
            header('Location: gallery.php');
        }
        else{
            header('Location: tryagain.php');
        }
    }


    ?>

    <div id="formContainer">
        <div id="dialogTitel">Inloggen</div>
        <div id="dialogContent">
            <br>
            <form id="form" action="" method="post">
                <table style="width: 250px">
                    <tr>
                        <td style="width: 100px; text-align: right">
                            E-mail:&nbsp;
                        </td>
                        <td style="width: 150px">
                            <input type="text" name="email" placeholder="E-mail" id="email" size="15" maxlength="" required>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 100px; text-align: right">
                            Wachtwoord:&nbsp;
                        </td>
                        <td style="width: 150px">
                            <input type="password" name="wachtwoord" placeholder="Wachtwoord" id="password" size="15" maxlength="" required>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td style="text-align: left">
                            <input type="submit" name="submit" id="submit" value="Send">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    </body>