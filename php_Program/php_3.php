<!-- 3. Given below array :
$arr_variable = array ('PHP','MySQL','Java');
Print below output using for loop:
The output of for loop should be as given below :
The element [0]:PHP
The element [1]:MySQL
The element [2]:Java -->


<?php
$arr = array ('PHP','MySQL','Java');
$arrlength = count($arr);

for($a = 0; $a < $arrlength; $a++) {
  echo "the element of [$a]:".$arr[$a];
  echo "<br>";
}
?>
