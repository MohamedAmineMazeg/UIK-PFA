<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['profile'];
$id=$_SESSION['idUser'] ;
$fullName = $_SESSION['fullName'];

$sqlProf = "select count(*) AS `count` from users u where u.id_profile = 3 ";
$resProf = mysqli_query($conn, $sqlProf);

$sqlStudent = "select count(*) AS `count` from v_etudiant u";
$resStudent = mysqli_query($conn, $sqlStudent);

$sqlCountTotal = "select count(*) AS `count` from users u ";
$resCountTotal = mysqli_query($conn, $sqlCountTotal);

$sqlGroupe = "select count(*) AS `count`from groupe";
$resGroupe = mysqli_query($conn, $sqlGroupe);
?>

<!DOCTYPE html>
<html lang="en">
<div class="" id="entete">
	<?php include('../header/head.php');?>
</div>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
	<title>Acceuil</title>
</head>

<body>
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-5 p-5 num_user justify-content-center text-center">
  <p class="fw-bold fs-5">Nombre d'utilisateurs</p>
	<img src="../../img/user.png" class="img-fluid user_img">
 <p class="fw-bold user_count"> <?php $row=mysqli_fetch_array($resCountTotal,MYSQLI_ASSOC);
	echo $row['count'];?></p>
  <p><a href="utilisateur.php" class="text-primary">Voir tous</a></p>
</div>
	<div class="col-md-5 p-5 num_user justify-content-center text-center">
  <p class="fw-bold fs-5">Nombre d'etudiant</p>
	<img src="../../img/etud.png" class="img-fluid user_img">
 <p class="fw-bold groupe_count"> <?php $rowStd=mysqli_fetch_array($resStudent,MYSQLI_ASSOC);
	echo $rowStd['count'];?></p>
	<p><a href="ajoutEleve.php" class="text-primary">Voir tous</a></p>
	</div>
	<div class="col-md-5 p-5 num_user justify-content-center text-center">
  <p class="fw-bold fs-5">Nombre d'enseignant</p>
	<img src="../../img/prof.png" class="img-fluid user_img">
 <p class="fw-bold groupe_count"> <?php $rowProf=mysqli_fetch_array($resProf,MYSQLI_ASSOC);
	echo $rowProf['count'];?></p>
	<p><a href="ajoutProf.php" class="text-primary">Voir tous</a></p>
	</div>
</div>




</div>

</body>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</html>