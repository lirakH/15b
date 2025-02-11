<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<nav>

		<a href="dashboard.php">Dashboard</a>


	</nav>
	<main>
		

		<?php
			include_once 'fetchProducts.php';
		?>

		<div class="productsContainer">
			
			<?php
				foreach ($produktet as $produkti){
			?>

				<div class="product">
					<p><?= var_dump($produkti) ?></p>
					<hr>
				</div>

			<?php
				}
			?>
			
		</div>


	</main>

</body>
</html>