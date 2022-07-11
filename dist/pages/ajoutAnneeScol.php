<?php
session_start();
include("../config.php");

if(isset($_POST['ajoutAnneeScol'])) {
    $anneeScolaire = $_POST['anneeScolaire'];

    $query = "INSERT INTO annee_scolaire (annee_scolaire, actif) VALUES('$anneeScolaire', 0)";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        echo '<script> alert("Data Saved"); </script>';
        header('Location: listAnneeScol.php');
    } else  {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
