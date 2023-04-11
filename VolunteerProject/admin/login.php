<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<meta charset="utf-8">
</head>
<body>  

<?php
include "./functions/dbConnection.php";
include "./functions/functions.php";

$username = $password = $usernameError = $passwordError = $login_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["username"])) {
    $usernameError = "İstifadəçi adı boşdur!";
  } else {
    $username = clearInputs($_POST["username"]);
    if (!preg_match("/^[a-z A-Z-' ]*$/",$username)) {
      $usernameError = "Yalnız hərflər ola bilər!";
    }
  }

  if (empty($_POST["password"])) {
    $passwordError = "Şifrə sahəsi boşdur!";
  } else {
    $password = md5($_POST["password"]);
  }

  if($usernameError == "" and $passwordError == ""){

      $sql_login = "SELECT * FROM user WHERE `u_username` = '$username' and  `u_password` = '$password'";

      $result = mysqli_query($conn, $sql_login);

      if(mysqli_num_rows($result) > 0){

         session_start();
         $_SESSION['user_login'] = 'yes';
         header('Location: index.php');

      }else{

        $login_error = "İstifadəçi adı və ya şifrə yanlışdır.";

     }

  }
  

  
}


?>




<h2>Login formu</h2>
<p>

  <span class="error">* bu hissələrin doldurulması məcburidir!</span>

</p>
<p style="color: red; font-size: 15px;"><?=$login_error?></p>
     <form method="post" action="">
         İstifadəçi adı:
         <input type="text" value="<?=$username?>" name="username" placeholder="İstifadəçi adınızı yazın..">
         <span class="error">* <?php echo $usernameError;?></span>
         <br><br>
         Şifrə:
         <input type="password" name="password" placeholder="Şifrə yazın..">
         <span class="error">* <?php echo $passwordError;?></span>
         <br><br>
         <input type="submit" name="submit" value="Giriş"> 
     </form>

</body>
</html>