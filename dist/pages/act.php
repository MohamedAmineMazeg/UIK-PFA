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
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <div class="container-fluid cont">
    <?php include('../header/head.php'); ?>
    <h3 class="text-center m-5 p-5">Actualité</h3>
    <div class="col-sm mb-5">

      <div class="row justify-content-evenly mt-5 " data-aos="fade-in">

        <div class="col-sm-4" data-aos="fade-right">
          <div class="card crd">
            <img class="card-img-top crd-img " src="../../img/uik-act1.jpg" alt="">
            <div class="card-body ">
              <h3 class="card-text" style="font-size:1.5rem;">Signature of a new partnership with
                Pinnacle Teaching Solutions and UIK.
              </h3>
              <p class="card-text crd-text">13.09.2021</p>
              <div class="col crd-btn">
                <button class="btn-outline-secondary btn btn2" data-bs-toggle="modal" data-bs-target="#mod">voir tout</button>
              </div>
              <div class="modal" id="mod" tabindex="-1" aria-labelledby="mod-titre" aria-hidden="true">
                <div class="modal-dialog modal-xl  mod-body">
                  <div class="modal-content mod-in-body">
                    <div class="modal-header mod-head">
                      <h5 class="modal-title mod-title text-primary" id="mod-titre">Signature of a new partnership with
                        Pinnacle Teaching Solutions and UIK.
                      </h5>
                      <button type="button" class="btn-close mod-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body justify-content-center text-center">
                      <img src="../../img/uik-act2.png" class="img-fluid mod-img ">
                      <p class="mod-text text-start">Parce que nous nous soucions de la qualité de l'expérience d'apprentissage et parce que nous pensons que la langue anglaise est très importante pour réussir aujourd'hui, c'est avec un grand plaisir que l'Université Ibn Khaldoun annonce la signature d'un nouveau partenariat avec Pinnacle Teaching Solutions. Nous sommes heureux d'accueillir nos nouveaux professeurs américains qui sont déjà devenus membres de la famille UIK.
                        Félicitations pour votre prochain projet avec Pinnacle Teaching Solutions.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4" data-aos="fade-left">
          <div class="card crd">
            <img class="card-img-top crd-img" src="../../img/body-act3.png" alt="">
            <div class="card-body ">
              <h3 class="card-text crd-text2" style="font-size:1.5rem;">Département architecture II Info day et
                choix des Hubs</h3>
              <p class="card-text crd-text">17.06.2021</p>
              <div class="col crd-btn">
                <button class="btn-outline-secondary btn btn2" data-bs-toggle="modal" data-bs-target="#mod">voir tout</button>
              </div>
              <div class="modal" id="mod" tabindex="-1" aria-labelledby="mod-titre" aria-hidden="true">
                <div class="modal-dialog modal-xl  mod-body">
                  <div class="modal-content mod-in-body">
                    <div class="modal-header mod-head">
                      <h5 class="modal-title mod-title text-primary" id="mod-titre">Département architecture II <br>Info day et
                        choix des Hubs pour les étudiant(e)s de
                        la 5e année architecture.</h5>
                      <button type="button" class="btn-close mod-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                      <img src="../../img/body-act3.png" class="img-fluid mod-img">
                      <p class="mod-text">Parce que nous nous soucions de la qualité de l'expérience d'apprentissage et parce que nous pensons que la langue anglaise est très importante pour réussir aujourd'hui, c'est avec un grand plaisir que l'Université Ibn Khaldoun annonce la signature d'un nouveau partenariat avec Pinnacle Teaching Solutions. Nous sommes heureux d'accueillir nos nouveaux professeurs américains qui sont déjà devenus membres de la famille UIK.
                        Félicitations pour votre prochain projet avec Pinnacle Teaching Solutions.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-evenly mt-5 ">

        <div class="col-sm-4" data-aos="fade-right">
          <div class="card crd">
            <img class="card-img-top crd-img " src="../../img/body-act2.png" alt="">
            <div class="card-body ">
              <h3 class="card-text" style="font-size:1.5rem;">Une bonne nouvelle : Université Laval reprend la mobilité Internationnale!
              </h3>
              <p class="card-text crd-text">13.09.2021</p>
              <div class="col crd-btn">
                <button class="btn-outline-secondary btn btn2" data-bs-toggle="modal" data-bs-target="#mod">voir tout</button>
              </div>
              <div class="modal" id="mod" tabindex="-1" aria-labelledby="mod-titre" aria-hidden="true">
                <div class="modal-dialog modal-xl  mod-body">
                  <div class="modal-content mod-in-body">
                    <div class="modal-header mod-head">
                      <h5 class="modal-title mod-title text-primary" id="mod-titre">Une bonne nouvelle : Université Laval reprend la mobilité Internationnale!
                      </h5>
                      <button type="button" class="btn-close mod-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                      <img src="../../img/Screenshot2021-12-25102619.png" class="img-fluid mod-img">
                      <p class="mod-text">Parce que nous nous soucions de la qualité de l'expérience d'apprentissage et parce que nous pensons que la langue anglaise est très importante pour réussir aujourd'hui, c'est avec un grand plaisir que l'Université Ibn Khaldoun annonce la signature d'un nouveau partenariat avec Pinnacle Teaching Solutions. Nous sommes heureux d'accueillir nos nouveaux professeurs américains qui sont déjà devenus membres de la famille UIK.
                        Félicitations pour votre prochain projet avec Pinnacle Teaching Solutions.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4" data-aos="fade-left">
          <div class="card crd">
            <img class="card-img-top crd-img " src="../../img/body-act1.png" alt="">
            <div class="card-body ">
              <h3 class="card-text " style="font-size:1.5rem;">Séminaire analyse et interprétation du paysage architecturale de Beni M'tir</h3>
              <p class="card-text crd-text">17.06.2021</p>
              <div class="col crd-btn">
                <button class="btn-outline-secondary btn btn2" data-bs-toggle="modal" data-bs-target="#mod">voir tout</button>
              </div>
              <div class="modal" id="mod" tabindex="-1" aria-labelledby="mod-titre" aria-hidden="true">
                <div class="modal-dialog modal-xl mod-body">
                  <div class="modal-content mod-in-body">
                    <div class="modal-header mod-head">
                      <h5 class="modal-title mod-title text-primary" id="mod-titre">SIGNATURE OF A NEW PARTNERSHIP WITH PINNACLE TEACHING SOLUTIONS AND UIK</h5>

                    </div>
                    <button type="button" class="btn-close mod-close m-5" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body ">
                      <img src="../../img/uik-act2.png" class="img-fluid mod-img">
                      <p class="mod-text">Parce que nous nous soucions de la qualité de l'expérience d'apprentissage et parce que nous pensons que la langue anglaise est très importante pour réussir aujourd'hui, c'est avec un grand plaisir que l'Université Ibn Khaldoun annonce la signature d'un nouveau partenariat avec Pinnacle Teaching Solutions. Nous sommes heureux d'accueillir nos nouveaux professeurs américains qui sont déjà devenus membres de la famille UIK.
                        Félicitations pour votre prochain projet avec Pinnacle Teaching Solutions.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <?php include('../header/footer.php'); ?>
  </div>
  <script src="../js/main2.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>