<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$libelle = $experience = "";
$libelleErr = $experienceErr = "";

$id =  trim($_GET["id"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputLibelle = trim($_POST["libelle"]);
    if (empty($inputLibelle)) {
        $libelleErr = "Experience est obligatoire.";
    } else {
        $libelle = $inputLibelle;
    }

    $inputNmbExper = trim($_POST["experience"]);
    if (empty($inputNmbExper)) {
        $experienceErr = "Nombre d'Experience est obligatoire.";
    } else {
        $experience = $inputNmbExper;
    }


    if (!empty($inputLibelle) && !empty($inputNmbExper)) {

        $sql = "INSERT INTO uik.experience (libelle, experience, id_enseignant) 
            VALUES(" . '"' . $libelle . '"' . ", $experience, (select id from enseignant where id_users=$id));";
        if (mysqli_query($conn, $sql)) {
            header("Location: editProfileProf.php?id=" . $id);
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
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="pull-left" style="color: #0d6efd;">Experience</h3>
                    </div>
                    <hr>
                </div>
                <form method="post">
                    <div class="row form-group col-md-3">
                        <label>Nombre d'experience :</label>
                        <input type="number" name="experience" class="form-control <?php echo (!empty($experienceErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $experience; ?>">
                        <span class="invalid-feedback"><?php echo $experienceErr; ?></span>
                    </div>
                    <br>
                    <div class="row form-group col-md-12">
                        <label>Experience :</label>
                        <textarea name="libelle" class="form-control <?php echo (!empty($libelleErr)) ? 'is-invalid' : ''; ?>"><?php echo $libelle; ?></textarea>
                        <span class="invalid-feedback"><?php echo $libelleErr; ?></span>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="form-group col-md-10"></div>
                        <div class="form-group col-md-2">
                            <input type="button" value="Annuler" class="btn btn-danger" onclick="window.location='editProfileProf.php?id=<?php echo $id ?>';">
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