<!-- Write a JavaScript program to check from two given integers, if one is positive and one is  negative. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>js_2</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<script>
		function check_positive(a,b){
			if((a<0 && b>0) || a>0 && b<0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		console.log(check_positive(5,5))
		console.log(check_positive(-5,5))
		console.log(check_positive(5,-5))
		console.log(check_positive(-5,-5))
	</script>
</body>
</html>