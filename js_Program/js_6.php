<!-- 6. Write a JavaScript program to check if a string starts with 'Java' and false otherwise. -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>js_6</title>
	<link rel="stylesheet" href="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<script>
		function string(str){

		if(str.substring(0,4)=="java")
		{
			return true;
		}else 
		{
			return false;
		}
	}
		console.log(string("php"));
		console.log(string("java"));
		console.log(string("css"));
	</script>
	
</body>
</html>