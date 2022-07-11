<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$nom = $prenom = $email = $photo = $num_telephone = $adresse = $dt_naissance = $idSexe = "";
$nomErr = $prenomErr = $emailErr = $photoErr = $num_telephoneErr = $adresseErr = $dt_naissanceErr =  $idSexeErr = "";

$specialite = $universite = $lieu = "";
$specialiteErr = $universiteErr = $lieuErr = "";

$login = $mdp = $idProfile = "";
$loginErr = $mdpErr = "";

$sqlSexe = "select * from sexe";
$resSexe = mysqli_query($conn, $sqlSexe);

if ($resultProfile =  mysqli_query($conn, "select * from profile where code ='ENSG' ")) {
    while ($row = mysqli_fetch_array($resultProfile)) {
        $idProfile = $row['id'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputNom = trim($_POST["nom"]);
    if (empty($inputNom)) {
        $nomErr = "Nom est obligatoire.";
    } else {
        $nom = $inputNom;
    }

    $inputPrenom = trim($_POST["prenom"]);
    if (empty($inputPrenom)) {
        $prenomErr = "Prenom est obligatoire.";
    } else {
        $prenom = $inputPrenom;
    }

    $inputEmail = trim($_POST["email"]);
    if (empty($inputEmail)) {
        $emailErr = "Email est obligatoire.";
    } else {
        if ($result =  mysqli_query($conn, "select * from users where email='$inputEmail'")) {
            if (mysqli_num_rows($result) > 0) {
                $emailErr = "Email est existe";
            } else {
                $email = $inputEmail;
            }
        }
    }

    $inputNumTelephone = trim($_POST["num_telephone"]);
    if (empty($inputNumTelephone)) {
        $num_telephoneErr = "Numéro du téléphone est obligatoire.";
    } else {
        $num_telephone = $inputNumTelephone;
    }

    $inputAdresse = trim($_POST["adresse"]);
    if (empty($inputAdresse)) {
        $adresseErr = "Adresse est obligatoire.";
    } else {
        $adresse = $inputAdresse;
    }

    $inputDtNaissance = trim($_POST["dt_naissance"]);
    if (empty($inputDtNaissance)) {
        $dt_naissanceErr = "Adresse est obligatoire.";
    } else {
        $dt_naissance = $inputDtNaissance;
    }

    $inputSexe = trim($_POST["idSexe"]);
    if (empty($inputSexe)) {
        $idSexeErr = "Sexe est obligatoire.";
    } else {
        $idSexe = $inputSexe;
    }

    $inputLogin = trim($_POST["login"]);
    if (empty($inputLogin)) {
        $loginErr = "Login est obligatoire.";
    } else {
        if ($result =  mysqli_query($conn, "select * from users where login='$inputLogin'")) {
            if (mysqli_num_rows($result) > 0) {
                $loginErr = "Login est existe";
            } else {
                $login = $inputLogin;
            }
        }
    }

    $inputMdp = trim($_POST["mdp"]);
    if (empty($inputMdp)) {
        $mdpErr = "Mot de passe est obligatoire.";
    } else {
        $mdp = $inputMdp;
    }

    $inputPhoto = basename($_FILES['photo']['name']);
    if (empty($inputPhoto)) {
        $photoErr = "Photo est obligatoire.";
    } else {
        $photo = $inputPhoto;
    }

    $inputSpecialite = trim($_POST["specialite"]);
    if (empty($inputSpecialite)) {
        $specialiteErr = "Boulot est obligatoire.";
    } else {
        $specialite = $inputSpecialite;
    }

    $inputLieu = trim($_POST["lieu"]);
    if (empty($inputLieu)) {
        $lieuErr = "Lieu est obligatoire.";
    } else {
        $lieu = $inputLieu;
    }

    $inputUniversite = trim($_POST["universite"]);
    if (empty($inputUniversite)) {
        $universiteErr = "Parcour est obligatoire.";
    } else {
        $universite = $inputUniversite;
    }

    if (
        !empty($inputNom) && !empty($inputPrenom) && !empty($inputEmail) && !empty($inputNumTelephone)
        && !empty($inputAdresse) && !empty($inputDtNaissance) && !empty($inputSexe)
        && !empty($inputLogin) && !empty($inputMdp) && !empty($inputPhoto)
        && !empty($inputSpecialite) && !empty($inputUniversite) && !empty($inputLieu)
    ) {

        $sqlUser = "INSERT INTO users (nom, prenom, email, login, password, id_profile, num_telephone, adresse, dt_naissance, id_sexe, actif)
        VALUES('$nom', '$prenom', '$email', '$login', '$mdp', $idProfile, $num_telephone, '$adresse', '$dt_naissance', $idSexe, 1)";
        if (mysqli_query($conn, $sqlUser)) {
            $last_id = mysqli_insert_id($conn);
            $fichier = basename($_FILES['photo']['name']);
            $path = "/UIK/photo/prof/" . $last_id;

            mkdir($_SERVER['DOCUMENT_ROOT'] . $path, 0777, true);
            $dossier = $_SERVER['DOCUMENT_ROOT'] . $path . "/" . $fichier;
            if (!move_uploaded_file($_FILES['photo']['tmp_name'], $dossier)) {
                echo "fail 1";
            } else {
                $path = $path . "/" . $fichier;
                $sql = "UPDATE users set photo='$path' WHERE id=" . $last_id;
                if (mysqli_query($conn, $sql)) {
                    $sqlEnsg = "INSERT INTO enseignant (specialite, id_users, universite, lieu) VALUES('$specialite', $last_id, '$universite', '$lieu')";
                    if (mysqli_query($conn, $sqlEnsg)) {
                        header("Location: listProfScol.php");
                    } else {
                        echo "fail 3".$sqlEnsg;
                    }
                } else {
                    echo "fail 2";
                }
            }
        } else {
            echo "Erreur d'inseration : " . $sqlUser . "<br>" . mysqli_error($conn);
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
        <form method="post" enctype="multipart/form-data" id="editProf">

            <div class="wrapper">
                <div class="container-fluid">
                    <br><br>
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="pull-left" style="color: #0d6efd;">Ajouter un professeur</h3>
                        </div>
                    </div>
                    <hr>
                    <br><br>
                    <div class="col-md-10">
                        <h4 class="pull-left" style="color: #0d6efd;">Information générale</h4>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Prenom :</label>
                            <input type="text" name="prenom" class="form-control <?php echo (!empty($prenomErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $prenom; ?>">
                            <span class="invalid-feedback"><?php echo $prenomErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Nom :</label>
                            <input type="text" name="nom" class="form-control <?php echo (!empty($nomErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $nom; ?>">
                            <span class="invalid-feedback"><?php echo $nomErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Date de naissance :</label>
                            <input type="date" name="dt_naissance" class="form-control <?php echo (!empty($dt_naissanceErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $dt_naissance; ?>">
                            <span class="invalid-feedback"><?php echo $dt_naissanceErr; ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Numéro du téléphone :</label>
                            <input type="number" name="num_telephone" class="form-control <?php echo (!empty($num_telephoneErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $num_telephone; ?>">
                            <span class="invalid-feedback"><?php echo $num_telephoneErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Email :</label>
                            <input type="email" name="email" class="form-control <?php echo (!empty($emailErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $emailErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Sexe :</label>
                            <select name="idSexe" class="form-control <?php echo (!empty($idSexeErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $idSexe; ?>">
                                <option value="">Sélectionner un sexe</option>
                                <?php
                                while ($res = mysqli_fetch_array($resSexe, MYSQLI_BOTH)) {
                                    echo "<option value='" . $res['id'] . "'";
                                    echo $idSexe == $res['id'] ? "selected='selected'" : "";
                                    echo " > " . $res['libelle'] . "</option>";
                                } ?>
                            </select>
                            <span class="invalid-feedback"><?php echo $idSexeErr; ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Photo :</label>
                            <input type="file" name="photo" class="form-control <?php echo (!empty($photoErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $photo; ?>">
                            <span class="invalid-feedback"><?php echo $photoErr; ?></span>
                        </div>
                        <div class="form-group col-md-8">
                            <label>Adresse :</label>
                            <input type="text" name="adresse" class="form-control <?php echo (!empty($adresseErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $adresse; ?>">
                            <span class="invalid-feedback"><?php echo $adresseErr; ?></span>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-10">
                        <h4 class="pull-left" style="color: #0d6efd;">Information du professeur</h4>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Boulot :</label>
                            <input type="text" name="specialite" class="form-control <?php echo (!empty($specialiteErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $specialite; ?>">
                            <span class="invalid-feedback"><?php echo $specialiteErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Parcours :</label>
                            <input type="text" name="universite" class="form-control <?php echo (!empty($universiteErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $universite; ?>">
                            <span class="invalid-feedback"><?php echo $universiteErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Lieu :</label>
                            <input type="text" name="lieu" class="form-control <?php echo (!empty($lieuErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $lieu; ?>">
                            <span class="invalid-feedback"><?php echo $lieuErr; ?></span>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-10">
                        <h4 class="pull-left" style="color: #0d6efd;">Information du compte</h4>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Login :</label>
                            <input type="text" name="login" class="form-control <?php echo (!empty($loginErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $login; ?>">
                            <span class="invalid-feedback"><?php echo $loginErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Mot de passe :</label>
                            <input type="password" name="mdp" class="form-control <?php echo (!empty($mdpErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $mdp; ?>">
                            <span class="invalid-feedback"><?php echo $mdpErr; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <br><br>
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-md-10"></div>
                        <div class="form-group col-md-2">
                            <input type="button" value="Annuler" class="btn btn-danger" onclick="window.location='listProfScol.php';">
                            <input type="submit" class="btn btn-success" name="valider" value="Enregistrer">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <br><br>
    <?php include("../header/footer.php"); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/main2.js"></script>
<script src="../js/search.js"></script>

</html>