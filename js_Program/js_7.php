<!-- 7. Write a JavaScript function that accepts a string as a parameter and find the longest word 
within the string.
Example string : 'Web Development Tutorial'
Expected Output : 'Development -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>js_7</title>
	<link rel="stylesheet" href="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<script>
		function checklong(str)
		{
			var array=str.match(/\w[a-z]{0,}/gi);
			var result = array[0];

			for(var x=1; x<array.length;x++)
			{
				if(result.length<array[x].length)
				{
					result =array[x];
				}
				else
				{
					return result;
				}
			}
		}
		console.log(checklong('web Development Tutorial'));
	</script>
	
</body>
</html>