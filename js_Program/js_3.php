<!-- Write a JavaScript program to create a new string adding "Py" in front of a given string. If the given string begins with "Py" then return the original string -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>js_3</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<script>
		function character(str1){
			if(str1 === null || str1 === undefined || str1.substring(0,2) === 'Py')
			{
				return str1;
			}
			else
			{
				return "Py" + str1;
			}
		}
		console.log(character("Python"))
		console.log(character("thon"))
	
	</script>
</body>
</html>