<!-- 1. $color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,
● green
● red
● white
 -->

 <?php
$colors = array('white','green','red');

foreach ($colors as $value) {
	echo $value.",";

}
sort($colors);
// echo "<ul>";

foreach ($colors as $value) {
	echo "<li>$value</li>";
}
// echo "</ul>";


 ?>