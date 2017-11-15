<?php

$server_name = 'mysql';
$database = 'testphp';
$user = 'root';
$password = '123456789';

$con = mysqli_connect($server_name,$user,$password);

if (!$con)
 	die('Connection error'.mysql_connect_error());
else
echo 'connect success';

mysqli_select_db($con, $database);

$query = "SELECT * from person"; 
$result = mysqli_query($con,$query);
var_dump($result);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "Grade" . $row["grade"]. "<br>";
    }
}
?>