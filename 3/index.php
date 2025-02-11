<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>PHP if statements, switch and loops</h1>

	<?php

	/*

	1) If Statement

		if (condition){
			code to be executed
		}


	2) If ... else statement

		if (condition){
			code to be executed
		} else{
			code to be executed
		}

	3) if...elseif... else sstatement

		if(condition){
			code
		}
		elseif(condition){
			code
		}
		else{
			code
		}


	4) switch statements

		switch(n){
			case label1:
				code to be executer
				n=lael1;
				break;

			case lable2:
				...

			case...

			defalt:
				code to be executed
		}

	*/

	$num = -3;

	if ($num < 0){
		echo "$num is less than 0 <br>";
	}


	//8-18    &&=and   ||=or

	$age = 19;

	if( ($age > 7) && ($age < 19) ){
		echo "You can register! <br>";
	}else{
		echo "You unfortunatly cant register! <br>";
	}



	$age = 5;


	if ($age < 12){
		echo "You are a kid <br>";
	}
	elseif($age < 18){
		echo "You are a teen <br>";
	}
	elseif($age < 60){
		echo "You are an adult <br>";
	}
	else{
		echo "You are a senior <br>";
	}


	$dita = "E enjte";

	switch ($dita) {
		case 'E hene':
			echo "Jave te mbare! <br>";
			break;
		case 'E marte':
			echo "Sot eshte e marte <br>";
			break;
		case 'E merkure':
			echo "Shkoj gjysa e javes! <br>";
			break;
		case 'E enjte':
			echo "Edhe 2 dite! <br>";
			break;
		case 'E premte':
			echo "Iku iku... <br>";
			break;
		default:
			echo " Vikend te mbare! <br>";
			break;
	}


	/*

	for loop

		for (init counter; test counter; increment counter){
			code to be executed
		}


	foreach loop

		foreach ($array as $value){
			code to be executed
		}

	While loop

		while(condition){
			code to be executed
			usually also a code tha changes condition
		}

	do while loop

		do{
			code to be executed
		} while (condition);



	*/

	echo "<br>";

	for ($i=0; $i <= 10 ; $i++) { 
		echo "The number is: $i <br>";
	}

	echo "<br>";

	$cars = array("BMW", "VW", "Audi", "Mercedes");

	foreach ($cars as $value) {
		echo "$value <br>";
	}

	echo "<br>";

	$personi = array("name" => "Filan", "surname"=>"Fisteku", "age" => 50); 

	foreach($personi as $key => $value){
		echo "$key = $value <br> ";
	}


// nese te barabarta paraqit 1  
// nese a > b paraqit 2
// per ndryshe parqit 3

$a = 2;
$b = 2;

	if ($a == $b){
		echo "1";
	}
	elseif ($a > $b){
		echo "2";
	}
	else{
		echo "3";
	}

	echo "<br><br>";

	$x = 1;

	while($x < 5){
		echo "The number is: $x <br>";
		$x++;
	}

	echo "<br><br>";

$y = 1;

	do{
		$y++;
		echo "The number is: $y <br>";
	} while ($y < 1);


	?>


</body>
</html>