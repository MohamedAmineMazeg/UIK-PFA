<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['pseudo'];
$profile = $_SESSION['type'];
$nom = $_SESSION['nom'];
$full_name = $_SESSION['full_name'];

if ($profile2 == 'prof') {

?>

	<html>

	<head>
		<link href="../css/cssmodifier.css" rel="stylesheet" type="text/css" title="TITRE" />
		<title>modification des comptes</title>
	</head>

	<body>
		<div id='page'>
			<div id='entete'><?php include("../header/head.php"); ?></div>
			<div id="menu">
				<ul>

					<li><a href="compte.php">compte</a></li>
					<li><a href="home.php">accueil</a></li>
				</ul>
			</div>
			<div id="corp">
				<form id="modifier" method="post" enctype="multipart/form-data">
					<fieldset>
						<legend>ajouter</legend>

						<label for="nom">nom: </label><input type="text" id="nom" name="nom" /><br />
						<label for="prenom">prenom : </label><input type="text" id="prenom" name="prenom" /><br />
						<label for="login">user: </label><input type="text" id="user" name="user" /><br />
						<label for="email">email: </label><input type="email" id="email" name="email" /><br />
						<label for="photo">Photo: </label><input type="file" id="photo" name="photo" /><br />
						<br>
						<label for="xp">experience</label><input type="number" name="xp"><br>
						<label for="dip">diplome</label><input type="text" name="diplome"><br>
						<label for="dip">specialité</label><input type="text" name="spec"><br>
						<input type="submit" name="ajout" value="ajouter" />
					</fieldset>
				</form>



				<?php
				if (!empty($_POST['user']))
					$user = $_POST['user'];

				if (isset($_POST['ajout'])) {
					$resulta = mysqli_query($conn, 'SELECT pseudo from user ');
					while ($donne = mysqli_fetch_array($resulta, MYSQLI_BOTH)) {
						$x = 0;
						if ($donne['pseudo'] == $user) {
							$x = 1;
							break;
						}
					}
					if ($x == 1) {
						echo 'compte existe deja';
					}

					if ($x == 0) {
						$nom = $_POST['nom'];
						$prenom = $_POST['prenom'];
						$email = $_POST['email'];



						$fichier = basename($_FILES['photo']['name']);
						$photo_bdd = "/UIK/photo/$fichier";
						$photo_dossier = $_SERVER['DOCUMENT_ROOT'] . "/UIK/photo/$fichier";
						$sql = "INSERT into user(pseudo,nom,prenom,email,photo, role)values('$user','$nom','$prenom','$email','$photo_bdd', 'prof')";

						$res = mysqli_query($conn, $sql);
						$xp = $_POST['xp'];
						$diplome = $_POST['diplome'];
						$id = mysqli_insert_id($conn);
						$sql1 = "INSERT into formateur (xp,diplome,id_user)values('$xp','$diplome','$id')";

						$res1 = mysqli_query($conn, $sql1);

						echo 'compte ajout� avec succ�s ';

						if (move_uploaded_file($_FILES['photo']['tmp_name'], $photo_dossier)) //Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
						{
							echo 'Upload effectu� avec succ�s !' . $fichier;
						} else //Sinon (la fonction renvoie FALSE).
						{
							echo 'Echec de l\'upload !';
						}
					}
				}
			} else if ($profile2 == 'student') {
				$res2 = mysqli_query($conn, 'SELECT * from parcours');
				?>


				<html>

				<head>
					<link href="../css/cssmodifier.css" rel="stylesheet" type="text/css" title="TITRE" />
					<title>modification des comptes</title>
				</head>

				<body>
					<div id='page'>
						<div id='entete'><?php include("../header/head.php"); ?></div>
						<div id="menu">
							<ul>

								<li><a href="compte.php">compte</a></li>
								<li><a href="home.php">accueil</a></li>
							</ul>
						</div>
						<div id="corp">
							<form id="modifier" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend>ajouter</legend>

									<label for="nom">nom : </label><input type="text" id="nom" name="nom" /><br />
									<label for="prenom">prenom : </label><input type="text" id="prenom" name="prenom" /><br />
									<label for="login">user : </label><input type="text" id="user" name="user" /><br />
									<label for="email">email : </label><input type="email" id="email" name="email" /><br />
									<label for="email">niveau : </label><input type="text" id="niv" name="niv" /><br />
									<label for="photo">Photo : </label><input type="file" id="photo" name="photo" /><br />
									<select name="form">
										<?php while ($donne = mysqli_fetch_array($res2, MYSQLI_BOTH)) { ?>

											<option value="<?php echo $donne['ID_parc']; ?>"><?php echo $donne['lib']; ?></option>

										<?php } ?>
									</select>
									<input type="submit" name="ajout" value="ajouter" />
								</fieldset>
							</form>



						<?php
						if (!empty($_POST['user']))
							$user = $_POST['user'];

						if (isset($_POST['ajout'])) {
							$resulta = mysqli_query($conn, 'SELECT pseudo from user');
							while ($donne = mysqli_fetch_array($resulta, MYSQLI_BOTH)) {
								$x = 0;
								if ($donne['pseudo'] == $user) {
									$x = 1;
									break;
								}
							}
							if ($x == 1)
								echo 'compte existe deja';
							if ($x == 0) {
								$nom = $_POST['nom'];
								$prenom = $_POST['prenom'];
								$email = $_POST['email'];
								$form = $_POST['form'];
								$niv = $_POST['niv'];
								$fichier = basename($_FILES['photo']['name']);
								$photo_bdd = "/UIK/photo/$fichier";
								$photo_dossier = $_SERVER['DOCUMENT_ROOT'] . "/UIK/photo/$fichier";

								$sql2 = "INSERT into user(pseudo,nom,prenom,email,photo, role)values('$user','$nom','$prenom','$email','$photo_bdd', 'student')";

								$res3 = mysqli_query($conn, $sql2);


								$id = mysqli_insert_id($conn);

								$sql3 = "INSERT into etudiant (niveau,id_user)values('$niv','$id')";

								$res4 = mysqli_query($conn, $sql3);


								echo 'compte ajout� avec succ�s';

								if (move_uploaded_file($_FILES['photo']['tmp_name'], $photo_dossier)) //Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
								{
									echo 'Upload effectu� avec succ�s !' . $fichier;
								} else //Sinon (la fonction renvoie FALSE).
								{
									echo 'Echec de l\'upload !';
								}
							}
						}
					}
