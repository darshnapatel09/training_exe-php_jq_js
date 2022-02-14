<!-- 3. Write a PHP script to sort the following associative array :
 array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") 
 -->


<?php
$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($a);
foreach ($a as $name => $age) {
 echo "name :".$name ." and age :".$age."<br>";
}


?>
