<?php
/**
 * File index.php
 * Check option file_uploads = On in php.ini
 */
// var_dump($_FILES);



?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>File upload : Submission page</title>
    <style>
    </style>
</head>
<body>
<header>
    <h1>File upload : Submission page</h1>
    <nav>
        <ul>
            <li><a href="show_files.php">Goto Display page</a></li>
            <li class="actif"><a href="index.php">Refresh page</a></li>
        </ul>
    </nav>
</header>
<p>This site also accepts external submissions at this address: <?= dirname($_SERVER['HTTP_REFERER']) , '/' , '_upload_from_ajax.php' ?></p>

<form action="_upload_simple.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="somefiles">Choose one image to upload:</label>
        <input type="file" name="thefile" id="thefile" accept="image/*" multiple="multiple" />
        <!--For SEVERAL files upload : input type="file" name="somefiles[]" id="somefiles" accept="image/*" multiple="multiple" /-->
    </div>
    <!--div>
        <label for="somedata">Text data to send:</label>
        <input type="text" placeholder="Accompanying text" id="somedata" name="somedata" size="50"/>
    </div-->
    <div>
        <input type="submit" value="Submit" />
    </div>
</form>

</body>
</html>