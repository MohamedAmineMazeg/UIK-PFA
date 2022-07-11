<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['profile'];
$id=$_SESSION['idUser'] ;
$fullName = $_SESSION['fullName'];
$sqlusers = "select * from users";
$resusers = mysqli_query($conn, $sqlusers);
$sqlSex= "select * from sexe s,users u where s.id=u.id_sexe";
$resSex=mysqli_query($conn, $sqlSex);
$sqluser2= "select * from v_users v,users u  where v.id=u.id";
$resusers2= mysqli_query($conn,$sqluser2);
?>

<html>

<head>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="css/main.css">
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
	if(mysqli_num_rows($resusers)>0){
	echo '<table class="table table-bordred" name="T_users">';
	echo	'<thead>';
	echo		'<tr>';
	echo			'<th>Nom</th>';
	echo			'<th>Prenom</th>';
	echo			'<th>Email</th>';
	echo			'<th>login</th>';
	echo			'<th>password</th>';
	echo			'<th>profil</th>';
	echo			'<th>Sexe</th>';
	echo			'<th>dt_naissance</th>';
	echo			'<th>adresse</th>';
	echo			'<th>num_tel</th>';
	echo			'<th>photo</th>';
	echo		'</tr>';
	echo	'</thead>';
	echo	'<tbody>';
	while(($users=mysqli_fetch_array($resusers,MYSQLI_BOTH)) && ($v_users=mysqli_fetch_array($resusers2,MYSQLI_BOTH))&&($sexe=mysqli_fetch_array($resSex,MYSQLI_BOTH))){
	echo		'<tr>';
	echo			'<td>'.$users["nom"].'</td>';
	echo			'<td>'.$users["prenom"].'</td>';
	echo			'<td>'.$users["email"].'</td>';
	echo			'<td>'.$users["login"].'</td>';
	echo			'<td>'.$users["password"].'</td>';
	echo			'<td>'.$v_users["code"].'</td>';
	echo			'<td>'.$sexe['libelle'].'</td>';
	echo			'<td>'.$users["dt_naissance"].'</td>';
	echo			'<td>'.$users["adresse"].'</td>';
	echo			'<td>'.$users["num_telephone"].'</td>';
	echo			'<td> <img class="img-fluid"style="width:20vh;" src="'.$users['photo'].'"></td>';
	echo		'</tr>';
}
	echo	'</tbody>';
	echo'</table>';
}	
?>
<button class="btn btn-primary "><a href="ajoutEleve.php">+Eleve</a></button>
<button class="btn btn-primary"><a href="ajoutProf.php">+Prof</a></button>
<button class="btn btn-primary"><a href="modifier.php"><span style="font-size:1rem; font-weight:300" class="material-icons">
  edit
  </span>Modifier</a></button>
</body>

</html>
