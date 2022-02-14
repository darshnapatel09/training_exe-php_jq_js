<!-- 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
hyphen(-) at the starting and ending position
 -->

<?php
for($a=1; $a<=10; $a++)
{
 if($a < 10)
 {
 echo "$a-";
 }
 else
  {
 echo "$a"."\n";
  }
}

?>