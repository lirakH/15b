<?php 

	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "databaza3B";


/*   
	SQL - Structured Query Language
	PDO - Php Data Object
*/


/* - create databaze

	try {
		
		$con = new PDO("mysql:host=$host;", $user, $password);

		$sql = "CREATE DATABASE databaza3B";

		$con->exec($sql);

		echo "Conected to server and created databaze";

	} catch (Exception $e) {
	
		echo "This error ocured:".$e;

	}

*/

/* - create table in databaze 

	try {
		
		$con = new PDO("mysql:host=$host; dbname=$db", $user, $password);

		$sql = "CREATE table users(id int NOT NULL AUTO_INCREMENT, name VARCHAR(20), surname VARCHAR(20), email VARCHAR(20), password VARCHAR(255), PRIMARY KEY(id))";

		$con->exec($sql);

		echo "Table 'users' has been create into the databaze";

	} catch (Exception $e) {
	
		echo "This error ocured:".$e;

	}

*/


/* Popullimi i tabeles (Vendosja e te dhanave ne tabele) 


	try {
		
		$con = new PDO("mysql:host=$host; dbname=$db", $user, $password);

		$sql = "INSERT INTO users(name, surname, email, password) value('Lirak', 'Hamiti', 'lirakhamiti@gmail.com', '1234')";

		$con->exec($sql);

		echo "The data has been added!!";

	} catch (Exception $e) {
	
		echo "This error ocured:".$e;

	}
*/

/* Delete table using PDO

	try {
		$con = new PDO("mysql:host=$host; dbname=$db", $user, $password);

		$sql = "DROP table users";

		$con->exec($sql);

		echo "Tabela u fshi me sukses!";

	} catch (Exception $e) {
		echo $e;	
	}

*/

// Delete column using pdo

	try {
		$con = new PDO("mysql:host=$host; dbname=$db", $user, $password);

		$sql = "ALTER TABLE users DROP COLUMN surname";

		$con->exec($sql);

		echo "Kolona u fshi me sukses!";

	} catch (Exception $e) {
		echo $e;	
	}

?>