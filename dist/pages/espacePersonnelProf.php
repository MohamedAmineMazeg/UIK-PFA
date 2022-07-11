<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$sqlGroupeProf = "select v.* from v_groupe_prof v where v.id_users=" . $idUser . " and v.actif='1'";
$resGroupProf = mysqli_query($conn, $sqlGroupeProf);
$resGroupProf1 = mysqli_query($conn, $sqlGroupeProf);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Acceuil</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <style>
        .card-btn:hover {
            color: #0f41ab;
        }
    </style>
</head>

<body>
    <?php include("../header/head.php"); ?>

    <main>
        <br><br>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row categ">
                    <h2 class="p-2 text-center"><b>Les cours à donner pour cette semaine</b></h2>
                    <div class="col-md categ_menu">
                        <ul class="categ_menu_cat">
                            <li>
                                <span href='#' class="" id="tout"><b>Toutes les catégorie</b></span>
                            </li>
                            <?php
                            while ($res = mysqli_fetch_array($resGroupProf, MYSQLI_BOTH)) {
                                echo "<li>";
                                echo "<span href='#'><b>" . $res['libelle'] . "</b></span>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="row categ p-0 m-0 justify-content-center justify-content-around">

                    <?php
                    $countTot = 0;
                    $sqlCount = mysqli_query($conn, "select count(v.id) as count from v_cour_salle v where v.id_users =" . $idUser . " and WEEK(v.dt_cour) = WEEK(NOW(), -1)");
                    if (mysqli_num_rows($sqlCount) > 0) {
                        while ($row = mysqli_fetch_array($sqlCount)) {
                            $countTot = $row[0];
                        }
                        mysqli_free_result($sqlCount);
                    }
                    $count = 0;
                    while ($count < $countTot) {
                        if ($result =  mysqli_query($conn, "select v.* from v_cour_salle v where v.id_users =" . $idUser . " and WEEK(v.dt_cour) = WEEK(NOW(), -1) order by dt_cour asc limit 3 offset " . $count)) {
                            echo "<div class='row'>";
                            if (mysqli_num_rows($result) > 0) {
                                echo "<div class='col-md-1' style='padding-top: 20px;'></div>";
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<div class='col-md-3' style='padding-top: 20px;'>";
                                    echo "<div class='card crd_body'>";
                                    echo "<img class='card-img-top' src='" . $row['couverture'] . "' height='250'>";
                                    echo "<div class='card-body'>";
                                    echo "<h4 class='card-title text-center'>Cour :" . $row['cour_libelle'] . "</h4>";
                                    echo "<p class='card-text text-center'>Groupe " . $row['groupe_libelle'] . " " .  date("d/m/Y", strtotime($row['dt_cour'])) . "</p>";
                                    echo "<p class='text-center'><button class='card-text text-center card-btn' style='background-color: white;'>Consulter</button></p>";
                                    echo "<p class='text-center'><button class='card-text text-center card-btn' style='background-color: white;'>Modifier</button></p>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                                echo "<div class='col-md-1' style='padding-top: 20px;'></div>";
                                mysqli_free_result($result);
                            }
                            echo "</div>";
                        }
                        $count = $count + 3;
                    }
                    ?>
                </div>
            </div>
        </div>

        <br> <br>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row categ">
                    <h2 class="p-5 text-center"><b>Calendrier des examen</b></h2>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style='width: 15%;' class="text-center">Examen</th>
                            <th style='width: 15%;' class="text-center">Groupe</th>
                            <th style='width: 30%;' class="text-center">Type</th>
                            <th style='width: 15%;' class="text-center">Salle</th>
                            <th style='width: 10%;' class="text-center">Date</th>
                            <!-- <th style='width: 3%;'></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result =  mysqli_query($conn, "select v.* from v_examen v where v.dt_examen >= now() and v.id_users=" . $idUser . " order by v.dt_examen asc ")) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td class='text-center'>" . $row['cour_libelle'] . "</td>";
                                    echo "<td class='text-center'>" . $row['groupe_libelle'] . "</td>";
                                    echo "<td class='text-center'>" . $row['examen_libelle'] . "</td>";
                                    echo "<td class='text-center'>" . $row['salle_libelle'] . "</td>";
                                    echo "<td class='text-center'>" . date("d/m/Y", strtotime($row['dt_examen'])) . " à " . $row['dt_debut'] . "H--" . $row['dt_fin'] . "H </td>";
                                    //echo "<td class='text-center'>";
                                    //echo '<a href="modifierExamen.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip" style="color: #0f41ab;"> <span class="fa fa-pencil-alt"></span></a>';
                                    //echo '<a href="modifierExamen.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip" style="color: #0f41ab;"><span class="fa fa-eye"></span></a>';
                                    //echo "</td>";
                                    echo "</tr>";
                                }


                                mysqli_free_result($result);
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <p class="text-center"><button class="card-text text-center card-btn" style="background-color: white;">Voir plus</button></p>
        </div>

        <br><br>
        <div class="row categ">
            <h2 class="p-5 text-center"><b>Rendu</b></h2>
        </div>
        <div>
            <div class="row categ p-0 m-0 justify-content-center justify-content-around">
                <div class="col-md-6 crd1 m-0 p-0" style="margin-left: 1% !important;">
                    <div class="card_epp crd_body_epp">
                        <img class="card-img-top" src="../../img/NoPath - Copy.png" height="600">
                    </div>
                    <p class="card-text" style="text-align:left;">Python Programmin <span style="float:right;">Groupe 5</span></p>
                </div>
                <div class="col-md-3 crd1 m-0 p-0" style="margin-left: 3% !important;">
                    <div class="card_epp crd_body_epp">
                        <img class="card-img-top" src="../../img/NoPath - Copy (5).png" height="270">
                    </div>
                    <p class="card-text" style="text-align:left;">Algorythm AI <span style="float:right;">Groupe 5</span></p>
                    <br>
                    <div class="card_epp crd_body_epp">
                        <img class="card-img-top" src="../../img/raw.png" height="270">
                    </div>
                    <p class="card-text" style="text-align:left;">Node <span style="float:right;">Groupe 1</span></p>
                </div>
                <div class="col-sm-1 crd1 m-0 p-0">
                </div>
            </div>
            <br>
            <div class="row categ p-0 m-0 justify-content-center justify-content-around">
                <div class="col-md-3 crd1 m-0 p-0">
                    <div class="card_epp crd_body_epp">
                        <img class="card-img-top" src="../../img/angular.png" height="270">
                    </div>
                    <p class="card-text" style="text-align:left;">Python Programmin <span style="float:right;">Groupe 3</span></p>
                </div>
                <div class="col-md-3 crd1 m-0 p-0">
                    <div class="card_epp crd_body_epp">
                        <img class="card-img-top" src="../../img/java.jpg" height="270">
                    </div>
                    <p class="card-text" style="text-align:left;">Java <span style="float:right;">Groupe 1</span></p>
                </div>

                <div class="col-md-3 crd1 m-0 p-0">
                    <div class="card_epp crd_body_epp">
                        <img class="card-img-top" src="../../img/Kubernetes.png" height="270">
                    </div>
                    <p class="card-text" style="text-align:left;">Kubernetes <span style="float:right;">Groupe 2</span></p>
                </div>
                <div class="col-md-1 crd1 m-0 p-0">
                </div>
            </div>
        </div>

        <br> <br>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row categ">
                    <h2 class="p-2 text-center"><b>Travaille donner</b></h2>
                    <div class="col-md categ_menu">
                        <ul class="categ_menu_cat">
                            <li>
                                <span href='#' class="" id="tout"><b>Toutes les catégorie</b></span>
                            </li>
                            <?php
                            while ($res = mysqli_fetch_array($resGroupProf1, MYSQLI_BOTH)) {
                                echo "<li>";
                                echo "<span href='#'><b>" . $res['libelle'] . "</b></span>";
                                echo "</li>";
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style='width: 10%;' class="text-center">Cours</th>
                            <th style='width: 10%;' class="text-center">Groupe</th>
                            <th style='width: 50%;' class="text-center">Travaille demandé</th>
                            <th style='width: 10%;' class="text-center">Date</th>
                            <th style='width: 20%;' class="text-center">Remarque</th>
                            <!-- <th style='width: 3%;'></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result =  mysqli_query($conn, "select v.* from v_rendu_prof v where v.dt_depot >= now() and v.id_users =" . $idUser . " order by dt_depot asc")) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td class='text-center'>" . $row['cour_libelle'] . "</td>";
                                    echo "<td class='text-center'>" . $row['groupe_libelle'] . "</td>";
                                    echo "<td class='text-center'>" . $row['description'] . "</td>";
                                    echo "<td class='text-center'>" . date("d/m/Y", strtotime($row['dt_depot'])) . "</td>";
                                    echo "<td class='text-center'>" . ((empty($row['remarque'])) ? 'Aucune remarque' : '') . "</td>";
                                    echo "</tr>";
                                }
                                mysqli_free_result($result);
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <p class="text-center"><button class="card-text text-center card-btn" style="background-color: white;">Voir plus</button></p>
        </div>

    </main>
    <br><br>
    <?php include("../header/footer.php"); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/main2.js"></script>
<script src="../js/search.js"></script>

</html>