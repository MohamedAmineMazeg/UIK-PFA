<?php
session_start();
include("../config.php");

$id =  trim($_GET["id"]);
$idCour="";

if ($result =  mysqli_query($conn, "SELECT * FROM chapitre WHERE id=" . $id)) {
    while ($row = mysqli_fetch_array($result)) {
        $idCour = $row['id_cour'];
    }
}
$sql = "DELETE FROM chapitre WHERE id=".$id;
if (mysqli_query($conn, $sql)) {
    header("Location: editCour.php?id=".$idCour);
} else {
    echo "Impossible de supprimer le chaptire";
}

?>
