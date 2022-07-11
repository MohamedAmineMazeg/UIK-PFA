<?php
session_start();
include("../config.php");

if (isset($_POST['editAnneeScol'])) {
    $id = $_POST['id'];
    $anneeScolaire = $_POST['anneeScolaire'];
    $query = "UPDATE annee_scolaire set annee_scolaire='$anneeScolaire' where id=" . $id;
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: listAnneeScol.php');
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
