<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['pseudo'];
$profile = $_SESSION['type'];
$nom = $_SESSION['nom'];
$full_name = $_SESSION['full_name'];

$sqlFormation = "SELECT f.*, concat(u.prenom, ' ', u.nom) as prof FROM uik.formations f  join `user` u on u.ID_user = f.id_prof  order by f.id desc";
?>

<html>

<head>
	<title>Cour</title>
	<link href="../css/cssmodifier.css" rel="stylesheet" type="text/css" title="TITRE" />
	<title>Utilisateur</title>
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
						<h2 class="pull-left">Liste des formations</h2>
					</div>
					<?php

					if ($result =  mysqli_query($conn, $sqlFormation)) {
						if (mysqli_num_rows($result) > 0) {
							echo '<table class="table table-bordered table-striped">';
							echo "<thead>";
							echo "<tr>";
							echo "<th>Formation</th>";
                            echo "<th>Professeur</th>";
							echo "<th>Durée</th>";
                            echo "<th>Nombre de place</th>";
							echo "<th>Date début</th>";
                            echo "<th>Date fin</th>";
							echo "<th>Action</th>";
							echo "</tr>";
							echo "</thead>";
							echo "<tbody>";
							while ($row = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>" . $row['libelle'] . "</td>";
                                echo "<td>" . $row['prof'] . "</td>";
								echo "<td>" . $row['duree'] . "h</td>";
								echo "<td>" . $row['nrb_place'] . "</td>";
								echo "<td>" . date("d-m-Y", strtotime($row["dt_debut"])) . "</td>";
                                echo "<td>" . date("d-m-Y", strtotime($row["dt_fin"])) . "</td>";
								echo "<td>";
								echo '<a href="#" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-pencil">  </span></a>'; //?id=' . $row['ID'] . '
								echo '<a href="#" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
								echo "</td>";
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