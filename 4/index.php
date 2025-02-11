<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>PHP Functions, arrays and array functions</h1>

	<?php

	/*

	built in functions:
		phpinfo();
		print_r();
		gettype();



	user defined functions:

		function emriFunksionit(){  <<--krijimi
			code to be executed;
		}

		emriFunksionit(); <<-- thirrja

	*/

		$x = 5;
		$y = 10.3;
		$z = "hello";

		echo gettype($x). "<br>";
		echo gettype($y). "<br>";
		echo gettype($z). "<br>";


		function displayPHPverzion()
		{
			echo "This is PHP ".phpversion();
			echo "<br>";
		}

		displayPHPverzion();


		function sum($num1, $num2){
			$value = $num1 + $num2;
			echo $value."<br>";
		}

		sum(4,17);
		sum(123,456);


		function maxium($x, $y)
		{			
			if($x>$y){
				return $x;
			}else{
				return $y;
			}

		}

		$a=20;
		$b=30;

		$test = maxium($a,$b);
		echo "The max of $a and $b is $test <br>";


		/*

		PHP Variables Scope

		local
		global
		static 

		If a variable is declared outside a function has a Global Scope and can only be accessed outside a function. 

		A variable declared within a function has a Local Scope and can only be accessed within that function. 

		A variable can be defined by using the static keyword inside a function. A static variable does not lose its value when the program execution goes past the scope boundary. But it can be accessed only within that boundary. 

		*/


		$g = 5;  //global variable

		function localVariable()
		{
			$l = 10;			//local varible
			//echo $g;
			echo $l."<br>";

			global $g;
			echo $g."<br>";
			$l++; 				//1(numer) vs l(shkronje)
		}

		localVariable();
		localVariable();
		echo $g."<br>";

		function test(){
			static $s = 0;		//static
			echo $s."<br>";
			$s++;
		}

		test();
		test();
		test();

		/*
		Array

		● Arrays are used to contain more than one value in one variable. 
		● Arrays allow you to avoid multiple unnecessary variables. 
		● PHP Arrays index always start at 0. 

		In PHP, there are three types of arrays: 
		● Indexed arrays - Arrays with a numeric index 
		● Associative arrays - Arrays with named keys 
		● Multidimensional arrays - Arrays containing one or more arrays 

		*/

		$sport1 = "football";
		$sport2 = "basketboll";
		$sprot3 = "handball";

		$sports = array("Football", "Basketboll", "Handball", "Volejboll");

		echo $sports[0]."<BR>";
		
		echo end($sports)."<BR>";

		echo count($sports)."<BR>";

		$len = count($sports);

		for ($i=0; $i < $len; $i++) { 
			echo $sports[$i], "\n";
		}


		/*
			● array_push		-- adds elements at the end of array
			● array_pop			-- removes from the end
			● array_unshift		-- adds at the start		
			● array_shift		-- removes from start
			● array_slice		-- adds or removes anyplace
			● array_sum			-- sum of values

		*/

		

		echo "<br><br>";
		$pc = array("Dell", "Lenovo", "Macbook", "Acer");
		
		array_push($pc, "Razer");
		var_dump($pc);
		
		echo "<br>";
		array_pop($pc);
		var_dump($pc);

		echo "<br>";
		array_unshift($pc, "Razer");
		var_dump($pc);

		echo "<br>";
		array_shift($pc);
		var_dump($pc);

		echo "<br><br>";
		
		var_dump(array_slice($pc, 2, 1, "Razer"));
		echo "<br>";

		var_dump(array_slice($pc, 2,2)); // numri i pare = pozita, numri i dyte = sa mi largu
		

		echo "<br><br>";
		$numrat_e_Lirakut = array(2, 4, 5, 8, 2, 50);
		$numrat_e_Lirakut2 = [4, 1, 6, 2, 9, 3];

		echo array_sum($numrat_e_Lirakut)."<br>";
		echo array_sum($numrat_e_Lirakut2);

		?>

</body>
</html>