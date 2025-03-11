<?php
	include_once 'config.php';

if (isset($_POST['submit'])) {

	$emri = $_POST['emri'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST["password"];

	$passwordHash = password_hash($password, PASSWORD_DEFAULT);


	if( empty($emri) || empty($username) || empty($email) || empty($password) ){

		echo "You need to fill all the fields";

		header("refresh:2; url=signupForm.php");

	}else{

		$sql = "SELECT email FROM users WHERE email=:email";

		$tempSQL = $con -> prepare($sql);
		$tempSQL->bindParam(":email", $email);
		$tempSQL->execute();

		if ($tempSQL->rowCount() > 0){
			echo "This email has already been used to open an acount!";

			header("refresh:2; url=signupForm.php");
		}else{

			$sql = "INSERT INTO users(emri,username,email,password,confirm_password, is_admin) VALUES (:emri, :username, :email, :password, :confirm_password, '')";

			$sqlQuery = $con->prepare($sql);

			$sqlQuery->bindParam(":emri", $emri);
			$sqlQuery->bindParam(":username", $username);
			$sqlQuery->bindParam(":email", $email);
			$sqlQuery->bindParam(":password", $passwordHash);
			$sqlQuery->bindParam(":confirm_password", $passwordHash);

			$sqlQuery->execute();

			header("Location:login.php");
		}
	}
}

?>