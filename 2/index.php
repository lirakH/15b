<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>My first php page</h1>

	<p>Hello World!!</p>

	<?php

		echo "Hello World!!";

		//SQL - Structured Query Language

		/*
		SQL:

			SELECT * FROM Studentat;
		*/

		echo "<h2>Variables</h2>";

		echo "Variables are used for storing values such as numeric values, characters, character strings, or memory addresses so that they can be used in any part of the program.";

		// Data Type: Float, String, Booleans, Array, Object, resource, and NULL

		$emri_mbiemri = "Liraku";

		/*
			A valid variable name starts with a letter (A-Z, a-z) or underscore (_), followed by any number of letters, numbers, or underscores.
			If a variable name is more than one word, it can be separated with an underscore (for example $student_id instead of $studentid).
			'$' is a special variable that can not be assigned.

			DATA TYPE (Vlerat qe munet mi marr variabla )
	
			integers: 	1, 2, 3, -1, -4
			strings: 	fjale ose fjali
			float: 		1.4, 1.8, 4.2,
			booleans:	true or false
			arrays:		lista  
			objects:	objekte
			null:		NULL (e zbrazet)
			resource:	lidhje e jashtme (fajlla ose webfaqe)

			array - variable qe munet me majte ma shume se 1 vlere
		*/

		echo "<br><br>";

		$x = 120;
		$y = 50;

		echo $x - $y;
		
		echo "<br>";
		echo $x + $y;

		echo "<br>";
		echo $x * $y;

		echo "<br>";
		echo $x / $y;

		echo "<br>";
		echo $x % $y;

		echo "<br><br>";

		$a = "Digjital";
		$b = "School";

		echo $a;
		echo "<br>";
		echo $b;

		echo "<br>";
		echo nl2br("Fjalia: \n");

		echo $a." ".$b;

		echo "<br><br>";
		echo "fjala"."\r\n"."fjala2";

		echo "<br><br>";
		$fjalia = "sa shkronja i ka fjalia";
		echo strlen($fjalia);

		echo "<br>";
		echo str_word_count($fjalia);

		echo "<br>";
		echo $fjalia;
		echo "<br>";
		echo str_replace("shkronja", "fjale", $fjalia);

		echo "<br>";
		echo "<br>";

		?>

		<?php


		$emri = "Lirak";

		$mbiemri = "Hamiti";

		echo "Hello, ".$emri." ".$mbiemri."!";



		$pi = 3.14;

		//$r = readline("Enter your radius: ");
		$r = 20;

		$A = $pi * ($r ** 2); // Correct way to calculate the area.
		echo "The area of the circle is: $A\n";
		
		?>


</body>
</html>

