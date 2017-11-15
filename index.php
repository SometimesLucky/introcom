<!DOCTYPE html>
<html>
<head>
	<title>test php</title>
</head>
<body>
<form action="welcome.php" method="post">
<!--ข้อแตกต่างของpostกับget คือ get สามารถเห็นข้อมูลที่ส่งไปได้ ไม่ปลอดภัย เช่น method = "get"-->

	id:<input type="text" name="id"><br>
	name:<input type="text" name="name"><br>
	grade:<input type="text" name="grade"><br>
	<input type="submit" name="submit">
	<input type="submit" formaction="add.php" value = "add">
	<input type="submit" formaction="show.php" value = "show">
	

</form>
<?php
echo "<h1> Hello world0</h1>";
print "some text<br>";
printf("some text again<br>");

$one = "hello world1";
$two = 100;
$three = 100.1;
var_dump($three);
echo "<br>-------".$one."---------<br>";

$myarray = array("first",2,3.0 );
echo $myarray[0]."<br>";

foreach ($myarray as $key) {
	echo $key."<br>";
}

if($myarray[1]==2)
{
	echo "There u go with a condition<br>";
}
else
;

for($loop_index = 0; $loop_index < 5; $loop_index++)
{
	echo $loop_index."<br>";
}
?>

</body>
</html>