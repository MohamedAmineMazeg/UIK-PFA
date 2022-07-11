<?php
include("../config.php");
session_start(); // démarrer une session
$login = $_SESSION['pseudo'];
$profile = $_SESSION['type'];
$nom = $_SESSION['nom'];
$full_name = $_SESSION['full_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div id='entete'><?php include("../header/head.php"); ?></div>
  <hr>
  <a href="compte.php">retour</a>
  <h1>modifier un compte</h1>
  <h3>chercher le compte a modifier<h3>
      <form method="post">
        <input type="text" name="user" placeholder="search">
        <input type="submit" name="submit" value="rechercher">
      </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
  $user = $_POST['user'];
  $req = "SELECT * FROM user WHERE pseudo='$user'";
  $res = mysqli_query($conn, $req); ?>
  <table border='2'>
    <TH>pseudo</TH>
    <form method="post">
      <?php
      while ($tab = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $_SESSION['user1'] = $tab['pseudo'];
        $_SESSION['nom1'] = $tab['nom'];
        $_SESSION['prenom1'] = $tab['prenom'];
        $_SESSION['email1'] = $tab['email'];
        $_SESSION['photo1'] = $tab['photo'];
        $_SESSION['mdp1'] = $tab['mdp'];
      ?>
        <tr>
          <td><?php echo $_SESSION['user1']; ?></td>
          <td><input type="submit" name="modif" value="modifier"></td>
          <td><input type="submit" name="suprim" value="suprimmer"></td>
        <tr>
        <?php
      }
        ?>
  </table>

<?php
  if (isset($_POST['modif'])) {
    header('Location:modifier.php');
  } else if (isset($_POST['suprim'])) {
    $req = "DELETE FROM user where pseudo=$user";
    $res = mysqli_query($conn, $req);
    echo 'compte suprimer avec succee';
  }
}

?>