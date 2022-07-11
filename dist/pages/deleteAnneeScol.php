<?php
session_start();
include("../config.php");
if (isset($_POST['deleteAnneeScol'])) {
    $id = $_POST['idDelete'];
    $query = "DELETE FROM annee_scolaire where id=$id";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        echo '<script> alert("Data deleted"); </script>';
        header('Location: listAnneeScol.php'); 
    } else {
        echo '<script> alert("Data Not deleted"); </script>';
    }
}
