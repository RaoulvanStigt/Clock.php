<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0″/>
	<link rel="stylesheet" type="text/css" href="../clock.css">
</head>
<body>
	<?php include 'headerMenu.php'; ?>
	<?php

	//                ---{ Lab 2 }---
	//opdracht 1

	echo "<h1>Hello world!</h1><br><br>";

	//opdracht 2

	define("hello", "Hello world!  <br><br>");
	echo hello;

	//opdracht 3

	$txt = "Learning PHP <br> Hello World! <br><br>";	 
	echo $txt;

	//opdracht 4
	$txt1 = "Hello ";	
	$txt2 = "world!";	 
	print "<h1>$txt1 $txt2</h1><br><br>";

	//opdracht 5

	define("hello", "Hello" , "world!");
	echo hello;

	?>
</body>
</html>