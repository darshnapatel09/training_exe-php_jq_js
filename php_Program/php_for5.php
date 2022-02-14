<!-- 5. Write a PHP program to generate and display the first n lines of a Floyd triangle.
(use n=5 and n=11 rows).
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15 -->

<?php
	$a= 1;
	for ($i = 0; $i < 5; $i++)
	{
		
		for ($j = 0; $j <= $i; $j++ )
		{
			echo $a." ";
			$a = $a + 1;
		}
		echo "<br>";
	}



?>
