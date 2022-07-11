<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$anneeScolaire = "";
if ($result =  mysqli_query($conn, "select * from annee_scolaire where actif = '1'")) {
    while ($row = mysqli_fetch_array($result)) {
        $anneeScolaire = $row['annee_scolaire'];
    }
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
        <div class="wrapper">
            <div class="container-fluid">
                <br><br>
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="pull-left" style="color: #0d6efd;">Liste emploies de l'année scolaire <?php echo $anneeScolaire; ?></h3>
                    </div>
                    <hr>
                    <div class="form-group" align="right" style="padding-bottom: 1%;">
                        <a href="ajoutEtuidSocl.php" class="btn btn-success"><i class="fa fa-plus"></i> Emploie</a>
                    </div>
                </div>

                <div class="row" style="padding-bottom: 2px;">
                    <div class="col-md-9"></div>
                    <div class="col-md-3" align="right">
                        <input type="text" id="inputSearch" onkeyup="tableSearch()" placeholder="Recherche..." class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered table-striped" id="table">
                        <thead>
                            <tr>
                                <th style='width: 15%;'>Cour</th>
                                <th style='width: 15%;'>Groupe</th>
                                <th style='width: 15%;'>Professeur</th>
                                <th style='width: 15%;'>Salle</th>
                                <th style='width: 15%;'>Semestre</th>
                                <th style='width: 15%;'>Date</th>
                                <th style='width: 10%;'></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result =  mysqli_query($conn, "select * from v_cour_salle order by id asc")) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['cour_libelle'] ."</td>";
                                        echo "<td>" . $row['libelle_niveau']." ".$row['groupe_libelle'] ."</td>";
                                        echo "<td>" . $row['prenom']." ".$row['nom'] ."</td>";
                                        echo "<td>" . $row['salle_libelle'] ."</td>"; 
                                        echo "<td>" . $row['semestre_libelle'] ."</td>"; 
                                        echo "<td>" . date("d/m/Y", strtotime($row['dt_cour'])) ."</td>";
                                        echo "<td>";
                                        echo '<a href="editEtuidSocl.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil-alt" style="color: #0d6efd;"></span>  </a>';
                                        echo '<a href="deleteEtuidSocl.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash" style="color: #0d6efd;"></span></a>';
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    mysqli_free_result($result);
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <br><br>
    <?php include("../header/footer.php"); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/main2.js"></script>
<script src="../js/search.js"></script>

</html>