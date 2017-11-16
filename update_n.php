<?php
	

$server_name = 'mysql';
$database = 'testphp';
$user = 'root';
$password = '123456789';

$con = mysqli_connect($server_name, $user,$password);

mysqli_select_db($con,$database);

$name = $_POST['name'];
$grade =$_POST['grade'];
$id =$_POST['id'];
$query = "UPDATE person SET name='$name',grade='$grade',id='$id' WHERE id=$id";

$result = mysqli_query($con,$query);

if($result)
	echo 'update success';
else echo 'update fail';





