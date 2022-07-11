<?php
  include("../../config.php");
  session_start(); 

  $idGroupe = $_POST['idGroupe'];

  $sql="select u.nom, u.prenom, ge.id_etudiant from users u 
  join etudiant e ON e.id_user = u.id 
  join groupe_etudiant ge on ge.id_etudiant = e.id 
  where ge.id_groupe =".$idGroupe;

  $result = mysqli_query($conn, $sql);
  //echo '<option value="">Sélectionner un niveau</option>';
  while($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
	  echo "<option value='" . $row['id_etudiant'] . "'>" . $row['prenom'] . " ". $row['nom'] . "</option>";
  }

?>