<?php
	include_once 'header.php';

	if ( empty($_SESSION['username']) ){
		header("Location: signinForm.php");
	}

	$email = $_SESSION['email'];

	$sql = "SELECT * FROM users WHERE email=:email";
	$tempSQL = $con -> prepare($sql);
	$tempSQL->bindParam(":email", $email);
	$tempSQL->execute();
	$data = $tempSQL->fetch();

?>

	<h1>Profile / Dashboard</h1>

	<div class="d-flex flex-column align-items-center justify-content-center">
		<p><b>ID:</b> <?= $data['id'] ?></p>

		<h3>Emri:</h3>
		<p><?= $data['name'] ?></p>
		
		<h3>Email:</h3>
		<p><?= $data['email'] ?></p>
		
		<h3>Roli perderouesit:</h3>
		<p><?= $data['role'] ?></p>
	</div>

	<?php

	if ($_SESSION['role'] == "admin") {

		$getUsers = $con->prepare("SELECT * FROM users");
		$getUsers->execute();
		$users = $getUsers->fetchAll();

		?>

		<main role="main" class="flex-grow-1 col-md-9 ml-sm-auto col-lg-10 px-4 my-5">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-it-center pd-2 mb-3 border-bottom">
				<h1 class="h2">Users</h1>
				<a href="productDashboard.php">Product Dashboard</a>

			</div>
			<div class="table-responsive">
				<table class="table table-striped table-sm mt-3">
					<thead>
						<tr>
							<th>ID</th>
							<th>Username</th>
							<th>Email</th>
							<th>Admin</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($users as $user) {
						?>
						 		<tr>
						 			<td> <?= $user['id'] ?> </td>
						 			<td> <?= $user['name'] ?> </td>
						 			<td> <?= $user['email'] ?> </td>
						 			<td> <?= $user['role'] ?> </td>
									<td> <?= "<a href='profile.php?id=$user[id]'> Update Profile </a>" ?></td>
									<td> <?= "<a href='delete.php?id=$user[id]'> Delete </a>" ?></td>
						 		</tr>
						<?php
						 	}
						?>

					</tbody>
				</table>
			</div>
		</main>

<?php

	}


	include_once 'footer.php';
?>