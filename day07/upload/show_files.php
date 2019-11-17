<?php

/**
 * File show_files.php
 */

const FILES_DIR = './uploaded_files/';
const FILES_NAME = '*';
$filenames = glob(FILES_DIR . FILES_NAME);
?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>File upload : Display uploaded images page</title>
    <style>
        .img_cont {
            display: inline-block;
        }
        .img_cont img {
            width: 75px;
        }
        .img_cont h3 {
            margin: 0;
            display : inline;
            writing-mode: vertical-lr;
            /*text-orientation: sideways;*/
            font-family : "Courier New", Courier, monospace;
            font-size : 12px;
            color : #801070;
        }

    </style>
</head>
<body>
<header>
    <h1>File upload : Display uploaded images page</h1>
    <nav>
        <ul>
            <li class="actif"><a href="index.php">Go to submission page</a></li>
            <li><a href="show_files.php">Refresh page</a></li>
        </ul>
    </nav>
</header>
<output id="output">
    <?php
        foreach($filenames as $filename) {
            if (in_array(pathinfo($filename, PATHINFO_EXTENSION), ['jpg', 'png', 'gif'])) {
                $somedata = 'No data associated with file';
                if (file_exists($filename . '.somedata.txt')) {
                    $somedata = file_get_contents($filename . '.somedata.txt');
                }
    ?>
                <div class="img_cont">
                    <img src="<?= $filename?>" alt="">
                    <h3><?= $somedata ?></h3>
                </div>
    <?php
            }
        }
    ?>
</output>
</body>
</html>