<?php

require 'config.php';

if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$password = $_POST["password"];

	if( empty($email) || empty($password) ){

		echo "You need to fill all the fields";

		header("refresh:2; url=signinForm.php");

	}else{

		$sql = "SELECT * FROM users WHERE email=:email";

		$tempSQL = $con -> prepare($sql);
		$tempSQL->bindParam(":email", $email);
		$tempSQL->execute();

		if ($tempSQL->rowCount() > 0){
			
			$data = $tempSQL->fetch();

			if(password_verify($password, $data['password'])){

				$_SESSION['username'] = $data['name'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['role'] = $data['role'];

				header("Location:index.php");

			}else{
				echo "password incorrect!!";

				header("refresh:2; url=signinForm.php");
			}

		}else{

			echo "User not found!!";

			header("refresh:2; url=signinForm.php");
		}
	}
}
?>