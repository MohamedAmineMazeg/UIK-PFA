<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

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
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="pull-left" style="color: #0d6efd;">Liste année scolaires</h3>
                    </div>
                    <hr>
                    <div class="form-group" align="right" style="padding-bottom: 1%;">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ajoutAnneeScol">
                            <i class="fa fa-plus"></i> Année scolaire
                        </button>
                        <!--<a href="ajoutAnneeSocl.php" class="btn btn-success"><i class="fa fa-plus"></i> Année scolaire</a>-->
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
                                <th style='width: 70%;'>Annee scolaire</th>
                                <th style='width: 10%;'>Actif</th>
                                <th style='width: 10%;'></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result =  mysqli_query($conn, "select * from annee_scolaire")) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td style='display:none;'>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['annee_scolaire'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='actifAnneeScolaire.php?id=" . $row['id'] . "' ";
                                        if ($row['actif'] == 1) {
                                            echo "class='btn btn-success'><i class='fa fa-check'></i>";
                                        } else {
                                            echo "class='btn btn-danger'><i class='fa fa-times'></i>";
                                        }
                                        echo "</a>";
                                        echo "</td>";
                                        echo "<td>";
                                        echo '<a href="#" class="mr-3 editAnneeScol"  title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil-alt" style="color: #0d6efd;"></span>  </a>';
                                        echo '<a href="#" class="mr-3 deleteAnneeScol" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash" style="color: #0d6efd;"></span></a>';
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
    </main>

    <br><br>

    <div class="modal fade" id="ajoutAnneeScol" tabindex="-1" aria-labelledby="mod-titre" aria-hidden="true">
        <div class="modal-dialog modal-lg  mod-body">
            <div class="modal-content mod-in-body">
                <div class="modal-header mod-head">
                    <h5 class="modal-title text-primary" id="mod-titre">Ajouter une année scolaire</h5>
                    <button type="button" class="btn-close mod-close" data-bs-dismiss="ajoutAnneeScol" aria-label="Close"></button>
                </div>
                <form action="ajoutAnneeScol.php" method="POST">
                    <div class="modal-body">
                        <hr>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Année scolaire </label>
                                <input type="text" name="anneeScolaire" class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-8"></div>
                            <div class="form-group col-md-2">
                                <input type="button" value="Annuler" class="btn btn-danger" data-dismiss="modal">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="submit" class="btn btn-success" name="ajoutAnneeScol" value="Enregistrer">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editAnneeScolModal" tabindex="-1" aria-labelledby="mod-titre" aria-hidden="true">
        <div class="modal-dialog modal-lg  mod-body">
            <div class="modal-content mod-in-body">
                <div class="modal-header mod-head">
                    <h5 class="modal-title text-primary" id="mod-titre">Edit l'année scolaire</h5>
                    <button type="button" class="btn-close mod-close" data-dismiss="editAnneeScolModal" aria-label="Close"></button>
                </div>
                <form action="editAnneeScol.php" method="POST">
                    <div class="modal-body">
                        <hr>
                        <input type="hidden" name="id" id="id">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Année scolaire </label>
                                <input type="text" name="anneeScolaire" id="anneeScolaire" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-8"></div>
                            <div class="form-group col-md-2">
                                <input type="button" value="Annuler" class="btn btn-danger" data-dismiss="modal">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="submit" class="btn btn-success" name="editAnneeScol" value="Enregistrer">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteAnneeScolModal" tabindex="-1" aria-labelledby="mod-titre" aria-hidden="true">
        <div class="modal-dialog modal-lg  mod-body">
            <div class="modal-content mod-in-body">
                <div class="modal-header mod-head">
                    <h5 class="modal-title text-primary" id="mod-titre">Supprimer l'année scolaire</h5>
                    <button type="button" class="btn-close mod-close" data-dismiss="deleteAnneeScolModal" aria-label="Close"></button>
                </div>
                <form action="deleteAnneeScol.php" method="POST">
                    <div class="modal-body">
                        <hr>
                        <div class="modal-body">
                            <p>Voulez-vous supprimer l'année scolaire</p>
                            <input type="hidden" name="idDelete" id="idDelete">
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-8"></div>
                            <div class="form-group col-md-2">
                                <input type="button" value="Annuler" class="btn btn-danger" data-dismiss="modal">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="submit" class="btn btn-success" name="deleteAnneeScol" value="Confirmer">
                            </div>
                        </div>
                    </div>
                </form>
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