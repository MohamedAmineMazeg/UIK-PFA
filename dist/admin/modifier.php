<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['profile'];
$id=$_SESSION['idUser'] ;
$fullName = $_SESSION['fullName'];

$sqlusers = "select * from users";
$resusers = mysqli_query($conn, $sqlusers);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  <form method="POST" class="form-groupe">
<select name="users" class="form-control">
<?php while($row=mysqli_fetch_array($resusers,MYSQLI_BOTH)){
  echo '<option value="'.$row['id'].'">'.$row['nom'].'</option>';
}?>
</select>
<button type="submit" name="mod" class="btn btn-primary"><span style="font-size:1rem; font-weight:300" class="material-icons">
  edit
  </span>modifier</button>
</form>


</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
  $btn=$_POST['mod'];
  $id=$_POST['users'];

  if(isset($btn)){
    $moduser='select * from users u where u.id='.$id;
    $resmod=mysqli_query($conn, $moduser);
    $row2=mysqli_fetch_array($resmod,MYSQLI_BOTH);
    echo '<form method="post">';
    echo '<div class="row">';
    echo '<div class="form-groupe col-md-4">';
    echo '<label>Ancien nom : '.$row2['nom'].'</label>';
    echo '<input class="form-control" name="newName" placeholder="nouveaux nom">';
    echo '</div>';
    echo '<div class="form-groupe col-md-4">';
    echo '<label>Ancien prenom : '.$row2['prenom'].'</label>';
    echo '<input class="form-control" name="newLast" placeholder="nouveaux prenom">';
    echo '</div>';
    echo '<div class="form-groupe col-md-4">';
    echo '<label>Ancien email : '.$row2['email'].'</label>';
    echo '<input class="form-control" name="newMail" placeholder="nouveaux email">';
    echo '</div>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="form-groupe col-md-4">';
    echo '<label>Ancien Login : '.$row2['login'].'</label>';
    echo '<input class="form-control" name="newLogin" placeholder="nouveaux pseudo">';
    echo '</div>';
    echo '<div class="form-groupe col-md-4">';
    echo '<label>Ancien Mot de pass : '.$row2['password'].'</label>';
    echo '<input class="form-control" name="newPass" placeholder="nouveaux mot de pass">';
    echo '</div>';
    echo '<div class="form-groupe col-md-4">';
    echo '<label>Ancien numéro de téléphone : '.$row2['num_telephone'].'</label>';
    echo '<input class="form-control" name="newTel" placeholder="nouveaux Num Tel">';
    echo '</div>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="form-groupe col-md-4">';
    echo '<label>Ancienne adresse : '.$row2['adresse'].'</label>';
    echo '<input class="form-control" name="newAdr" placeholder="nouvelle adresse">';
    echo '</div>';
    echo '<div class="form-groupe col-md-4>';
    echo '<label>changer la photo : </label>';
    echo '<input type="file" name="photo" class="form-control">';
    echo '</div>';
    echo '</div>';
    echo '<button type="submit" name="subMod" class="btn btn-primary"> changer</button> ';
$sub=$_POST['subMod'];
$newName=$_POST['newName'];
$newLast=$_POST['newLast'];
$newMail=$_POST['newMail'];
$newLogin=$_POST['newLogin'];
$newPass=$_POST['newPass'];
$newTel=$_POST['newTel'];
$newAdr=$_POST['newAdr'];
  }


if(isset($sub)){
  if(isset($newName)){
    $updateName='UPDATE users set nom ='.'"'.$newName.'"'.'where id='.$id;
    $resupdate1=mysqli_query($conn, $updateName);
  }
}
  }
?>