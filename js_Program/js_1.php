<!-- Write a JavaScript program to check two given numbers and return true if one of the number is 50 or if their sum is 50 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>js_1</title>
	<link rel="stylesheet" href="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	
	<script>

		function check_num(a,b){
			return ((a == 50 || b == 50) || (a + b == 50));
		}
		
		console.log(check_num(50,50))
		console.log(check_num(20,50))
		console.log(check_num(20,30))
		console.log(check_num(20,20))

		
		
	</script>
</body>
</html>