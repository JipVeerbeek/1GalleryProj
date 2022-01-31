<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="galleryStyle.css">
    </head>
    <body>
        <div>
            <?php

                $spaceImg = array("space01.jpg", "space02.jpg", "space03.jpg", "space04.jpg", "space05.jpg", "space06.jpg", "space07.png", "space08.jpg", "space09.jpg", "space10.jpg",
                "space11.jpg", "space12.jpg", "space13.jpg", "space14.jpg", "space15.jpg", "space16.jpg", "space17.jpg", "space18.jpg", "space19.jpg", "space20.jpg", "space21.jpg");

                
                foreach ($spaceImg as $x){
                
                    echo "<img class='galleryS' src='img/". $x ."'>";

                }
            ?>
        </div>
    </body>
</html>