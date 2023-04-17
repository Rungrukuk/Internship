<?php
include "functions/connections.php";
include "functions/functions.php";

$username = $password = $usernameError = $passwordError = $loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST['username'] == '') {
        $usernameError = "Username is required";
    }else{
    $username = clearInput($_POST["username"]);
    if (!preg_match("/^[a-z A-Z' ]*$/",$username)) {
        $usernameError = "Only letters allowed";
      }
     }

if($_POST['password'] == '') {
   $passwordError = "Password is required";
}else{ 
    $password = md5($_POST["password"]);
}

if($usernameError == "" and $passwordError == ""){

    $sql_login = "SELECT * FROM users WHERE `username` = '$username' and `password` = '$password'";

    $result = mysqli_query($connections,$sql_login);
    
    if(mysqli_num_rows($result) > 0){
        
            session_start();
            $_SESSION['user_login'] = 'yes';
            header('Location: index.php');
        }
        else{
            $loginError = "Username or Password is wrong";
        }
    }

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css&javascript/page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="css&javascript/page.js"></script>
    <script src="https://kit.fontawesome.com/da3bb39bb1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header class="header">
            <img id="logo" src="css&javascript/image/121.png" alt="logo">
            <span class="title">İslahat Könüllülərinin İdarəetmə sistemi</span>
        </header>
        <main class="main">
            <div class="inputArea">
                <form id="form" action="" method="post">
                    <p id="userName">Username</p>
                    <input class="userArea" name="username" type="text">
                    <i class="fa-regular fa-user" style="color: #000000;"></i>
                    <p id="passWord">Password</p>
                    <input class="passArea" id="password" name="password" type="password">
                    <img id="passLogo" src="css&javascript/image/Vector.png">
                    <img id="eyeIconHide" class="hide" onclick="hiden()" src="css&javascript/image/hide.png">
                    <img id="eyeIconView" class="view" onclick="viewer()" src="css&javascript/image/view.png"><br>
                    <div class="rememberMe">
                        <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label><br>
                        <input class="loginButton" type="submit" value="Login" onclick="lsRememberMe()">
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>