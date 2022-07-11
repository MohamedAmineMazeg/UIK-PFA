<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$nom = $prenom = $email = $photo = $num_telephone = $adresse = $dt_naissance = $ancienne_etablissement = $idSexe = "";
$nomErr = $prenomErr = $emailErr = $photoErr = $num_telephoneErr = $adresseErr = $dt_naissanceErr = $ancienne_etablissementErr =  $idSexeErr = "";

$idSpecialite = $idBranche = $idGroupe = "";
$idSpecialiteErr = $idBrancheErr = $idGroupeErr = "";

$login = $mdp = $idProfile = "";
$loginErr = $mdpErr = "";

$sqlSexe = "select * from sexe";
$resSexe = mysqli_query($conn, $sqlSexe);

$sqlSpecialite = "select * from specialite";
$resSpecialite = mysqli_query($conn, $sqlSpecialite);

$sqlBranche = "select * from branche  where id is null";
$resBranche = mysqli_query($conn, $sqlBranche);

$sqlGroupe = "select g.* from groupe g join annee_scolaire as2 on as2.id = g.id_annee_scol and as2.actif = '1'  where g.id is null";
$resGroupe = mysqli_query($conn, $sqlGroupe);

if ($resultProfile =  mysqli_query($conn, "select * from profile where code ='STUD' ")) {
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

    $inputAncienneEtablissement = trim($_POST["ancienne_etablissement"]);
    if (empty($inputAncienneEtablissement)) {
        $ancienne_etablissementErr = "Ancienne établissement est obligatoire.";
    } else {
        $ancienne_etablissement = $inputAncienneEtablissement;
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

    $inputSpecialite = trim($_POST["idSpecialite"]);
    if (empty($inputSpecialite)) {
        $idSpecialiteErr = "Filière est obligatoire.";
    } else {
        $idSpecialite = $inputSpecialite;
    }

    $inputBranche = trim($_POST["idBranche"]);
    if (empty($inputBranche)) {
        $idBrancheErr = "Niveau est obligatoire.";
    } else {
        $idBranche = $inputBranche;
        $sqlBranche = "select * from branche  where id_specialite=$inputSpecialite";
        $resBranche = mysqli_query($conn, $sqlBranche);
    }

    $inputGroupe = trim($_POST["idGroupe"]);
    if (empty($inputGroupe)) {
        $idGroupeErr = "Groupe est obligatoire.";
    } else {
        $idGroupe = $inputGroupe;
        $sqlGroupe = "select g.* from groupe g join annee_scolaire as2 on as2.id = g.id_annee_scol and as2.actif = '1'  where g.id_branche=$inputBranche";
        $resGroupe = mysqli_query($conn, $sqlGroupe);
    }

    $inputPhoto = basename($_FILES['photo']['name']);
    if (empty($inputPhoto)) {
        $photoErr = "Photo est obligatoire.";
    } else {
        $photo = $inputPhoto;
    }

    if (
        !empty($inputNom) && !empty($inputPrenom) && !empty($inputEmail) && !empty($inputNumTelephone)
        && !empty($inputAdresse) && !empty($inputDtNaissance) && !empty($inputSexe)
        && !empty($inputLogin) && !empty($inputMdp) && !empty($inputAncienneEtablissement)
        && !empty($inputPhoto) && !empty($inputSpecialite)
        && !empty($inputGroupe) && !empty($inputBranche)
    ) {

        $sqlUser = "INSERT INTO users (nom, prenom, email, login, password, id_profile, num_telephone, adresse, dt_naissance, id_sexe, actif)
        VALUES('$nom', '$prenom', '$email', '$login', '$mdp', $idProfile, $num_telephone, '$adresse', '$dt_naissance', $idSexe, 1)";
        if (mysqli_query($conn, $sqlUser)) {
            $last_id = mysqli_insert_id($conn);
            $fichier = basename($_FILES['photo']['name']);
            $path = "/UIK/photo/etudiant/" . $last_id;

            mkdir($_SERVER['DOCUMENT_ROOT'] . $path, 0777, true);
            $dossier = $_SERVER['DOCUMENT_ROOT'] . $path . "/" . $fichier;
            if (!move_uploaded_file($_FILES['photo']['tmp_name'], $dossier)) {
                //echo "fail 1";
            } else {
                $path = $path . "/" . $fichier;
                $sql = "UPDATE users set photo='$path' WHERE id=" . $last_id;
                if (mysqli_query($conn, $sql)) {
                    $sqlEtudiant = "INSERT INTO etudiant (id_user, ancienne_etablissement) VALUES($last_id, '$ancienne_etablissement')";
                    if (mysqli_query($conn, $sqlEtudiant)) {
                        $idEtud = mysqli_insert_id($conn);
                        $sqlGroupe = "INSERT INTO groupe_etudiant (id_etudiant, id_groupe) VALUES($idEtud, $idGroupe)";
                        if (mysqli_query($conn, $sqlGroupe)) {
                            header("Location: listEtudiantScol.php");
                        } else {
                            //echo "fail 4";
                        }
                    } else {
                        //echo "fail 3";
                    }
                } else {
                    //echo "fail 2";
                }
            }
        } else {
            //echo "Erreur d'inseration : " . $sqlUser . "<br>" . mysqli_error($conn);
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
                            <h3 class="pull-left" style="color: #0d6efd;">Ajouter un étudiant</h3>
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
                            <label>Ancienne établissement :</label>
                            <input type="text" name="ancienne_etablissement" class="form-control <?php echo (!empty($ancienne_etablissementErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $ancienne_etablissement; ?>">
                            <span class="invalid-feedback"><?php echo $ancienne_etablissementErr; ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
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
                        <div class="form-group col-md-8">
                            <label>Photo :</label>
                            <input type="file" name="photo" class="form-control <?php echo (!empty($photoErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $photo; ?>">
                            <span class="invalid-feedback"><?php echo $photoErr; ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Adresse :</label>
                            <input type="text" name="adresse" class="form-control <?php echo (!empty($adresseErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $adresse; ?>">
                            <span class="invalid-feedback"><?php echo $adresseErr; ?></span>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-10">
                        <h4 class="pull-left" style="color: #0d6efd;">Affectation du groupe</h4>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Filière :</label>
                            <select name="idSpecialite" id="idSpecialite" class="form-control <?php echo (!empty($idSpecialiteErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $idSpecialite; ?>">
                                <option value="">Sélectionner une filière</option>
                                <?php
                                while ($res = mysqli_fetch_array($resSpecialite, MYSQLI_BOTH)) {
                                    echo "<option value='" . $res['id'] . "'";
                                    echo $idSpecialite == $res['id'] ? "selected='selected'" : "";
                                    echo " > " . $res['libelle'] . "</option>";
                                } ?>
                            </select>
                            <span class="invalid-feedback"><?php echo $idSpecialiteErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Niveau :</label>
                            <select name="idBranche" id="idBranche" class="form-control <?php echo (!empty($idBrancheErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $idBranche; ?>">
                                <option value="">Sélectionner un niveau</option>
                                <?php
                                while ($res = mysqli_fetch_array($resBranche, MYSQLI_BOTH)) {
                                    echo "<option value='" . $res['id'] . "'";
                                    echo $idBranche == $res['id'] ? "selected='selected'" : "";
                                    echo " > " . $res['libelle'] . "</option>";
                                } ?>
                            </select>
                            <span class="invalid-feedback"><?php echo $idBrancheErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Groupe :</label>
                            <select name="idGroupe" id="idGroupe" class="form-control <?php echo (!empty($idGroupeErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $idGroupe; ?>">
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
                            <input type="button" value="Annuler" class="btn btn-danger" onclick="window.location='listEtudiantScol.php';">
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