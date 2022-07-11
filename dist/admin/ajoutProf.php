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

$sqlSexe = "select * from sexe";
$resSexe = mysqli_query($conn, $sqlSexe);

$sqlV_ens = "select * from v_enseignant";
$resV_ens = mysqli_query($conn, $sqlV_ens);
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
	if(mysqli_num_rows($resV_ens)>0){
	echo '<table class="table table-bordred">';
	echo	'<thead>';
	echo		'<tr>';
	echo			'<th>Nom</th>';
	echo			'<th>Prenom</th>';
	echo			'<th>Email</th>';
	echo			'<th>num_tel</th>';
	echo			'<th>adresse</th>';
	echo			'<th>date de naissance</th>';
	echo			'<th>spécialité</th>';
	echo			'<th>diplome</th>';
	echo			'<th>dt_diplome</th>';
	echo			'<th>experience</th>';
	echo			'<th>universite</th>';
    echo			'<th>photo</th>';
	echo		'</tr>';
	echo	'</thead>';
	echo	'<tbody>';
	while($v_ens=mysqli_fetch_array($resV_ens,MYSQLI_ASSOC)){
	echo		'<tr>';
	echo			'<td>'.$v_ens["nom"].'</td>';
	echo			'<td>'.$v_ens["prenom"].'</td>';
	echo			'<td>'.$v_ens["email"].'</td>';
	echo			'<td>'.$v_ens["num_telephone"].'</td>';
	echo			'<td>'.$v_ens["adresse"].'</td>';
	echo			'<td>'.$v_ens["dt_naissance"].'</td>';
	echo			'<td>'.$v_ens["specialite"].'</td>';
	echo			'<td>'.$v_ens["diplome"].'</td>';
	echo			'<td>'.$v_ens["dt_diplome"].'</td>';
	echo			'<td>'.$v_ens["experience"].' </td>';
	echo			'<td>'.$v_ens["universite"].' </td>';
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
                    <label>Spécialité :  </label>
					<input type="text" class="form-control" name="specialite">
					</div>
					<div class="form-group col-md-4">
                    <label>date du diplome :  </label>
					<input type="date" class="form-control" name="dt_diplome">
					</div>
					<div class="form-group col-md-4">
                    <label>diplome : </label>
						<input type="text" class="form-control" name="diplome">
					</div>
					<div class="form-group col-md-4">
						<label>Experience : </label>
						<input type="number" class="form-control" name="xp">
					</div>
					<div class="form-group col-md-4">
						<label>Université : </label>
						<input type="text" class="form-control" name="uni">
					</div>
					<div class="form-group col-md-4">
						<label>Photo :</label>
						<input type="file" name="photo" class="form-control">
					</div>
                    <div class="form-group col-md-4">
						<label>Sexe :</label>
						<select name="sexe" class="form-control">
							<?php
							while ($tab = mysqli_fetch_array($resSexe, MYSQLI_BOTH)) {
								echo "<option value=" . $tab['id'] . ">" . $tab['libelle'] . "</option>";
							} ?>
						</select>
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
	$date_dp = $_POST['dt_diplome']; 
	$date_ns = $_POST['date_ns']; 
	$sexe = $_POST['sexe'];
	$spec = $_POST['specialite'];
	$dip = $_POST['diplome'];
	$exp = $_POST['xp'];
	$uni = $_POST['uni'];


	$fichier = basename($_FILES['photo']['name']);
	$photo = "/UIK/photo/$fichier";
	$photo_doss = $_SERVER['DOCUMENT_ROOT'] . "/UIK/photo/" . $fichier;

	$sqlInsertUser = "INSERT INTO users (nom, prenom, email, `login`, `password`, id_profile,photo,num_telephone,adresse,dt_naissance,id_sexe)
        VALUES('$nom','$prenom','$email','$user','$mdp',3,'$photo_doss','$Tel','$Adr','$date_ns','$sexe')";
         $reqInsert = mysqli_query($conn, $sqlInsertUser);
         $idUser = mysqli_insert_id($conn);
		$sqlInserprof = "INSERT INTO enseignant(diplome,dt_diplome,experience,specialite,id_users,universite) Values('$dip','$date_dp',$exp,'$spec',$idUser,'$uni')";
        $reqInsertProf=mysqli_query($conn, $sqlInserprof);

	if (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo_doss)) {
		echo 'Echec de l\'upload photo !';
		$back == 'false';
	}
	if ($back == 'true')
        echo '<script type="text/javascript">location.href="#";</script>';
}
?>