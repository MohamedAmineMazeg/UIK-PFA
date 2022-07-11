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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <div class="container-fluid faq">
    <?php include('../header/head.php'); ?>
    <div class="row justify-content-around">
      <h3 class="text-center">F.A.Q</h3>
      <div class="row faq_card justify-content-center mx-auto ">

        <div class="col-md-9 faq_item d-flex d-none justify-content-between">
          <p class="my-auto">Est-ce que vos diplômes sont reconnus internationalement ?</p><button class="btn btn-plus" id="plus1">+</button>
        </div>
        <span class="col-md-9 solution solu " id="solu1">
          Le diplôme délivré par l’UIK est un diplôme d’État et par conséquent est reconnu à l’échelle internationale.
          Cependant les critères et les procédures d’admission dans certaines institutions étrangères restent à leur discrétion.</span>
        <div class="col-md-9 faq_item d-flex justify-content-between">
          <p class="my-auto">Existe-t-il plusieurs sessions d’admission ?</p><button class="btn btn-plus" id="plus2">
            <p class="btn-plus-text my-auto">+</p>
          </button>
        </div>
        <span class="col-md-9 solution solu " id="solu2">
          Il n’existe qu’une seule session d’admission en automne (mi-septembre). Les inscriptions se prolongent jusqu’au mois de
          Novembre.</span>

        <div class="col-md-9 faq_item d-flex justify-content-between">
          <p class="my-auto">Comment obtenir une pré-inscription ?</p><button class="btn btn-plus " id="plus3">
            <p class="btn-plus-text my-auto">+</p>
          </button>
        </div>
        <span class="col-md-9 solution solu " id="solu3">
          Il suffit de remplir le formulaire de pré-inscription disponible sur la page d’accueil sous la rubrique « Inscrivez-vous en ligne »</span>

        <div class="col-md-9 faq_item d-flex justify-content-between">
          <p class="my-auto">Existe-t-il une structure d’accueil pour les nouveaux étudiants ?</p><button class="btn btn-plus " id="plus4">
            <p class="btn-plus-text my-auto">+</p>
          </button>
        </div>
        <span class="col-md-9 solution solu " id="solu4">
          A leur demande, les nouveaux étudiants peuvent être accueillis dès leur arrivée à l’aéroport Tunis-Carthage.</span>

        <div class="col-md-9 faq_item d-flex justify-content-between">
          <p class="my-auto">Je rencontre des difficultés pour m’inscrire en ligne, qui contacter?</p><button class="btn btn-plus " id="plus5">
            <p class="btn-plus-text my-auto">+</p>
          </button>
        </div>
        <span class="col-md-9 solution solu " id="solu5">
          Veuillez contacter Mr. Lotfi Cherif au :
          Tél./WhatsApp +216 97 432 463
          Email : info@uik.ens.tn</span>

        <div class="col-md-9 faq_item d-flex justify-content-between">
          <p class="my-auto">Y’a-t-il des activités extrascolaires au sein de l’université ?</p><button class="btn btn-plus " id="plus6"><span class="btn-plus-text my-auto">+</span></button>
        </div>
        <span class="col-md-9 solution solu" id="solu6">
          Tous nos étudiant(e)s sont encouragé(e)s à rejoindre nos associations et clubs au début de l’année.</span>

      </div>
    </div>

    <?php include('../header/footer.php'); ?>
  </div>

</body>
<script src="../js/main2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>