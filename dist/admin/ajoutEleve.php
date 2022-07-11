<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['profile'];
$id=$_SESSION['idUser'] ;
$fullName = $_SESSION['fullName'];
$sqlUsers = "SELECT * from users u, v_etudiant v WHERE u.id = v.id_user";
$resUsers = mysqli_query($conn, $sqlUsers);
$Users= mysqli_fetch_array($resUsers, MYSQLI_ASSOC);
$user_photo= $Users['photo'];

$sqlGroupe = "select * from groupe";
$resGroupe = mysqli_query($conn, $sqlGroupe);

$sqlSpec = "select * from specialite";
$resSpec = mysqli_query($conn, $sqlSpec);

$sqlSexe = "select * from sexe";
$resSexe = mysqli_query($conn, $sqlSexe);

$sqlV_etud = "select * from v_etudiant";
$resV_etud = mysqli_query($conn, $sqlV_etud);
?>

<html>

<head>
<link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div id='entete'><?php include("../header/head.php"); ?></div>
	<?php
	if(mysqli_num_rows($resV_etud)>0){
	echo '<table class="table table-bordred">';
	echo	'<thead>';
	echo		'<tr>';
	echo			'<th>Nom</th>';
	echo			'<th>Prenom</th>';
	echo			'<th>Email</th>';
	echo			'<th>Num Tel</th>';
	echo			'<th>Adress</th>';
	echo			'<th>Date naissance</th>';
	echo			'<th>Sexe</th>';
	echo			'<th>spécialité</th>';
	echo			'<th>groupe</th>';
	echo			'<th>niveau</th>';
	echo			'<th>photo</th>';
	echo		'</tr>';
	echo	'</thead>';
	echo	'<tbody>';
	while($v_etud=mysqli_fetch_array($resV_etud,MYSQLI_ASSOC)){
	echo		'<tr>';
	echo			'<td>'.$v_etud["nom"].'</td>';
	echo			'<td>'.$v_etud["prenom"].'</td>';
	echo			'<td>'.$v_etud["email"].'</td>';
	echo			'<td>'.$v_etud["adresse"].'</td>';
	echo			'<td>'.$v_etud["num_telephone"].'</td>';
	echo			'<td>'.$v_etud["dt_naissance"].'</td>';
	echo			'<td>'.$v_etud["libelle"].'</td>';
	echo			'<td>'.$v_etud["libelle_barche"].'</td>';
	echo			'<td>'.$v_etud["libelle_niveau"].'</td>';
	echo			'<td>'.$v_etud["libelle_specialite"].'</td>';
	echo			'<td> <img src="'.$user_photo.'"></td>';
	echo		'</tr>';
}
	echo	'</tbody>';
	echo'</table>';
}
?>
	<form method="post" enctype="multipart/form-data">
		<legend>Ajouter un étudiant</legend>
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="form-group col-md-4">
						<label>Prenom :</label>
						<input type="text" name="prenom" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Nom :</label>
						<input type="text" name="nom" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Email :</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Numéro de téléphone :</label>
						<input type="number" name="Tel" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Adresse</label>
						<input type="text" name="Adr" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Date de naissance</label>
						<input type="date" name="date_ns" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label>Sexe :</label>
						<select name="sexe" class="form-control">
							<?php
							while ($tab = mysqli_fetch_array($resSexe, MYSQLI_BOTH)) {
								echo "<option value=" . $tab['id'] . ">" . $tab['libelle'] . "</option>";
							} ?>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label>Spécialité :</label>
						<select name="specialite" class="form-control">
							<?php
							while ($tab2 = mysqli_fetch_array($resSpec, MYSQLI_BOTH)) {
								echo "<option value=" . $tab2['id'] . ">" . $tab2['libelle'] . "</option>";
							} ?>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label>Groupe :</label>
						<select name="groupe" class="form-control">
							<?php
							while ($tab3 = mysqli_fetch_array($resGroupe, MYSQLI_BOTH)) {
								echo "<option value='" . $tab3['id'] . "'>" . $tab3['libelle'] . "</option>";
							} ?>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label>Photo :</label>
						<input type="file" name="photo" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label>Login :</label>
						<input type="text" name="user" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Mot de passe :</label>
						<input type="password" name="mdp" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-10"></div>
					<div class="form-group col-md-2">
						<input type="button" value="Annuler" class="btn btn-danger" onclick="window.location='utilisateur.php';">
						<input type="submit" class="btn btn-success" name="valider" value="Enregistrer">
					</div>
				</div>
			</div>
		</div>
	</form>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$back = 'true';

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$user = $_POST['user'];
	$mdp = $_POST['mdp'];
	$Adr = $_POST['Adr'];
	$Tel = $_POST['Tel']; 
	$date_ns = $_POST['date_ns']; 
	$sexe = $_POST['sexe'];
	$spec = $_POST['specialite'];

	$idGroupe = $_POST['groupe'];

	$fichier = basename($_FILES['photo']['name']);
	$photo = "/UIK/photo/$fichier";
	$photo_doss = $_SERVER['DOCUMENT_ROOT'] . "/UIK/photo/" . $fichier;

	$sqlInsertUser = "INSERT INTO users (nom, prenom, email, `login`, `password`, id_profile,photo,num_telephone,adresse,dt_naissance,id_sexe)
        VALUES('$nom','$prenom','$email','$user','$mdp',4,'$photo_doss','$Tel','$Adr','$date_ns','$sexe')";
	      //$reqInsert = mysqli_query($conn, $sqlInsertUser);

	if (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo_doss)) {
		echo 'Echec de l\'upload photo !';
		$back == 'false';
	}
	if (mysqli_query($conn, $sqlInsertUser)) {
		$back=='true';
		$idUser = mysqli_insert_id($conn);
		
    
		$sqlInserStud = "INSERT INTO etudiant(id_user) Values($idUser)";

	if(mysqli_query($conn, $sqlInserStud)){
		$sqlEtud= "select * from etudiant where id_user=$idUser";
		$resEtud= mysqli_query($conn, $sqlEtud);   
		$row4=mysqli_fetch_array($resEtud,MYSQLI_BOTH);
		$idEtud=$row4['id'];
		$sqlInserGroupe = "INSERT INTO groupe_etudiant(id_etudiant, id_groupe) Values('$idEtud','$idGroupe')";
		$resInserGroup = mysqli_query($conn, $sqlInserGroupe);
	}
	}
	if ($back == 'true')
        echo '<script type="text/javascript">location.href="#";</script>';
}
?>