<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];
$prof = "";
if ($result =  mysqli_query($conn, "select * from v_enseignant where id_user=" . $idUser)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $prof = $row;
        }
    }
}

$sqlCour = "select c.libelle from cour c
join semestre s on s.id = c.id_semester and s.actif = '1'
join annee_scolaire as2 ON as2.id = c.id_annee_scolaire and as2.actif = '1'
join enseignant e on e.id = c.id_enseignant 
join users u on u.id = e.id_users 
where u.id=" . $idUser;

$sqlFilieres  = "select distinct(s.id), s.libelle from specialite s
join branche b on b.id_specialite = s.id 
join groupe g on g.id_branche = b.id
join annee_scolaire as2 on as2.id = g.id_annee_scol and as2.actif = '1'
join groupe_enseignant ge on ge.id_groupe = g.id 
join enseignant e on ge.id_enseignant = e.id 
join users u on u.id = e.id_users 
where u.id =" . $idUser;
$resFilieres = mysqli_query($conn, $sqlFilieres);

$sqlBranche = "select * from branche where id is null";
$resBranche = mysqli_query($conn, $sqlBranche);

$sqlGroupe = "select * from groupe where id is null";
$resGroupe = mysqli_query($conn, $sqlGroupe);

$sqlEtudiant = "select * from users where id is null";
$resEtudiant = mysqli_query($conn, $sqlEtudiant);

$idGroupe = $idFiliere = $idBranche = $idEtudiant = $sujet = "";
$idGroupeErr = $idFiliereErr = $idBrancheErr = $idEtudiantErr = $sujet = "";

