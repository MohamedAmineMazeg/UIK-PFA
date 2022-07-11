<?php
  include("../../config.php");
  session_start(); 
  $idBranche = $_POST['idBranche'];
  $sql="select g.id, g.libelle from groupe g
  join annee_scolaire as2 on as2.id = g.id_annee_scol and as2.actif = '1'
  where id_branche=".$idBranche." ";
  $result = mysqli_query($conn, $sql);
  //echo '<option value="">Sélectionner un niveau</option>';
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
      echo "<option value='" . $row['id'] . "'>" . $row['libelle'] . "</option>";
    }
  }
  mysqli_free_result($result);
?>