<?php

	include_once 'config.php';

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$passwordHash = password_hash($password, PASSWORD_DEFAULT);


		try{
			$sql = "UPDATE users SET name = :username, email = :email, password = :password WHERE id = :id";

			$prep = $con->prepare($sql);
			$prep->bindParam(":id", $id);
			$prep->bindParam(":username", $username);
			$prep->bindParam(":email", $email);
			$prep->bindParam(":password", $passwordHash);

			$prep->execute();

			header("Location: dashboard.php");
		} catch (PDOExeption $e){
			echo "Error: ".$e->getMessage();
		}
	}
?>