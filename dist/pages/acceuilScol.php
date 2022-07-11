<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$countEtud = $countProf = $countCour = $countSalle = "";

if ($result =  mysqli_query($conn, "select count(id) from enseignant")) {
    while ($row = mysqli_fetch_array($result)) {
        $countProf = $row[0];
    }
    mysqli_free_result($result);
}

if ($result =  mysqli_query($conn, "select count(id) from etudiant")) {
    while ($row = mysqli_fetch_array($result)) {
        $countEtud = $row[0];
    }
    mysqli_free_result($result);
}

if ($result =  mysqli_query($conn, "select count(c.id) from cour c join annee_scolaire as2 on as2.id = c.id_annee_scolaire and as2.actif = '1'")) {
    while ($row = mysqli_fetch_array($result)) {
        $countCour = $row[0];
    }
    mysqli_free_result($result);
}

$sqlCountSalle  = "select count(id) from salle";
if ($result =  mysqli_query($conn, "select count(id) from salle")) {
    while ($row = mysqli_fetch_array($result)) {
        $countSalle = $row[0];
    }
    mysqli_free_result($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Experience</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</head>

<body>
    <?php include("../header/head.php"); ?>

    <main>
        <br><br><br>
        <div class="row">
            <div class="row categ p-0 m-0 justify-content-center justify-content-around">
                <div class="col-sm-3 crd1 m-0 p-0">
                    <div class="card crd_body ">
                        <img class="card-img-top" src="../../img/professeur.jpg" alt="" height="240">
                        <div class="card-body">
                            <h4 class="card-title text-center">Nombre de professeurs <?php echo $countProf; ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 m-0 p-0 crd1">
                    <div class="card crd_body ">
                        <img class="card-img-top" src="../../img/student.jpg" alt="" height="240">
                        <div class="card-body">
                            <h4 class="card-title text-center">Nombre de etudiants <?php echo $countEtud; ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 crd1 m-0 p-0">
                    <div class="card crd_body">
                        <img class="card-img-top" src="../../img/cour_all.png" alt="" height="240">
                        <div class="card-body">
                            <h4 class="card-title text-center">Nombre de cour <?php echo $countCour; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </main>

    <br><br>
    <?php include("../header/footer.php"); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/main2.js"></script>
<script src="../js/search.js"></script>

</html>