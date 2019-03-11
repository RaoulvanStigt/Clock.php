<?php



	///////////////////////////////////////////////////



	/*
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
	*/




	///////////////////////////////////////////////////





	//                ---{ Lab 3 }---
//3a
	/*
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
*/


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




	///////////////////////////////////////////////////





	//                ---{ Lab 4 }---




?>