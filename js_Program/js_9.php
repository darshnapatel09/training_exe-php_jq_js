<!-- 9. Write a JavaScript conditional statement to find the largest of five numbers. Display an alert 
box to show the result.
Sample numbers: -5, -2, -6, 0, -1
Output: 0 -->

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>js_9</title>
</head>
<body>
  	<script>
  		a=-5;
        b=-2;
        c=-6;
        d= 0;
        f=-1;
if (a>b && a>c && a>d && a>f)
{
    console.log(a);
}
else if (b>a && b>c && b>d && b>f)
{
    console.log(b);
}
else if (c>a && c>b && c>d && c>f)
{
    console.log(c);
}
else if (d>a && d>c && d>b && d>f)
{
    console.log(d);
}
else
{
    console.log(f);
}
  </script>


</body>
</html>
