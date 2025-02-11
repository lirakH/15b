<?php
	include_once 'config.php';
	//include_once('config.php');
	//include 'file';
	//require 'file';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST["password"];

	$passwordHash = password_hash($password, PASSWORD_DEFAULT);


	$sql = "INSERT INTO users(name,email,password) VALUES (:username, :email, :password)";

	$sqlQuery = $con->prepare($sql);

	$sqlQuery->bindParam(":username", $username);
	$sqlQuery->bindParam(":email", $email);
	$sqlQuery->bindParam(":password", $passwordHash);

	$sqlQuery->execute();

	header("Location:../10/dashboard.php");
}

	header("Location:../10/dashboard.php");
?>