<?php
	include_once 'header.php';


if (!empty($_SESSION['username'])) {

	echo "Hello, ".$_SESSION['username'];

	echo "<br><a href='logout.php>Log out</a>";
}



	include_once 'footer.php';
?>