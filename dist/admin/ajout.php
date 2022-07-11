<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['pseudo'];
$profile = $_SESSION['type'];
$nom = $_SESSION['nom'];
$full_name = $_SESSION['full_name'];
?>

<html>

<head>
	<link href="../css/cssmodifier.css" rel="stylesheet" type="text/css" title="TITRE" />
	<title>Utilisateur</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div id='entete'><?php include("../header/head.php"); ?></div>

	<form method="post" enctype="multipart/form-data">
		<legend>Information générale</legend>
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="form-group col-md-4">
						<label>Nom :</label>
						<input type="text" name="nom" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Prenom :</label>
						<input type="text" name="prenom" class="form-control">
					</div>
					
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label>Email :</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Photo :</label>
						<input type="file" name="photo" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label>Login :</label>
						<input type="email" name="user" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Mot de passe :</label>
						<input type="password" name="mdp" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</form>

	</div>
	<div id="corp">
		<form id="modifier" method="post">
			<fieldset>
				<legend>ajouter</legend>
				<select name="profile">
					<option>professeur</option>
					<option>etudiant</option>
				</select>
				<input type="submit" name="ajout" value="ajouter" />
			</fieldset>
		</form>
		<?php
		if (isset($_POST['ajout'])) {
			$profile2 = $_POST['profile'];
			$_SESSION['profile2'] = $profile2;
			header('Location:ajoutforrm.php');
		}
		?>
	</div>
	<div id="pied"></div>
	</div>
</body>

</html>