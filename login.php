<!--<form action="session.php" method="post">
  <fieldset>
    <legend>Login</legend>
    <label for="pseudo">username</label>
    <input type="text" name="pseudo" required>
    <label for="pass">mot de pass</label>
    <input type="password" name="pass" required>
    <input type="submit" name="valider" value="connexion"><br>
  </fieldset>
</form>-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="dist/css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>UIK</title>
  
</head>
<body>
<div class="container-fluid bg">
  <div class="row text-center  justify-content-center justify-content-around ">
  <div class="login-form col-md-4  text-center">
    <h3 class="text-light fw-bold bienvenue pt-4 pb-4">Bienvenue</h3>
  <form action="session.php"class="form-group d-flex flex-column px-5" method="post">
    <input type="text" name="pseudo" class=" form-text donnee form-control "placeholder="Nom d'utilisateur" required>
    <input type="password" name="pass" class="form-text  form-control" placeholder="Mot de passe"required>
    <a href="#" class="donnee text-start ms-2 text-muted">Mot de passe oublié?</a>
    <input type="submit" name="valider" class="btn btn-login mb-5" value="Connexion"><br>
  </fieldset>
</form>
  </div>
  </div>
</div>
</body>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>