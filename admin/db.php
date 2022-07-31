<?php
$db= mysqli_connect('127.0.0.1','root','','mgl850');
if(mysqli_connect_error())
{
	echo 'Database connection failed with following errors: '.mysqli_connect_error();
	die();
	}
?>