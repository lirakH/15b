<?php
	include_once "config.php";

	$id = $_GET['id'];

	$sql = "SELECT * FROM users WHERE id=:id";

	$prep = $con->prepare($sql);
	$prep->bindParam(":id", $id);
	$prep->execute();

	$data = $prep->fetch();

	//var_dump($data);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit form</title>
</head>
<body>

	<form action="editLogic.php" method="POST">
		<input type="hidden" name="id" value="<?= $data["id"]?>">

		<label for="username">Username:</label><br>
		<input type="text" name="username" id="username" placeholder="Username" value="<?= $data["name"]?>"> <br><br>

		<label for="email">Email:</label><br>
		<input type="email" name="email" id="email" placeholder="filan@gmail.com" value="<?= $data["email"]?>"><br><br>

		<label for="password">Password:</label><br>
		<input type="password" name="password" id="password" placeholder="Password" ><br><br>

		<input type="submit" name="submit">
		
	</form>



</body>
</html>