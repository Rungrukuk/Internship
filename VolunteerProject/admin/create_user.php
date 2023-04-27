
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

<!DOCTYPE html>
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
        <span class="error">* <?php echo $nameError;?></span>
        <label for="name">Name</label>
        <input type="text" name = "name" value="<?php echo $name;?>">
        </br>
        </br>
        <span class="error">* <?php echo $usernameError;?></span>
        <label for="username">Username</label>
        <input type="text" name = "username" value="<?php echo $username;?>">
        </br>
        </br>
        <span class="error">* <?php echo $passwordError;?></span>
        <label for="password">Password</label>
        <input type="password" name = "password"> 
        </br>
        </br>
        <span class="error">* <?php echo $statusError;?></span>
        <label for="status">Name</label>
        <input type="number" name = "status" value="<?php echo $status;?>">
        </br>
        </br>
        <!-- <span class="error">* <?php //echo $updatedError;?></span>
        <label for="updated">Updated Time</label>
        <input type="datetime-local" name = "updated"> 
        </br>
        </br> -->
        <span class="error"><?php echo $success;?></span>
        <span class="error"><?php echo $error;?></span>
        </br>
        </br>
        <input type="submit" value="Login">

    </form>
</body>
</html>