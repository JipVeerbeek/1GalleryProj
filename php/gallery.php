<?php

    session_start();
    if(!isset($_SESSION['is_ingelogd'])) {
        header('Location: ../index.php');
    }

    $target_dir = "uploads";
    $images = scandir("uploads");
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="../css/galleryStyle.css">
    </head>
    <body>
        <header class="title">
            <h1>Gallery</h1>
        </header>
        <nav>
            <a href="upload.php">Uploaden</a>&nbsp;&nbsp;&nbsp;
            <a href="../index.php">Uitloggen</a>
            
        </nav>
        <main>
            <div class="gallery">
                <?php 
                
                foreach($images as $image) {
                    $path_parts = pathinfo($target_dir."/".$image);
                    if(in_array($path_parts['extension'], ['jpg', 'JPG'])) {

                ?>
                <div class="galleryS">
                    <div class="image" style="background-image: url('<?= $target_dir."/".$image ?>');">
                        
                    </div>
                    <div class="download"><a href="<?= $target_dir."/".$image ?>" target="_blank">download</a></div>
                </div>
                <?php } } ?>
            </div>
        </main>
    </body>
</html>