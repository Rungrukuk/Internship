<?php 
session_start();
if (!isset($_SESSION['user_login'])) {
	 header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
  <h3>Hello</h3>
</body>
</html>