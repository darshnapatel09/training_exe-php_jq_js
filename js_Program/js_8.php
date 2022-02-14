<!-- 8. Write a JavaScript program that accept two integers and display the larger -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>js_8</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<script>
	var number1, number2;
	number1 = window.prompt("Input the First integer", "0");
	number2 = window.prompt("Input the second integer", "0");
                                                 
	if(parseInt(number1, 10) > parseInt(number2, 10)) 
	  { 
 	 console.log("The larger of "+ number1+ " and "+ number2+ " is "+ number1+ ".");
 	  }   
	else
  	if(parseInt(number2, 10) > parseInt(number1, 10)) 
  	{
  	console.log("The larger of "+ number1+" and "+ number2+ " is "+ number2+ ".");
  	}                  
	else
  	{
   	console.log("The values "+ number1+ " and "+number2+ " are equal.");
  	}	
  

	</script>
	
</body>
</html>