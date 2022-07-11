<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

$nom = $prenom = $email = $photo = $num_telephone = $adresse = $dt_naissance = $specialite = $diplome = $dt_diplome = $universite = $login = $lieu = $idEnsg = "";
$nomErr = $prenomErr = $emailErr = $photoErr = $num_telephoneErr = $adresseErr = $dt_naissanceErr = $specialiteErr = $diplomeErr = $dt_diplomeErr = $universiteErr = $loginErr = $lieuErr = "";

$id =  trim($_GET["id"]);
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
        $email = $inputEmail;
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
    $inputUniversite = stripslashes($inputUniversite);
    if (empty($inputUniversite)) {
        $universiteErr = "Parcour est obligatoire.";
    } else {
        $universite = $inputUniversite;
    }

    $inputLogin = trim($_POST["login"]);
    if (empty($inputLogin)) {
        $loginErr = "Login est obligatoire.";
    } else {
        $login = $inputLogin;
    }

    if (
        !empty($inputNom) && !empty($inputPrenom) && !empty($inputEmail) && !empty($inputNumTelephone) && !empty($inputAdresse) && !empty($inputDtNaissance)
        && !empty($inputSpecialite) && !empty($inputLieu) && !empty($inputUniversite) && !empty($inputLogin)
    ) {

        $sqlPhoto = "";
        $inputSupport = basename($_FILES['photo']['name']);
        if (!empty($inputSupport)) {
            $fichier = basename($_FILES['photo']['name']);
            $path = "/UIK/photo/prof/" . $id;

            $dossier = $_SERVER['DOCUMENT_ROOT'] . $path . "/" . $fichier;
            if (!move_uploaded_file($_FILES['photo']['tmp_name'], $dossier)) {
                echo "fail";
            }
            $path = $path . "/" . $fichier;
            $sqlPhoto = ", photo='$path' ";
        }
        $sql = "UPDATE users set nom='$nom', prenom='$prenom', num_telephone=$num_telephone, adresse='$adresse', dt_naissance='$dt_naissance', 
                    email='$email', login='$login' " . $sqlPhoto . "  
                    WHERE id=" . $idUser;
        if (mysqli_query($conn, $sql)) {
            $sql = "UPDATE enseignant SET specialite='$specialite', universite='$universite', lieu='$lieu' WHERE id=(select id from enseignant where id_users=$idUser)";
            if (mysqli_query($conn, $sql)) {
                header("Location: profileProf.php");
            } else {
                echo "Erreur de mise à jour : " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Erreur de mise à jour : " . $sql . "<br>" . mysqli_error($conn);
        }
    }
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        if ($result =  mysqli_query($conn, "SELECT * FROM v_enseignant WHERE id_user=" . $id)) {
            while ($row = mysqli_fetch_array($result)) {
                $nom = $row['nom'];
                $prenom = $row['prenom'];
                $email = $row['email'];
                $num_telephone = $row['num_telephone'];
                //$photo = $row['photo'];
                $adresse = $row['adresse'];
                $dt_naissance = $row['dt_naissance'];
                $specialite = $row['specialite'];
                $universite = $row['universite'];
                $login = $row['login'];
                $lieu = $row['lieu'];
                $idEnsg = $row['id_ensigant'];
            }
        }
    }
}
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
                            <h3 class="pull-left" style="color: #0d6efd;">Edit profile</h3>
                        </div>
                    </div>
                    <hr>
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
                            <label>Lieu :</label>
                            <input type="text" name="lieu" class="form-control <?php echo (!empty($lieuErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $lieu; ?>">
                            <span class="invalid-feedback"><?php echo $lieuErr; ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Adresse :</label>
                            <input type="text" name="adresse" class="form-control <?php echo (!empty($adresseErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $adresse; ?>">
                            <span class="invalid-feedback"><?php echo $adresseErr; ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Email :</label>
                            <input type="email" name="email" class="form-control <?php echo (!empty($emailErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $emailErr; ?></span>
                        </div>
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
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Login :</label>
                            <input type="text" name="login" class="form-control <?php echo (!empty($loginErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $login; ?>">
                            <span class="invalid-feedback"><?php echo $loginErr; ?></span>
                        </div>
                        <div class="form-group col-md-8">
                            <label>Photo :</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="pull-left" style="color: #0d6efd;">Liste des experiences</h3>
                        </div>
                        <hr>
                        <div class="form-group" align="right" style="padding-bottom: 1%;">
                            <a href="ajoutExperience.php?id=<?php echo $id ?>" class="btn btn-success"><i class="fa fa-plus"></i> Experience</a>
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
                                    <th>Experience</th>
                                    <th>Nombre d'experience</th>
                                    <th style='width: 5%;'></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result =  mysqli_query($conn, "select e.* from experience e  
                        join enseignant e2 on e2.id = e.id_enseignant and e2.id_users =$idUser order by id desc")) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            $dt = "";
                                            if (!empty($row['dt_chaptire'])) {
                                                $dt = date("d/m/Y", strtotime($row['dt_chaptire']));
                                            }
                                            echo "<tr>";
                                            echo "<td>" . $row['libelle'] . "</td>";
                                            echo "<td>" . $row['experience'] . "</td>";
                                            echo "<td>";
                                            echo '<a href="editExperience.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil-alt" style="color: #0d6efd;"></span>  </a>';
                                            echo '<a href="deleteExperience.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash" style="color: #0d6efd;"></span></a>';
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
            <br><br>
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-md-10"></div>
                        <div class="form-group col-md-2">
                            <input type="button" value="Annuler" class="btn btn-danger" onclick="window.location='profileProf.php';">
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