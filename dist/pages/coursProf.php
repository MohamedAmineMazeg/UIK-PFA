<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$sqlGroupe = "select distinct (g.id), g.libelle from groupe g
join cour c on c.id_groupe = g.id 
join annee_scolaire as2 on as2.id = c.id_annee_scolaire and as2.actif = '1'
join enseignant e on e.id = c.id_enseignant and e.id_users=" . $idUser;
$resGroupe = mysqli_query($conn, $sqlGroupe);

$sqlSearch = "select v.* from v_cour v where v.id_users =" . $idUser . " ";

$sqlFilieres  = "select * from specialite";
$resFilieres = mysqli_query($conn, $sqlFilieres);

$sqlBranche = "select * from branche where id is null";
$resBranche = mysqli_query($conn, $sqlBranche);

$cour = $idGroupe = $idFiliere = $idBranche = "";

if (isset($_GET['searchCourProf'])) {
    $cour =  trim($_GET["cour"]);
    $idGroupe =  trim($_GET["idGroupe"]);
    $idFiliere =  trim($_GET["idFiliere"]);
    $idBranche =  trim($_GET["idBranche"]);
}

$sqlExercice = "select v.* from v_rendu_grp_etud v where v.id_users_ensg =" . $idUser;

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
                <br>
                <div class="card">
                    <div class="card-body">
                        <form method="get">
                            <div>
                                <h5 class="pull-left" style="color: #0d6efd;">Recherche</h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label>Cour </label>
                                    <input type="text" name="cour" class="form-control" value="<?php echo $cour; ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Groupe </label>
                                    <select name="idGroupe" class="form-control" value="<?php echo $idGroupe; ?>">
                                        <option value="">Sélectionner un groupe</option>
                                        <?php
                                        while ($res = mysqli_fetch_array($resGroupe, MYSQLI_BOTH)) {
                                            echo "<option value='" . $res['id'] . "'";
                                            echo $idGroupe == $res['id'] ? "selected='selected'" : "";
                                            echo " > " . $res['libelle'] . "</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Filière </label>
                                    <select name="idFiliere" id="idFiliere" class="form-control" value="<?php echo $idFiliere; ?>">
                                        <option value="">Sélectionner une filière</option>
                                        <?php
                                        while ($res = mysqli_fetch_array($resFilieres, MYSQLI_BOTH)) {
                                            echo "<option value='" . $res['id'] . "'";
                                            echo $idFiliere == $res['id'] ? "selected='selected'" : "";
                                            echo " > " . $res['libelle'] . "</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Niveau </label>
                                    <select name="idBranche" id="idBranche" class="form-control" value="<?php echo $idBranche; ?>">
                                        <option value="">Sélectionner un niveau</option>
                                        <?php
                                        while ($res = mysqli_fetch_array($resBranche, MYSQLI_BOTH)) {
                                            echo "<option value='" . $res['id'] . "'>" . $res['libelle'] . "</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-10"></div>
                                <div class="col-md-2">
                                    <button class="btn-search" id="searchCourProf" type="submit" name="searchCourProf">
                                        <i class="fa fa-search"></i> Recherche
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-11">
                        <h3 class="pull-left" style="color: #0d6efd;">Liste des cours</h3>
                    </div>
                    <div class="form-group col-md-1 pull-right ">
                        <a href="ajoutCour.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Cour</a>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 2px;">
                    <div class="col-md-9"></div>
                    <div class="col-md-3" align="right">
                        <input type="text" id="inputSearch" onkeyup="tableSearch()" placeholder="Recherche..." class="form-control">
                    </div>
                </div>
                <!-- 
                <div style="background-color: #0d6efd;">
                    <div align="right">
                        <div class="col-md-3">
                            <input type="text" id="inputSearch" style="padding-left: 5px;" onkeyup="tableSearch()" placeholder="Recherche..." class="form-control">
                        </div>
                    </div>
                </div>
                -->
                <div class="col-md-12">
                    <table class="table table-bordered table-striped" id="table">
                        <thead>
                            <tr>
                                <th>Cour</th>
                                <th>Niveau</th>
                                <th>Groupe</th>
                                <th>Filières</th>
                                <th>Date</th>
                                <th style="width: 5%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_GET['searchCourProf'])) {
                                $cour = $_GET['cour'];
                                $idGroupe = $_GET['idGroupe'];
                                $idFiliere = $_GET['idFiliere'];
                                $idBranche = $_GET['idBranche'];

                                $clause = " ";
                                if (!empty($cour)) {
                                    $clause = $clause . " and v.libelle like '%" . $cour . "%' ";
                                }

                                if (!empty($idGroupe)) {
                                    $clause = $clause . " and v.id_groupe =" . $idGroupe . " ";
                                }

                                if (!empty($idFiliere)) {
                                    $clause = $clause . " and v.id_specialite=" . $idFiliere . " ";
                                }

                                if (!empty($idBranche)) {
                                    $clause = $clause . " and v.id_barnche=" . $idBranche . " ";
                                }
                                $sqlSearch = $sqlSearch . " " . $clause;
                            }

                            if ($result =  mysqli_query($conn, $sqlSearch . " order by dt_cour desc ")) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['libelle'] . "</td>";
                                        echo "<td>" . $row['libelle_branche'] . "</td>";
                                        echo "<td>" . $row['libelle_groupe'] . "</td>";
                                        echo "<td>" . $row['libelle_specialite'] . "</td>";
                                        echo "<td>" . date("d/m/Y", strtotime($row['dt_cour'])) . "</td>";
                                        echo "<td>";
                                        echo '<a href="editCour.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil-alt" style="color: #0d6efd;"></span>  </a>';
                                        echo '<a href="deleteCour.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash" style="color: #0d6efd;"></span></a>';
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    mysqli_free_result($result);
                                }
                            }
                            echo "</tbody>";
                            echo "</table>";
                            ?>
                </div>
                <br> <br>
                <hr class="hr-spare">
                <br> <br>

                <div class="row">
                    <div class="col-md-11">
                        <h3 class="pull-left" style="color: #0d6efd;">Télécharge les exercices</h3>
                    </div>
                </div>
                <div class="row categ p-0 m-0 justify-content-center justify-content-around">
                    <?php
                    if ($result =  mysqli_query($conn, $sqlExercice . " limit 6 ")) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<div class='col-md-4' style='padding-top: 10px;'>";
                                echo "<div class='card-exercice'>";
                                echo "<div class='row'>";
                                echo "<div class='col-md-4' style='background-color: #0d6efd; border-radius: 0.3rem;'>";
                                echo "<img class='card-img-top' src='../../img/file.png' height='100%'>";
                                echo "</div>";
                                echo "<div class='col-md-8'>";
                                echo "<h4 class='card-title'>" . $row['prenom'] . ' ' . $row['nom'] . "</h4>";
                                echo "<p class='card-text'>Groupe :" . $row['libelle_groupe'] . "</p>";
                                echo "<p class='card-text'>Type :" . substr($row['name_support'], strpos($row['name_support'], ".") + 1) . "</p>";
                                echo "<p class='card-text'>" . date("d/m/Y", strtotime($row['dt_insert'])) . "";
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo "<a href='" . $row['support'] . "' download='" . $row['name_support'] . "' class='card-text card-btn' style='background-color: #0d6efd; font-size: 18px;'>&nbsp;Ouvrir&nbsp;</a></p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                            mysqli_free_result($result);
                        }
                    }
                    ?>
                </div>
                <br><br>
                <p class='text-center'>
                    <button class='card-text text-center card-btn' style="background-color: #0d6efd;" data-bs-toggle="modal" data-bs-target="#mod">
                        Voir plus
                    </button>
                </p>
            </div>
        </div>
    </main>

    <br><br>

    <div class="modal fade" id="mod" tabindex="-1" aria-labelledby="mod-titre" aria-hidden="true">
        <div class="modal-dialog modal-lg  mod-body">
            <div class="modal-content mod-in-body">
                <div class="modal-header mod-head">
                    <h5 class="modal-title text-primary" id="mod-titre" style="padding-left: 2%;">Liste des exercices</h5>
                    <button type="button" class="btn-close mod-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <hr>
                    <br>
                    <div class="row" style="padding-bottom: 2px;">
                        <div class="col-md-9"></div>
                        <div class="col-md-3" align="right">
                            <input type="text" id="inputSearch2" onkeyup="tableSearch2()" placeholder="Recherche..." class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped" id="table2">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Groupe</th>
                                    <th>Exercice</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result =  mysqli_query($conn, $sqlExercice)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['prenom'] . " " . $row['nom'] . "</td>";
                                            echo "<td>" . $row['libelle_groupe'] . "</td>";
                                            echo "<td><a href='" . $row['support'] . "' download='" . $row['name_support'] . "' style='color: #0d6efd;'>" . $row['name_support'] . "</a></td>";
                                            echo "<td>" . date("d/m/Y", strtotime($row['dt_insert'])) . "</td>";
                                            echo "</tr>";
                                        }
                                        mysqli_free_result($result);
                                    }
                                }
                                echo "</tbody>";
                                echo "</table>";
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <?php include("../header/footer.php"); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/main2.js"></script>
<script src="../js/search.js"></script>

</html>