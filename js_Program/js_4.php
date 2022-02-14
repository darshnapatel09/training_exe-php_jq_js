<!-- Write a JavaScript program to compute the sum of the two given integers. If the two values  are same, then returns triple their sum. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>js_4</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<script>
		function sum(a,b){
			if(a == b)
			{
				return 3* (a+b);
			}
			else
			{
				return (a+b);
			}
		}
		console.log(sum(10,20))
		console.log(sum(10,10))
	
	</script>
</body>
</html>