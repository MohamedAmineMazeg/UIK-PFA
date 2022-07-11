<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['pseudo'];
$profile = $_SESSION['type'];
$nom = $_SESSION['nom'];
$full_name = $_SESSION['full_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acceuil</title>
</head>

<body>
	<div id='entete'>
		<?php include("../header/head.php"); ?>
	</div>
	<div id='entete'>
		<?php include("../header/footer.php"); ?>
	</div>
</body>

</html>