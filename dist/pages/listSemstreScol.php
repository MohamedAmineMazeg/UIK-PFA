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
                        <h3 class="pull-left" style="color: #0d6efd;">Liste semestres</h3>
                    </div>
                    <hr>
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
                                <th style='width: 40%;'>Libelle</th>
                                <th style='width: 40%;'>Code</th>
                                <!-- <th style='width: 10%;'>Actif</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result =  mysqli_query($conn, "select * from semestre")) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['libelle'] . "</td>";
                                        echo "<td>" . $row['code'] . "</td>";
                                        /*
                                        echo "<td>";
                                        echo "<a href='actifAnneeScolaire.php?id=".$row['id']."' ";
                                        if($row['actif'] == 1) {
                                            echo "class='btn btn-success'><i class='fa fa-check'></i>";
                                        } else {
                                            echo "class='btn btn-danger'><i class='fa fa-times'></i>";
                                        }
                                        echo "</a>";
                                        echo "</td>";
                                        */
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
    <?php include("../header/footer.php"); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/main2.js"></script>
<script src="../js/search.js"></script>

</html>