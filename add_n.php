<?php
	

$server_name = 'mysql';
$database = 'testphp';
$user = 'root';
$password = '123456789';

$con = mysqli_connect($server_name, $user,$password);

if($con -> connect_error)
	die ('Conection failed');

echo 'connect success';

mysqli_select_db($con,$database);

//var_dump($_POST);

$id = $_POST['id'];
$name = $_POST['name'];
$grade = $_POST['grade'];

$query = "INSERT INTO person(id,name,grade) VALUES($id,'$name',$grade);";

//mysqli_query($con,$query);

