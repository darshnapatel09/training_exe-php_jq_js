
<!-- 1.Find the sum of all even numbers from 1 to n. Put a form with a textbox and
submit button. n should be entered via a text box and on click of submit button
print sum. -->

<?php

if(isset($_POST['submit']))
{
	$num = $_POST['num'];
	$sum = 0;
	for ($i=0; $i < $num ; $i+=2) 
	{ 
		$sum += $i;	


	}
	echo $sum;
}
?>
 <!DOCTYPE html>
<html>
<head>
	<title>php_1 </title>
</head>
<body>
	<form method="POST">
	<input type="text" name="num" >
	<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
