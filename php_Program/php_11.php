<!-- 11. Print below output using for loop
A A A A A
B B B B
C C C
D D
E -->

<?php
$letters=range('A','Z');

 for($i=0;$i<5;$i++){
 	for($j=5;$j>$i;$j--)
 	{
 		echo $letters[$i];
 	}
 	echo "<br>";
 }
?>