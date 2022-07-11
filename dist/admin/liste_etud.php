<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['pseudo'];
$profile = $_SESSION['type'];
$nom = $_SESSION['nom'];
$full_name = $_SESSION['full_name'];
?>

<html>

<head>
	<link href="../css/cssmodifier.css" rel="stylesheet" type="text/css" title="TITRE" />
	<title>Utilisateur</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div id='entete'><?php include("../header/head.php"); ?></div>
	<!-- 
	<form action="" method="post">
		<div class="panel panel-default" style="margin-left: 15px; margin-right: 15px;">
			<div class="panel-heading">Rechercher utilisateur</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
						<label>Nom</label>
						<input type="text" name="nom" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Prenom</label>
						<input type="text" name="prenom" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Login</label>
						<input type="text" name="login" class="form-control">
					</div>

				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Role</label>
						<input type="text" name="role" class="form-control">
					</div>
					<div class="col-md-3"></div>
					<div class="form-group col-md-1">
						<label> </label>
						<input type="submit" class="btn btn-primary" value="Rechercher">

					</div>
				</div>
			</div>
		</div>
	</form>
-->

	<?php
	/*
	if (isset($_POST['search'])) {
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$role = $_POST['role'];
		$clause = "";
		// search in all table columns
		// using concat mysql function
		//if ($nom != null)
		//	$clause = $clause . " and nom='" . $nom . "'";
		$query = "SELECT * FROM 'user' WHERE 1=1 " . $clause;
		$result = filterTable($query);
	} else {
		$query = "SELECT * FROM 'user'";
		$result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "", "uik");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}
	*/
	?>

	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="mt-5 mb-3 clearfix">
						<h2 class="pull-left">Liste des utilisateur</h2>
						<a href="ajoutProf.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Professeur</a>
						&nbsp;&nbsp;
						<a href="ajoutEleve.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Etudiant</a>
					</div>
					<?php

					if ($result =  mysqli_query($conn, " SELECT * FROM user order by ID_user desc")) {
						if (mysqli_num_rows($result) > 0) {
							echo '<table class="table table-bordered table-striped">';
							echo "<thead>";
							echo "<tr>";
							echo "<th>Prenom</th>";
							echo "<th>Nom</th>";
							echo "<th>Login</th>";
							echo "<th>Role</th>";
							echo "<th>Email</th>";
							echo "<th>Photo</th>";
							echo "<th>Action</th>";
							echo "</tr>";
							echo "</thead>";
							echo "<tbody>";
							while ($row = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>" . $row['prenom'] . "</td>";
								echo "<td>" . $row['nom'] . "</td>";
								echo "<td>" . $row['pseudo'] . "</td>";
								echo "<td>" . $row['role'] . "</td>";
								echo "<td>" . $row['email'] . "</td>";
								echo "<td> <img src='" . $row['photo'] . "' width='50' height='50'> </td>";
								echo "<td>";
								echo '<a href="modifier.php?id=' . $row['ID_user'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-pencil">  </span></a>';
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

	<div id="pied">
	</div>

</body>

</html>