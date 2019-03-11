<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0″/>
	<link rel="stylesheet" type="text/css" href="../clock.css">
</head>
<body>
	<?php include 'headerMenu.php'; ?>
	<?php

	//                ---{ Lab 3 }---
//3a

	$x = (rand(10,100));
	$y = (rand(10,100));

	echo "$x + $y " . "= ";
	echo $x + $y . "<br>";

	echo "$x " . "- " . "$y " . "= ";
	echo $x - $y . "<br>";

	echo "$x " . "x " . "$y " . "= ";
	echo $x * $y . "<br>";

	echo "$x " . "/ " . "$y " . "= ";
	echo $x / $y . "<br>";
	echo "<br>";


//3b

	$number = array(3 , 5, 8, 12);

	function numberXSix ($getal) {
		for ($i = 1; $i <=10 ;$i++){
			echo "$i x $getal = " . $i * $getal . "<br>";

		}
	}

	foreach ($number as $value){
			numberxSix($value);
			echo "<br>";
		}

	?>
</body>
</html>