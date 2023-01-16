<html>
<link rel="stylesheet" type="text/css" href="style.css">

<head>
<title>Trigonometric Function</title>

<body>


<h1>Trigonometry</h1>

<div class="a">

<form action = "" method = "GET">
Input adjacent: <input type = "text" name = "adj" required><br><br>
Input hypotenuse: <input type = "text" name = "hyp" required><br><br>
Input opposite: <input type = "text" name = "opp" required><br>

<br>
<input type = "submit" name = "calc" value = "Calculate">

</form>

</div>

</body>
</head>


</html>


<?php

if(isset($_GET['calc'])){


	$num1 = $_GET['adj'];
	$num2 = $_GET['hyp'];
	$num3 = $_GET['opp'];
    
    $sin = $num3 / $num2;
    $cos = $num1 / $num2;
    $tan = $num2 / $num1;

	echo "First Side: " . $num1;
	echo "<br>Second Side: " . $num2;
	echo "<br>Third Side: " . $num3;
	echo "<br>";
	echo "<br>Sine: " . $sin;
	echo "<br>Cosine: " . $cos;
	echo "<br>Tangent: " . $tan;

}



?>