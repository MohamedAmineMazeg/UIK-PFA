<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['pseudo'];
$profile = $_SESSION['type'];
$nom = $_SESSION['nom'];
$full_name = $_SESSION['full_name'];

$req = "SELECT * from pending";
$res = mysqli_query($conn, $req);

$donne = mysqli_fetch_assoc($res);

?>
<html>
<?php include('../header/head.php'); ?>
<h1>en attente</h1>
<a href="compte.php">retour</a><br>
<a href="home.php">acceuil</a><br><br>
<table border=2>
  <th>nom</th>
  <th>prenom</th>
  <th>mdp</th>
  <th>pseudo</th>
  <th>photo</th>
  <th>email</th>
  <tr>
    <td><?php echo $donne['nom']; ?></td>
    <td><?php echo $donne['prenom']; ?></td>
    <td><?php echo $donne['mdp']; ?></td>
    <td><?php echo $donne['pseudo']; ?></td>
    <td><?php echo "<img src='$donne[photo]'>"; ?></td>
    <td><?php echo $donne['email']; ?></td>
  </tr>
</table>