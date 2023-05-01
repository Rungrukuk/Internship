<?php
include "functions/connections.php";
include "functions/functions.php";

$username = $password = $usernameError = $passwordError = $loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['username'] == '') {
        $usernameError = "Username is required";
    } else {
        $username = clearInput($_POST["username"]);
        if (!preg_match("/^[a-z A-Z' ]*$/", $username)) {
            $usernameError = "Only letters allowed";
        }
    }

    if ($_POST['password'] == '') {
        $passwordError = "Password is required";
    } else {
        $password = md5($_POST["password"]);
    }

    if ($usernameError == "" and $passwordError == "") {

        $sql_login = "SELECT * FROM users WHERE `username` = '$username' and `password` = '$password'";

        $result = mysqli_query($conn, $sql_login);

        if (mysqli_num_rows($result) > 0) {

            session_start();
            $_SESSION['user_login'] = 'yes';
            header('Location: index.php');
        } else {
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
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/main.js"></script>
    <script src="https://kit.fontawesome.com/da3bb39bb1.js" crossorigin="anonymous"></script>
    <style>
        .error {
            color: #FF0000;
        }

        .container {
            background-image: url(assets/image/background.webp);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 968px;

        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <img id="logo" src="assets/image/121.png" alt="logo">
            <span class="title">İslahat Könüllülərinin İdarəetmə sistemi</span>
        </header>
        <main class="main">
            <div class="inputArea">
                <form id="form" action="" method="post">
                    <span class="error">*
                        <?php echo $usernameError; ?>
                    </span>
                    <p id="userName">Username</p>
                    <input class="userArea" name="username" type="text" value="<?php echo $username; ?>">
                    <i class="fa-regular fa-user" style="color: #000000;"></i>
                    <span class="error">*
                        <?php echo $passwordError; ?>
                    </span>
                    <p id="passWord">Password</p>
                    <input class="passArea" id="password" name="password" type="password">
                    <img id="passLogo" src="assets/image/Vector.png">
                    <img id="eyeIconHide" class="hide" onclick="hiden()" src="assets/image/hide.png">
                    <img id="eyeIconView" class="view" onclick="viewer()" src="assets/image/view.png"><br>
                    <span class="error">*
                        <?php echo $loginError; ?>
                    </span>
                    <div class="rememberMe">
                        <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember
                            me</label><br>
                        <input class="loginButton" type="submit" value="Login" onclick="lsRememberMe()">
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>