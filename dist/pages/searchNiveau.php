<?php
  include("../config.php");
  session_start(); 
  $idFiliere = $_POST['idFiliere'];
  $sql="select * from branche where id_specialite=".$idFiliere." ";
  $result = mysqli_query($conn, $sql);
  //echo '<option value="">Sélectionner un niveau</option>';
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
      echo "<option value='" . $row['id'] . "'>" . $row['libelle'] . "</option>";
    }
  }
  mysqli_free_result($result);
?>