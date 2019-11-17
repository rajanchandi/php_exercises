<?php
session_start();
    $username='';
    if(isset($_POST['username']))
    {
        $username=$_POST['username'];
        $_SESSION['SESS_USERNAME']=$username;
    }
    elseif(isset($_POST['logout'])&&$_POST['logout']==='logout'){
        unset($_SESSION['SESS_USERNAME']);
    }
    function user_is_logged() {
        if(empty($_SESSION['SESS_USERNAME']))
        {
            return false;
        }
        else{
            return true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Session : Login/Logout</title>
</head>
<body>
<header>
    <h1>Session : Login/Logout</h1>
</header>
<main>
    <div id="loginout">
        <?php
        if(user_is_logged()){
        ?>
        <form method="post" id="logoutform">
            <input type="submit" name="logout" value="logout"/>
        </form>
        <?php }
        else{
            ?>
        <form method="post" id="loginform">
            <label for="username">Identifiant :</label>
            <input type="text" name="username" id="username" />
            <label for="password">Mot de passe: </label>
            <input type="password" name="password" id="password" />
            <input type="submit" name="login" value="login"/>
        </form>
        <?php
        } 
        ?>
    </div>
</main>
</body>
</html>