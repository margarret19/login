<?php

function check_login($con)
{

if(isset($_SESSION['user_id']))	
{

$id = $_SESSION['user_id'];
$query = "select * from users where user_id = $id limit 1";

$result = mysql_query($con,$query);
if ($result && mysqli_num_rows($result) > 0) 
{

$user_data = mysqli_fetch_assoc($result);
return $user_data;	
	}
}

//redirect to login 
header("Location: login.php");
die;

}

functions raddom_num($length)
{

$text = "";
if($lenght < 5);
{
$lenght = 5;
}

$len = rand (4,$length);

for ($i=0; $i < $len; $i++){
#code...

$text .= rand(0,9)	
}

return $text;
}
