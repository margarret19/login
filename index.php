<?php
session_start();

include("connection.php");
include("fucntions.php");

$user_data = check_login($con)

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

<a href="logout.php">Logout</a>
<h1>This is the index page</h1>

Hello, <?php echo $user_data ['user_name'];?>