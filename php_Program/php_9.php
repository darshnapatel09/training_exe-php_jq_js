<!-- 9. Print below output using for loop
1 2 3 4 5
1 2 3 4
1 2 3
1 2
1 -->

<?php

for($i=1;$i<=5;$i++){
		for($j=1;$j<=5-$i+1;$j++)
		{
			echo $j . " ";
		}
		echo"<br>";
	}



?>