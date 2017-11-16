<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>test php</title>
</head>
<body>
	<?php
	

	if(!isset($_SESSION['name']))
		echo 'Not login';
	else echo 'hello'.$_SESSION['name'];
	?>

	<form action="welcome.php" method="post">
		id:<input type="text" name="id"><br>
		name:<input type="text" name="name"><br>
		grade:<input type="text" name="grade"><br>
		<input type="submit" value="submit">
		<input type="submit" formaction="add.php" value="add">
		<input type="submit" formaction="show.php" value="show">
		<input type="submit" formaction="delete.php" value="delete">
		<input type="submit" formaction="update.php" value="update">
		<input type="submit" formaction="login.php" value="login">
		<input type="submit" formaction="logout.php" value="logout">
	</form>


<?php 
	/*
	echo "<h1>HELLO WORLD</h1>";
	echo "Hello world<br>"; 
	print "Hello php<br>";
	printf("Hello world");

	$id = 100;
	$name = "supanut";
	$grade = 4.00;
	//var_dump($id);
	$myarray = array(101,"supanut",3);
	echo $myarray[1];
	*/

	/*
	$num = 5;
	if($num == 5)
	{
		echo "num = 5";
	}
	else
	{
		echo "num != 5";
	}
	*/
	/*
	for($num = 0 ; $num < 10 ; $num++)
	{
		echo $num;
	}
	*/
?>




</body>
</html>




