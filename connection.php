<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

($con = mysqli_connect($dbhost,$dbuser,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!")
}