<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$cour = $description = $duree = $credit = $idGroupe = $support = $supportN = "";
$courErr = $descriptionErr = $dureeErr = $creditErr = $idGroupeErr = $supportErr = "";

$sqlSepc = "select * from specialite";
$resSepc = mysqli_query($conn, $sqlSepc);

$sqlGroupe = "select g.id, g.libelle, e.id_users, b.libelle as libelle_branche from groupe g 
join groupe_enseignant ge on ge.id_groupe = g.id 
join annee_scolaire as2 on as2.id = g.id_annee_scol and as2.actif = 1
join branche b on b.id = g.id_branche
join enseignant e on e.id = ge.id_enseignant
where e.id_users=" . $idUser;
$resGroupe = mysqli_query($conn, $sqlGroupe);

$id =  trim($_GET["id"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputCour = trim($_POST["cour"]);
    if (empty($inputCour)) {
        $courErr = "Cour est obligatoire.";
    } else {
        $cour = $inputCour;
    }

    $inputDuree = trim($_POST["duree"]);
    if (empty($inputDuree)) {
        $dureeErr = "Durée est obligatoire.";
    } else {
        $duree = $inputDuree;
    }

    $inputCredit = trim($_POST["credit"]);
    if (empty($inputCredit)) {
        $creditErr = "Credit est obligatoire.";
    } else {
        $credit = $inputCredit;
    }

    $inputGroupe = trim($_POST["idGroupe"]);
    if (!empty($inputGroupe)) {
        $idGroupe = $inputGroupe;
    } else {
        $idGroupeErr = "Groupe est obligatoire.";
    }

    if (!empty($inputCour) && !empty($inputDuree) && !empty($inputCredit) && !empty($idGroupe)) {
        $description = trim($_POST["description"]);

        $inputSupport = basename($_FILES['supportN']['name']);
        if (!empty($inputSupport)) {
            $fichier = basename($_FILES['supportN']['name']);
            $path = "/UIK/support/cour/" . $id;

            $dossier = $_SERVER['DOCUMENT_ROOT'] . $path . "/" . $fichier;
            if (!move_uploaded_file($_FILES['supportN']['tmp_name'], $dossier)) {
                echo "fail";
            }
            $path = $path . "/" . $fichier;
            $sqlSupport = ", couverture='$path' ";
        } else {
            echo "fail ";
        }
        echo 'sqlSupport ' . $sqlSupport;

        $sql = "UPDATE cour SET libelle='$cour', description='$description', duree=$duree, credits=$credit, id_groupe=$idGroupe " . $sqlSupport . "  WHERE id=" . $id;
        if (mysqli_query($conn, $sql)) {
            header("Location: coursProf.php");
        } else {
            echo "Erreur d'inseration : " . $sql . "<br>" . mysqli_error($conn);
        }
    }
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        //$id =  trim($_GET["id"]);
        if ($result =  mysqli_query($conn, "SELECT * FROM cour WHERE id=" . $id)) {
            while ($row = mysqli_fetch_array($result)) {
                $cour = $row['libelle'];
                $idGroupe = $row['id_groupe'];
                $description = $row['description'];
                $duree = $row['duree'];
                $credit = $row['credits'];
                $support = $row['couverture'];
            }
        }
    }
}
//action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);"
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

                <form method="post">
                    <br><br>
                    <div class="col-md-10">
                        <h3 class="pull-left" style="color: #0d6efd;">Cour</h3>
                    </div>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Cour :</label>
                            <input type="text" name="cour" class="form-control <?php echo (!empty($courErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $cour; ?>">
                            <span class="invalid-feedback"><?php echo $courErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Durée :</label>
                            <input type="number" name="duree" class="form-control <?php echo (!empty($dureeErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $duree; ?>">
                            <span class="invalid-feedback"><?php echo $dureeErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Credit :</label>
                            <input type="number" name="credit" class="form-control <?php echo (!empty($creditErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $credit; ?>">
                            <span class="invalid-feedback"><?php echo $creditErr; ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Groupe :</label>
                            <select name="idGroupe" class="form-control <?php echo (!empty($idGroupeErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $idGroupe; ?>">
                                <option value="">Sélectionner un groupe</option>
                                <?php
                                while ($res = mysqli_fetch_array($resGroupe, MYSQLI_BOTH)) {
                                    echo "<option value='" . $res['id'] . "'";
                                    echo $idGroupe == $res['id'] ? "selected='selected'" : "";
                                    echo " > " . $res['libelle'] . "</option>";
                                } ?>
                            </select>
                            <span class="invalid-feedback"><?php echo $idGroupeErr; ?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Support :</label>
                            <input type="file" name="supportN" class="form-control">
                        </div>
                        <div class="form-group col-md-2" style="margin-top: 2%;">
                            <!-- <label>Téléchargement cour :</label> -->
                            <?php echo "<a href='" . $support . "' download='file' style='color: #0d6efd;' class='form-group'><span class='fa fa-download' style='color: #0d6efd;'></span></a>"; ?>
                            <!-- " . $supportName . " -->
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Description :</label>
                            <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
                        </div>
                    </div>
                    <br><br>
                    <div class="wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="pull-left" style="color: #0d6efd;">Liste des chapitres</h3>
                                </div>
                                <hr>
                                <div class="form-group" align="right" style="padding-bottom: 1%;">
                                    <a href="ajoutChaptire.php?id=<?php echo $id ?>" class="btn btn-success"><i class="fa fa-plus"></i> Chapitre</a>
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px;">
                                <div class="col-md-9"></div>
                                <div class="col-md-3" align="right">
                                    <input type="text" id="inputSearch" onkeyup="tableSearch()" placeholder="Recherche..." class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <?php
                                echo '<table class="table table-bordered table-striped" id="table">';
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>Chaptire</th>";
                                echo "<th>Type Chaptire</th>";
                                echo "<th>Support</th>";
                                echo "<th>Date</th>";
                                echo "<th style='width: 5%;'></th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                if ($result =  mysqli_query($conn, "select * from v_chaptire where id_cour=" . $id . " order by id desc ")) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            $dt = "";
                                            if (!empty($row['dt_chaptire'])) {
                                                $dt = date("d/m/Y", strtotime($row['dt_chaptire']));
                                            }
                                            echo "<tr>";
                                            echo "<td>" . $row['libelle_chaptire'] . "</td>";
                                            echo "<td>" . $row['libelle_type_chaptire'] . "</td>";
                                            echo "<td><a href='" . $row['support'] . "' download='" . $row['support_name'] . "' style='color: #0d6efd;'>" . $row['support_name'] . "</a></td>";
                                            echo "<td>" . $dt . "</td>";
                                            echo "<td>";
                                            echo '<a href="editChaptire.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil-alt" style="color: #0d6efd;"></span>  </a>';
                                            echo '<a href="deleteChaptire.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash" style="color: #0d6efd;"></span></a>';
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
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="form-group col-md-10"></div>
                        <div class="form-group col-md-2">
                            <input type="button" value="Annuler" class="btn btn-danger" onclick="window.location='coursProf.php';">
                            <input type="submit" class="btn btn-success" name="valider" value="Enregistrer">
                        </div>
                    </div>
                </form>
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