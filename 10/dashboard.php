<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lesson 10</title>

	<style>
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
</head>
<body>

	<h1>Fetching all the data from Database and show them in a table (CRUD)</h1>

	<?php
		include_once 'fetch.php';
	?>

	<a href="../9/9.php">Shto perdorues</a>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Edit / Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($datas as $data){
			?>
					<tr>
						<td><?= $data["id"]?></td>
						<td><?= $data["name"]?></td>
						<td><?= $data["email"]?></td>
						<td>Edit / Delete</td>
					</tr>
			<?php
				}
			?>
		</tbody>
	</table>


</body>
</html>