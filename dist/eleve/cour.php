<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['pseudo'];
$profile = $_SESSION['type'];
$nom = $_SESSION['nom'];
$full_name = $_SESSION['full_name'];
$idUser = $_SESSION['idUser'];
$sqlCour = "SELECT c.*, CONCAT(u.prenom, ' ', u.nom) as prof, m.libelle as module FROM cours c
	join module m on m.id = c.id_module
    join `user` u on u.ID_user = c.id_formateur
    join `student_groupe` sg on sg.id_group = c.id_groupe and sg.id_student=".$idUser." order by id desc";
?>

<html>

<head>
	<title>Cour</title>
	<link href="../css/cssmodifier.css" rel="stylesheet" type="text/css" title="TITRE" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div id='entete'><?php include("../header/head.php"); ?></div>
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="mt-5 mb-3 clearfix">
						<h2 class="pull-left">Liste des cours</h2>
					</div>
					<?php

					if ($result =  mysqli_query($conn, $sqlCour)) {
						if (mysqli_num_rows($result) > 0) {
							echo '<table class="table table-bordered table-striped">';
							echo "<thead>";
							echo "<tr>";
							echo "<th>Cour</th>";
                            echo "<th>Professeur</th>";
							echo "<th>Module</th>";
							echo "<th>Format</th>";
							echo "<th>Durée</th>";
							echo "<th>Nombre de chapitre</th>";
							echo "<th>Support</th>";
							echo "</tr>";
							echo "</thead>";
							echo "<tbody>";
							while ($row = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>" . $row['lib'] . "</td>";
                                echo "<td>" . $row['prof'] . "</td>";
								echo "<td>" . $row['module'] . "</td>";
								echo "<td>" . $row['format'] . "</td>";
								echo "<td>" . $row['duree'] . "H</td>";
								echo "<td>" . $row['nbr_chap'] . "</td>";
								echo "<td><a href='" . $row['supp'] . "' download='" . $row['name_support'] . "'>" . $row['name_support'] . "</a></td>";
								echo "</tr>";
							}
							echo "</tbody>";
							echo "</table>";
							mysqli_free_result($result);
						} else {
							//echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
						}
					} else {
						//echo "Oops! Something went wrong. Please try again later.";
					}
					?>
				</div>
			</div>
		</div>
	</div>

</body>

</html>