<?php 
session_start();

include("connection.php");
include("fucntions.php");


if ($_SERVER['REQUEST_METHOD'] =="POST") 
{
	// Something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name)&& !empty($password) && !is_numeric($user_name))
	{

 //save to database
		$user_id = random_num(20);
		$qeury = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

       mysqli_query($con,$query);

       header("Location:login.php");
       die;
   }else
   {
echo "Please enter some valid information"
   }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

<style type="text/css">
	#text{

		height: 25px;
		border-radius: 5px;
		pad: 4px;
		border:solid thin #aaa ;
}


#button{
	
	padding: 10px;
	width:100px ;
	color: pink;
	background-color:deeppink;
	border: none;
}
a
#box{
	
	background-color:hotpink;
	margin: auto;
	width: 300px;
	padding: 20px;
}

</style>

<div id="box">

<form method="post">
	<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

	<input id="text" type="text" name="user_name"><br><br>
	<input id="text" type="password" name="password"><br><br>

<input id="button" type="submit"value="Signup"><br><br>

<a href="login.php">Click to Login</a><br><br>

</form>
</div>
<body>
</html>
