<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$cour = $description = $duree = $credit = $idGroupe =  $support = "";
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

$idEnsg = $idAnnScol = $idSemster = "";
if ($result =  mysqli_query($conn, "select * from enseignant where id_users=" . $idUser)) {
    while ($row = mysqli_fetch_array($result)) {
        $idEnsg = $row['id'];
    }
}

if ($result =  mysqli_query($conn, "select * from annee_scolaire where actif = '1'")) {
    while ($row = mysqli_fetch_array($result)) {
        $idAnnScol = $row['id'];
    }
}

if ($result =  mysqli_query($conn, "select * from semestre where actif = '1'")) {
    while ($row = mysqli_fetch_array($result)) {
        $idSemster = $row['id'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputCour = trim($_POST["cour"]);
    if (empty($inputCour)) {
        $courErr = "Cour est obligatoire.";
    } else {
        $cour = $inputCour;
    }

    $inputDuree = trim($_POST["duree"]);
    if (empty($inputDuree)) {
        $duree = "";
        $dureeErr = "Durée est obligatoire.";
    } else {
        $duree = $inputDuree;
    }

    $inputCredit = trim($_POST["credit"]);
    if (empty($inputCredit)) {
        $credit = "";
        $creditErr = "Credit est obligatoire.";
    } else {
        $credit = $inputCredit;
    }

    $inputGroupe = trim($_POST["idGroupe"]);
    if (empty($inputGroupe)) {
        $idGroupeErr = "Groupe est obligatoire.";
    } else {
        $idGroupe = $inputGroupe;
    }

    $inputDescription = trim($_POST["description"]);
    if (!empty($inputDescription)) {
        $description = $inputDescription;
    }

    //$inputSupport = trim($_POST["support"]);
    $inputSupport = basename($_FILES['support']['name']);
    if (empty($inputSupport)) {
        $supportErr = "Couverture est obligatoire.";
    } else {
        $support = $inputSupport;
    }


    if (!empty($inputCour) && !empty($inputDuree) && !empty($inputCredit) && !empty($inputSupport)) {
        $sql = "INSERT INTO cour(libelle, description, id_semester, id_annee_scolaire, id_enseignant, duree, credits, dt_cour, id_groupe)
        VALUES('$cour', '$description', $idSemster, $idAnnScol, $idEnsg, $duree, $credit, now(), $idGroupe)";
        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            $fichier = basename($_FILES['support']['name']);
            $path = "/UIK/support/cour/" . $last_id;

            mkdir($_SERVER['DOCUMENT_ROOT'] . $path, 0777, true);
            $dossier = $_SERVER['DOCUMENT_ROOT'] . $path . "/" . $fichier;
            if (!move_uploaded_file($_FILES['support']['tmp_name'], $dossier)) {
                echo "fail";
            } else {
                $path = $path . "/" . $fichier;
                $sql = "UPDATE cour set couverture='$path' WHERE id=" . $last_id;
                if (mysqli_query($conn, $sql)) {
                    header("Location: editCour.php?id=" . $id);
                }
            }
        } else {
            echo "Erreur d'inseration : " . $sql . "<br>" . mysqli_error($conn);
        }
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
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="pull-left" style="color: #0d6efd;">Cour</h3>
                        </div>
                        <hr>
                    </div>
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

                    <br />
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
                        <div class="form-group col-md-8">
                            <label>Couverture :</label>
                            <input type="file" name="support" class="form-control <?php echo (!empty($supportErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $support; ?>">
                            <span class="invalid-feedback"><?php echo $supportErr; ?></span>
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