<?php
	

$server_name = 'mysql';
$database = 'testphp';
$user = 'root';
$password = '123456789';

$con = mysqli_connect($server_name, $user,$password);

mysqli_select_db($con,$database);

$name =$_POST['name'];

$query = "DELETE FROM person WHERE name='$name'";

$result = mysqli_query($con,$query);

if($result)
	echo 'delete success';
else echo 'delete fail';