<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$chaptire = $description = $supportN = $idTypChp = $idCour = $supportName = "";
$chaptireErr = $supportNErr = $idTypChpErr = "";

$sqlTypChp = "select * from type_chapitre";
$resTypChp = mysqli_query($conn, $sqlTypChp);
$error = "";

$id =  trim($_GET["id"]);
if ($result =  mysqli_query($conn, "SELECT * FROM chapitre WHERE id=" . $id)) {
    while ($row = mysqli_fetch_array($result)) {
        $chaptire = $row['libelle'];
        $idTypChp = $row['id_type_cour'];
        $description = $row['description'];
        $idCour = $row['id_cour'];
        $support = $row['support'];
        $supportName =  $row['support_name'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputChaptir = trim($_POST["chaptire"]);
    if (empty($inputChaptir)) {
        $chaptireErr = "Chaptire est obligatoire.";
    } else {
        $chaptire = $inputChaptir;
    }

    $inputTypeChp = trim($_POST["idTypChp"]);
    if (empty($inputTypeChp)) {
        $idTypChpErr = "Type du chaptire est obligatoire.";
    } else {
        $idTypChp = $inputTypeChp;
    }

    if (!empty($inputChaptir) && !empty($idTypChp)) {
        $sqlSupport = "";
        $description = trim($_POST["description"]);

        $inputSupport = basename($_FILES['supportN']['name']);
        if (!empty($inputSupport)) {
            $fichier = basename($_FILES['supportN']['name']);
            $path = "/UIK/support/chaptire/" . $id;

            //mkdir($_SERVER['DOCUMENT_ROOT'] . $path, 0777, true);
            $dossier = $_SERVER['DOCUMENT_ROOT'] . $path . "/" . $fichier;
            if (!move_uploaded_file($_FILES['supportN']['tmp_name'], $dossier)) {
                echo "fail";
            }
            $path = $path . "/" . $fichier;
            $sqlSupport = ", support='$path', support_name='$fichier' ";
        }
        $sql = "UPDATE chapitre SET libelle='$chaptire', description='$description', id_type_cour=$idTypChp $sqlSupport WHERE id=" . $id;
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            header("Location: editCour.php?id=" . $idCour);
        } else {
            echo "Erreur d'inseration chaptire : " . $sql . "<br>";
            $error = "Erreur d'inseration chaptire";
        }
    }
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
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
                <br><br>
                <div class="col-md-10">
                    <h3 class="pull-left" style="color: #0d6efd;">Chaptire</h3>
                </div>
                <hr>
                <form method="post" enctype="multipart/form-data">
                    <span class="invalid-feedback"><?php echo $error; ?></span>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label>Chaptire :</label>
                            <input type="text" name="chaptire" class="form-control <?php echo (!empty($chaptireErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $chaptire; ?>">
                            <span class="invalid-feedback"><?php echo $chaptireErr; ?></span>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Type du chaptire :</label>
                            <select name="idTypChp" class="form-control <?php echo (!empty($idTypChpErr)) ? 'is-invalid' : ''; ?>" value="<?php $idTypChp; ?>">
                                <option value="">S??lectionner un type du chaptire</option>
                                <?php
                                while ($res = mysqli_fetch_array($resTypChp, MYSQLI_BOTH)) {
                                    echo "<option value='" . $res['id'] . "'";
                                    echo $idTypChp == $res['id'] ? "selected='selected'" : "";
                                    echo " > " . $res['libelle'] . "</option>";
                                } ?>
                            </select>
                            <span class="invalid-feedback"><?php echo $idTypChpErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Support :</label>
                            <input type="file" name="supportN" class="form-control">
                        </div>
                        <div class="form-group col-md-2" style="margin-top: 2%;">
                            <!-- <label>T??l??chargement cour :</label> -->
                            <?php echo "<a href='" . $support . "' download='" . $supportName . "' style='color: #0d6efd;' class='form-group'><span class='fa fa-download' style='color: #0d6efd;'></span></a>"; ?>
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
                            <input type="button" value="Annuler" class="btn btn-danger" onclick="window.location='editCour.php?id=<?php echo $idCour ?>';">
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