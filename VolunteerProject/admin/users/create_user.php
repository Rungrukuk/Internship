
<?php
include "functions/connections.php";
include "functions/functions.php";
$name = $username = $password = $updated = $usernameError = $passwordError  = $statusError = $nameError /*= $updatedError*/ = $success = $error =  "";
$status = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if($_POST['name'] == '') 
    {
        $nameError = "Name is required";
    }
    else
    {
        $name = clearInput($_POST["name"]);
        if(!preg_match("/^[a-z A-Z' ]*$/",$name)) 
        {
            $nameError = "Only letters allowed";
        }
    }

    if($_POST['username'] == '') 
    {
        $usernameError = "Username is required";
    }
    else
    {
        $username = clearInput($_POST["username"]);
        if(!preg_match("/^[a-z A-Z' ]*$/",$username)) 
        {
            $usernameError = "Only letters allowed";
        }
    }

    if($_POST['password'] == '') 
    {
        $passwordError = "Password is required";
    }
    else
    { 
        $password = md5($_POST["password"]);
    }

    if($_POST['status'] != '')
    {
        $status = (int)$_POST['status'];

        if($status>1 or $status<0)
        {
            $status = 0;
            $statusError = "You can enter only 0 and 1";
        }
    }

    if($usernameError == "" && $passwordError == "" && $nameError == "" && $statusError == "")
    {
        echo "Yes";
        $sql = "INSERT INTO `users`(`name`, `username`, `password`, `status`) VALUES ('$name','$username','$password','$status')";
        if ($conn->query($sql) === TRUE) 
        {
            $success = "New record created successfully";
        } 
        else 
        {
            $error = "Error: " . $sql . "<br>" . $conn->error;
        }
    }


}



?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>
    <form action="" method = "post">
        <span class="error">* <?php/* echo $nameError;*/?></span>
        <label for="name">Name</label>
        <input type="text" name = "name" value="<?php /* echo $name;*/?>">
        </br>
        </br>
        <span class="error">* <?php /* echo $usernameError; */?></span>
        <label for="username">Username</label>
        <input type="text" name = "username" value="<?php /* echo $username; */?>">
        </br>
        </br>
        <span class="error">* <?php /* echo $passwordError; */?></span>
        <label for="password">Password</label>
        <input type="password" name = "password"> 
        </br>
        </br>
        <span class="error">* <?php /* echo $statusError; */?></span>
        <label for="status">Status</label>
        <input type="number" name = "status" value="<?php /* echo $status; */?>">
        </br>
        </br>
        <span class="error">* <?php //echo $updatedError;?></span>
        <label for="updated">Updated Time</label>
        <input type="datetime-local" name = "updated"> 
        </br>
        </br>
        <span class="error"><?php // echo $success;?></span>
        <span class="error"><?php // echo $error;?></span>
        </br>
        </br>
        <input type="submit" value="Login">

    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Users</title>
  <style>
    .error {color: #FF0000;}
    .succes{color: #32CD32;}
    </style>
</head>

<body>
  <nav>
    <div class="header">
      <svg onclick="changeList()" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
        class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
      </svg>
      <svg onclick="changeX()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
        class="bi bi-x-lg" viewBox="0 0 16 16">
        <path
          d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
      </svg>
      <h1>IKIS</h1>
      <input class="form-control" type="text" placeholder="Search">
      <p id="logOut">Log Out</p>
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
        <path fill-rule="evenodd"
          d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
      </svg>
    </div>
  </nav>

  <main>
    <div class="menu-bar">
      <div class="row">
        <div class="left" style="background-color: #4E51A2;"><br>
          <h2>Menu</h2><br>
          <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search" title="Type in a category">
          <ul id="myMenu">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Components</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Tables</a></li>
            <li><a href="#">Forms</a></li>
            <li><a href="#">Pages</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>

    <div>
      <p id="content">İstifadəçi məlumatlarının redaktəsi</p>
      <span class="abb"> Əsas səhifə/ İstifadəçilər</span>
      <div class="container">
        <div class="content">
          <form action="" method = "post">
            <div class="user-details">
              <div class="input-box">
                <span class="error">* <?php echo $nameError;?></span>
                <span class="details">Ad</span>
                <input type="text" required name = "name" value="<?php echo $name;?>" >
              </div>
              <div class="input-box">
                <span class="error">* <?php  echo $usernameError;?></span>
                <span class="details">Username</span>
                <input type="text" required name = "username" value="<?php echo $username;?>" >
              </div>
              <div class="input-box">
                <span class="error">* <?php echo $passwordError;?></span>
                <span class="details">Password</span>
                <input type="password" required name = "password" >
              </div>
              <div class="input-box">
                <span class="error">* <?php  echo $statusError;?></span>
                <span class="details">Status</span>
                <input type="text" required name = "status" value="<?php echo $status;?>" >
              </div>
              <span class="succes"><?php  echo $success;?></span>
                <span class="error"><?php  echo $error;?></span>
            </div>
            <div class="button">
              <input type="submit" value="Yadda saxla">
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="assets/create_volunteer.js"></script>
</body>

</html>