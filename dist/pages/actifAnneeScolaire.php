<?php
session_start();
include("../config.php");

$id =  trim($_GET["id"]);
$sql = "UPDATE annee_scolaire SET actif=0 where id is not null";
if (mysqli_query($conn, $sql)) {
    $sql1 = "UPDATE annee_scolaire SET actif=1 where id=".$id;
    if(mysqli_query($conn, $sql1)) {
        header("Location: listAnneeScol.php");
    }
} else {
    echo "Impossible de activie année scolaire";
}
?>
