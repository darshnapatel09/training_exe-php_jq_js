<!-- 11. Write a JavaScript program to sum the multiples of 3 and 5 under 1000. -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>js_11</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<script type="text/javascript">
		
		var sum = 0;
for (var x = 0; x < 1000; x++)
{
    if (x % 3 === 0 || x % 5 === 0)
    {
       sum += x;
    }
}
console.log(sum);
	</script>
	
</body>
</html>