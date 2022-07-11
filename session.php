<?php
session_start();
if (!empty($_POST['pass']) && !empty($_POST['pseudo'])) {
	$pass = $_POST['pass'];
	$login = $_POST['pseudo'];
	include("config.php");

	$sql = "SELECT * FROM v_users WHERE login='$login' AND password='$pass'";
	if ($resulta = mysqli_query($conn, $sql)) {
		if (mysqli_num_rows($resulta) > 0) {
			while ($donne = mysqli_fetch_array($resulta, MYSQLI_BOTH)) {
				if ($pass == $donne['password'] && $login == $donne['login']) {
					$codeProfile = $donne['code'];
					$fullName = $donne['prenom'] . ' ' . $donne['nom'];
					$idUser = $donne['id'];

					$_SESSION['fullName'] = $fullName;
					$_SESSION['idUser'] = $idUser;
					$_SESSION['profile'] = $codeProfile;

					if ($codeProfile == "ADMIN") {
						header("Location:dist/pages/home.php");
						die('erreur');
					} else if ($codeProfile == "SCOL") {
						header("Location:dist/pages/acceuilScol.php");
						die('erreur');
					} else if ($codeProfile == "ENSG") {
						header("Location:dist/pages/acceuilProf.php");
						die('erreur');
					} else if ($codeProfile == "STUD") {
						header("Location:dist/pages/acceuil.php");
						die('erreur');
					} else {
						header("location:login.php");
					}
				}
			}
		} else {
			header("location:login.php");
			echo 'error login or password';
		}
	}
}
?>