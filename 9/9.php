<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lesson 9</title>
</head>
<body>
	<h1>Adding data into Database via html forms using PDO (CRUD)</h1>


		<form action="formLogic.php" method="POST">
		
		<label for="username">Username:</label><br>
		<input type="text" name="username" id="username" placeholder="Username"> <br><br>

		<label for="email">Email:</label><br>
		<input type="email" name="email" id="email" placeholder="filan@gmail.com"><br><br>

		<label for="password">Password:</label><br>
		<input type="password" name="password" id="password" placeholder="Password"><br><br>

		<input type="submit" name="submit">
		
	</form>



</body>
</html>