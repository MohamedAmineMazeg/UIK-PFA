<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$id =  trim($_GET["id"]);

$sql = "DELETE FROM experience WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    header("Location: editProfileProf.php?id=".$idUser);
} else {
    echo "Impossible de supprimer le cour";
    header("Location: editProfileProf.php?id=".$idUser);
}

?>
