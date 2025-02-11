<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<dl>
		<dt>Chihuahua</dt>
		<dd>Origin: Mexico, Life Span: 20</dd>
	</dl>

	<?php
	$dogs = array(
		array("Chihuahua", "Mexico", 20, "Brown, Gold, Black"), 
		array("Husky", "Siberia", 15, "White, Gray, Red"), 
		array("Bulldog", "England", 10, "Grey, White, Brown"),
		array("PitBull", "England", 10, "Brown, Black, Grey"),
		array("GermanShepard", "German", 20, "Brown, Black"),
		array("Sharri", "Kosovo", 15, "White, Black",
			array("Bubi", "Reksi", "Maksi")
		),
	);

	echo "<br>";
	echo "<dl>";
		echo "<dt>".$dogs[0][0]."</dt><dd>Origin: ".$dogs[0][1].", Life Span: ".$dogs[0][2]."</dd>";
		echo "<dt>".$dogs[1][0]."</dt><dd>Origin: ".$dogs[1][1].", Life Span: ".$dogs[1][2]."</dd>";
		echo "<dt>".$dogs[2][0]."</dt><dd>Origin: ".$dogs[2][1].", Life Span: ".$dogs[2][2]."</dd>";
	echo "</dl>";

	echo "<br>";
	echo "<ul>";	
		for ($i=0; $i < 6; $i++) { 
			echo "<li>".$dogs[$i][0]."</li>";
				echo "<ul>";
					for ($a=1; $a < 4 ; $a++) {
						echo "<li>".$dogs[$i][$a]."</li>";
					}
				echo "</ul>";
		}
	echo "</ul>";
	echo "<br>";

	?>

<ul>
	<li>Chihuahua</li>
	<ul>
		<li>Mexico</li>
		<li>20</li>
		<li>Brown, Gold, Black</li>
	</ul>
	<li>Husky</li>
	<ul>
		<li>Siberia</li>
		<li>20</li>
		<li>White, Gray, Red</li>
	</ul>
	<li>Bulldog</li>
	<ul>
		<li>England</li>
		<li>20</li>
		<li>Grey, White, Brown</li>
	</ul>
	<li>PitBull</li>
	<ul>
		<li>England</li>
		<li>15</li>
		<li>Brown, Black, Grey</li>
	</ul>
</ul>



</body>
</html>