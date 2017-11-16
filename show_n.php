<?php
	

$server_name = 'mysql';
$database = 'testphp';
$user = 'root';
$password = '123456789';

$con = mysqli_connect($server_name, $user,$password);

if($con -> connect_error)
	die ('Conection failed');

echo 'connect success<br>';

mysqli_select_db($con,$database);

$query = "SELECT * FROM person";

$result = mysqli_query($con,$query);


/*
<table width="100%">
<tr>
	<td>id</td>
	<td>name</td>
	<td>grade</td>
</tr>
</table>
*/


//var_dump($result);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"] . "Grade" .$row["Grade"]. "<br>";
    }
}