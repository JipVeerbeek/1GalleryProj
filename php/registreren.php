<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="../css/inlogStyle.css">
    </head>

    <body>


    <div id="formContainer">
        <div id="dialogTitel">Registreren</div>
        <div id="dialogContent">
            <br>
            <form id="form" action="signup.php" method="post">
                <table style="width: 300px">
                    <tr>
                        <td style="width: 100px; text-align: right">
                            E-mail:&nbsp;
                        </td>
                        <td style="width: 200px">
                            <input type="text" name="login" placeholder="E-mail" id="email" size="20" maxlength="" required>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 100px; text-align: right">
                            Wachtwoord:&nbsp;
                        </td>
                        <td style="width: 200px">
                            <input type="password" name="wachtwoord" placeholder="Wachtwoord" id="password" size="20" maxlength="" required>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 100px; text-align: right">
                            Bevestigen:&nbsp;
                        </td>
                        <td style="width: 200px">
                            <input type="password" name="wachtwoordCheck" placeholder="Wachtwoord controleren" id="passwordCheck" size="20" maxlength="" required>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td style="text-align: left">
                            <input type="submit" name="submit" id="submit" value="Send">
                        </td>
                    </tr>
                </table>
                <br>
            </form>
            <button onclick="inlog()">Inloggen</button>
        </div>
    </div>

    <script>
        function inlog() {
            window.location = "../index.php";
        }

    </script>
    </body>

</html>