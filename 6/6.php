<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lesson 6</title>
</head>
<body>
	<h1>PHP File manipulation</h1>


<?php


/*

● fopen
● fclose
● fread
● feof
● fwrite
● file_put_contents

*/

//fopen

/*

$fajlli = fopen("emriFajllit", "metoda"); 

	1) opens a file named "emriFajllit"
	2) metodat per hapjen e fajllave:
		● “w” – Opens a file for write-only mode. If a file does not exist then a new file is created and if the file already exists then the contents of the file are erased.
		● “r” – The file is opened for read-only mode.
		● “a” – File is opened for write-only mode. The file pointer points to the end of the file. Existing data in the file is preserved.
		● “w+” – Opens the file for read and write mode. If a file does not exist then a new file is created and if the file already exists then the contents of the file are erased.
		● “r+” – The file is opened for read/write mode.
		● “a+” – The file is opened for write/read mode. The file pointer points to the end of the file. Existing data in the file is preserved. If the file is not there then a new file is created.
		● “x” – New file is created for write-only mode.

*/

// open, write, close

$my_file = fopen("klasa.txt", "a+");

fwrite($my_file, "Hello! \n");

fclose($my_file);


// open, read, display data

$fajlli = fopen("klasa.txt", "r");

$length_of_file = filesize("klasa.txt");

$file_data = fread($fajlli, $length_of_file);

fclose($fajlli);

var_dump($file_data);


// open, fgets/feof, echo, close

$fajlli2 = fopen("klasa.txt", "r");

while (!feof($fajlli2)) {  
	echo fgets($fajlli2)."<br>";
}
	/* 
	feof - file end of file (e gjen fundin e fajllit)

	fgets - merr rreshtin momental
	*/
fclose($fajlli2);


// file_put_contents - njejt me: open, write, close

file_put_contents("klasa.txt", "Prova \nProva2", FILE_APPEND );

/*
	metodat per file_put_contents:
	- FILE_USE_INCLUDE_PATH - search for filename in the include directory
	- FILE_APPEND - if file already exists, append the data to it - instead of overwriting it
	- LOCK_EX - Put an exclusive lock on the file while writing to it
*/


// file_get_contents - njejt me: open, read, close

echo file_get_contents("klasa.txt");



?>



</body>
</html>