<?php
  include("../../config.php");
  session_start(); 
  $idUser = $_SESSION['idUser'];
  $idBranche = $_POST['idBranche'];

  $sql="select distinct(g.id), g.libelle from groupe g 
  join annee_scolaire as2 on as2.id = g.id_annee_scol and as2.actif = '1'
  join groupe_enseignant ge on ge.id_groupe = g.id 
  join enseignant e on ge.id_enseignant = e.id 
  join users u on u.id = e.id_users 
  where u.id =".$idUser." and g.id_branche =".$idBranche;

  $result = mysqli_query($conn, $sql);
  //echo '<option value="">Sélectionner un niveau</option>';
  while($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
	  echo "<option value='" . $row['id'] . "'>" . $row['libelle'] . "</option>";
  }
?>