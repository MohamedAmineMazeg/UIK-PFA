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
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div id='page'>
		<div id='entete'><?php include("../header/head.php"); ?></div>
		<div id="menu">

			<ul>


				<li><a href="ajout.php">ajouter</a></li>
				<li><a href="modif_compte.php">modifier</a></li>
				<li><a href="modmdp.php">modifier mot de passe</a></li>
				<li><a href="recherche.php">recherecher</a></li>
				<li><a href="home.php">accueil</a></li>
			</ul>
		</div>
		<div id="corp">
		</div>
		<div id="pied"></div>
</body>

</html>