$sqlExperience = "SELECT * FROM experience where id_enseignant=" . $prof['id_ensigant'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputSujet = trim($_POST["sujet"]);
    if (empty($inputSujet)) {
        $sujetErr = "Sujet est obligatoire.";
    } else {
        $sujet = $inputSujet;
    }

    $inputFiliere = trim($_POST["idFiliere"]);
    if (empty($inputFiliere)) {
        $idFiliereErr = "Filière est obligatoire.";
    } else {
        $idFiliere = $inputFiliere;
    }

    $inputBranche = trim($_POST["idBranche"]);
    if (empty($inputBranche)) {
        $idBrancheErr = "Niveau est obligatoire.";
    } else {
        $idBranche = $inputBranche;
    }

    $inputGroupe = trim($_POST["idGroupe"]);
    if (empty($inputGroupe)) {
        $idGroupeErr = "Groupe est obligatoire.";
    } else {
        $idGroupe = $inputGroupe;
    }

    $inputEtudiant = trim($_POST["idEtudiant"]);
    if (empty($inputGroupe)) {
        $idEtudiantErr = "Etudiant est obligatoire.";
    } else {
        $idEtudiant = $inputEtudiant;
    }

    if (!empty($inputSujet) && !empty($inputFiliere) && !empty($inputBranche) && !empty($inputGroupe) && !empty($inputEtudiant)) {

        $idGroupeEtud = $idGroupEng = "";

        if ($result =  mysqli_query($conn, "SELECT ge.id FROM groupe_enseignant ge join enseignant e on e.id = ge.id_enseignant and e.id_users =" . $idUser . " where ge.id_groupe =" . $idGroupe)) {
            while ($row = mysqli_fetch_array($result)) {
                $idGroupEng = $row['id'];
            }
        }

        if ($result =  mysqli_query($conn, "SELECT ge.id FROM groupe_etudiant ge join etudiant e on e.id = ge.id_etudiant where ge.id_groupe =" . $idGroupe)) {
            while ($row = mysqli_fetch_array($result)) {
                $idGroupeEtud = $row['id'];
            }
        }

        $sql = "INSERT INTO commentaire (id_groupe_etud, id_groupe_eng, commentaire, id_user, dt_commentaire) 
        VALUES($idGroupeEtud, $idGroupEng, '$sujet', $idUser, now())";

        if (mysqli_query($conn, $sql)) {
            header("Location: profileProf.php");
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
    <title>Profile</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .select {
            color: white;
            background-color: #0f41ab;
        }
    </style>
</head>

<body>
    <?php include("../header/head.php"); ?>

    <main>
        <div class="row mt-5 categ">
            <h4 class="p-4"><b>Mon profile</b></h4>
            <br>
        </div>
        <div class="row" style="padding-left: 2%;">
            <div class="row categ p-0 m-0 justify-content-center justify-content-around">
                <div class="col-md-6 crd1 m-0 p-0">
                    <div class=" card crd_body">
                        <div class="card-body">
                            <h5 class="card-title">Fiche enseignant
                                <a href="editProfileProf.php?id=<?php echo $idUser ?>"><span style="float:right;"><i class="fa fa-cog" style="color: black;"></i></span></a>
                            </h5>
                            <p class="card-text">
                            <div class="row">
                                <div class="col-md-4">
                                    <?php echo '<img src="' . $prof['photo'] . '" width="200" height="200">'; ?>
                                </div>
                                <div class="col-md-8">
                                    <?php
                                    echo '<p style="font-size: 20px; color: #0f41ab;"><b>' . $prof['prenom'] . ' ' . $prof['nom'] . '</b></p>';
                                    echo '<p>Date de naissance : ' . date("d/m/Y", strtotime($prof['dt_naissance'])) . '</p>';
                                    echo '<p>Lieu : ' . $prof['lieu'] . '</p>';
                                    echo '<p>Parcours : ' . $prof['universite'] . '</p>';
                                    echo '<p>Boulot : ' . $prof['specialite'] . '</p>';
                                    ?>
                                </div>
                            </div>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-1 crd1 m-0 p-0">
                </div>
                <div class="col-md-4 crd1 m-0 p-0">
                    <div class="card crd_body">
                        <div class="card-body">
                            <h5 class="card-title p-1">Contact
                                <a href="editProfileProf.php?id=<?php echo $idUser ?>"><span style="float:right;"><i class="fa fa-cog" style="color: black;"></i></span></a>
                            </h5>
                            <p class="card-text"><i class="fa fa-phone" style="color: #0f41ab;"></i>&nbsp;&nbsp;Téléphone : <?php echo ' ' . $prof['num_telephone']; ?></p>
                            <p class="card-text"><i class="fa fa-envelope" style="color: #0f41ab;"></i>&nbsp;&nbsp;Email : <?php echo ' ' . $prof['email']; ?></p>
                            <p class="card-text"><i class="fa fa-map-marker-alt" style="color: #0f41ab;"></i>&nbsp;&nbsp;Adresse : <?php echo ' ' . $prof['adresse']; ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <br><br>

        <div class="row" style="padding-left: 2%;">
            <div class="col-md-5">
                <div class="card crd_body">
                    <div class="card-body">
                        <h5 class="card-title p-1">Expérience</h5>
                        <?php
                        if ($result =  mysqli_query($conn, $sqlExperience)) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo '<p class="p-1"><b>' . $row['experience'] . "ans</b> : " . $row['libelle'] . '</p>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-1 crd1 m-0 p-0">
            </div>
            <div class="col-md-6">
                <div class="col-sm-12 crd1 m-0 p-0">
                    <div class=" card crd_body" style="background-color: #0f41ab;">
                        <div class="card-body">
                            <h4 class="card-title"><b style="color: white;">Contactez l'étudiant</b></h4>
                            <form method="post">
                                <div class="row form-group col-md-12">
                                    <label style="color: white;">Filière :</label>
                                    <select name="idFiliere" id="idFiliereProfile" class="form-control select <?php echo (!empty($idFiliereErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $idFiliere; ?>">
                                        <option value="">Sélectionner une filière</option>
                                        <?php
                                        while ($res = mysqli_fetch_array($resFilieres, MYSQLI_BOTH)) {
                                            echo "<option value='" . $res['id'] . "'>" . $res['libelle'] . "</option>";
                                        } ?>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $idFiliereErr; ?></span>
                                </div>

                                <div class="row form-group col-md-12">
                                    <label style="color: white;">Niveau :</label>
                                    <select name="idBranche" id="idBranche" class="form-control select <?php echo (!empty($idBrancheErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $idBranche; ?>">
                                        <!-- <option value="">Sélectionner un niveau</option> -->
                                        <?php
                                        echo "<option value=''>Sélectionner un niveau</option>";
                                        while ($res = mysqli_fetch_array($resBranche, MYSQLI_BOTH)) {
                                            echo "<option value='" . $res['id'] . "'>" . $res['libelle'] . "</option>";
                                        } ?>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $idBrancheErr; ?></span>
                                </div>

                                <div class="row form-group col-md-12">
                                    <label style="color: white;">Groupe :</label>
                                    <select name="idGroupe" id="idGroupe" class="form-control select <?php echo (!empty($idGroupeErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $idGroupe; ?>">
                                        <option value="">Sélectionner un groupe</option>
                                        <?php
                                        while ($res = mysqli_fetch_array($resGroupe, MYSQLI_BOTH)) {
                                            echo "<option value='" . $res['id'] . "'>" . $res['libelle'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $idGroupeErr; ?></span>
                                </div>

                                <div class="row form-group col-md-12">
                                    <label style="color: white;">Etuidant :</label>
                                    <select name="idEtudiant" id="idEtudiant" class="form-control select <?php echo (!empty($idEtudiantErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $idEtudiant; ?>">
                                        <option value="">Sélectionner un étudiant</option>
                                        <?php
                                        while ($res = mysqli_fetch_array($resGroupe, MYSQLI_BOTH)) {
                                            echo "<option value='" . $res['id'] . "'>" . $res['prenom'] . " " . $res['nom'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $idEtudiantErr; ?></span>
                                </div>

                                <div class="row form-group col-md-12">
                                    <label style="color: white;">Sujet :</label>
                                    <textarea name="sujet" class="form-control select <?php echo (!empty($sujetErr)) ? 'is-invalid' : ''; ?>" rows="2" value="<?php echo $sujet; ?>"></textarea>
                                    <span class="invalid-feedback"><?php echo $sujetErr; ?></span>
                                </div>
                                <br>
                                <p class="text-center"><button type="submit" class="card-text text-center card-btn">Envoyer</button></p>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <br><br>
    <?php include("../header/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/main2.js"></script>
    <script src="../js/search.js"></script>
</body>