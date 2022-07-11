<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <?php
  session_start();
  if (isset($_SESSION['nom'])) {
    include("header/head.php");
  } else {
  ?>
    <html>
    <img src="photo/logoFinalUIK.png" alt="Logo" style="width:8vw;height:8vh;margin:10px 10px 0 0;" />
    <h2>vous etes membre?</h2><a href="login.php">connectez-vous</a><br>
    <html>
  <?php
  }
  ?>
</body>

</html>