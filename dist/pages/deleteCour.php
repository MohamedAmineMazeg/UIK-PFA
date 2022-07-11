<?php
session_start();
include("../config.php");

$id =  trim($_GET["id"]);

$sql = "DELETE FROM cour WHERE id=".$id;
if (mysqli_query($conn, $sql)) {
    header("Location: coursProf.php");
} else {
    echo "Impossible de supprimer le cour";
    header("Location: coursProf.php"); //?idDelete=".$id
}

?>
