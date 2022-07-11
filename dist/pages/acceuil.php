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
  <link rel="stylesheet" href="../css/main.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>UIK</title>

</head>

<body>
  <div class="container-fluid cont-index">
    <?php include('../header/head2.php'); ?>
    <main>

      <div class="row categ">
        <h3 class="p-5 pb-3 fw-bold text-center">Meilleurs cours</h3>
        <div class="col-md categ_menu ">
          <ul class="categ_menu_cat ">
            <li>
              <p href='#' class="m-4" id="tout" style="cursor:pointer;">Toutes les catégorie</p>
            </li>
            <li>
              <p href="#" class="m-4" id="info_btn" style="cursor:pointer;">Informatique</p>
            </li>
            <li>
              <p href='#' class="m-4" id="arch2" style="cursor:pointer;">Architecture</p>
            </li>
            <li>
              <p href='#' class="m-4" id="design2" style="cursor:pointer;">Design</p>
            </li>
            <li>
              <p href='#' class="m-4" id="bis2" style="cursor:pointer;">Business</p>
            </li>
            <li>
              <p href='#' class="m-4" id="law2" style="cursor:pointer;">Droit</p>
            </li>
          </ul>
        </div>
      </div>

      <div class="tout row" id="tout2" data-aos="fade-in">
        <div class="row categ p-0 m-0 justify-content-center justify-content-around">
          <div class="col-md-3 crd1 m-0 p-0">
            <div class="card crd_body">
              <img class="card-img-top" src="../../img/info.png" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Informatique</h4>
                <p class="card-text ">maitrise de développement logiciel en utilisant les différents langages de programmation.</p>
                <p class="text-center"><button class="card-text text-center card-btn">voir plus
                  </button></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 crd1 m-0 p-0">
            <div class="card crd_body ">
              <img class="card-img-top" src="../../img/arch.png" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Architécture</h4>
                <p class="card-text ">Permettre la transmission d'un savoir de qualité en milieu architéctural</p>
                <p class="text-center"><button class="card-text text-center card-btn">voir plus
                  </button></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-0 p-0 crd1">
            <div class="card crd_body ">
              <img class="card-img-top" src="../../img/des.png" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Design</h4>
                <p class="card-text ">Le designer image habille les
                  données leur donne une identité
                  ainsi qu’une forme visuelle.</p>
                <p class="text-center"><button class="card-text text-center card-btn">voir plus
                  </button></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row categ categ2  justify-content-center">
          <div class="col-md-3 crd1 me-5 p-0 ">
            <div class="card crd_body ">
              <img class="card-img-top" src="../../img/buss.png" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Business</h4>
                <p class="card-text ">Poursuivez vos études en licence
                  marketing dans l’une des
                  universités les plus réputées.</p>
                <p class="text-center"><button class="card-text  card-btn">voir plus
                  </button></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 crd1 ms-5 p-0">
            <div class="card crd_body">
              <img class="card-img-top" src="../../img/law.png" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Droit</h4>
                <p class="card-text">Munir les étudiants des connaissances pour exercer les métiers en relation
                  avec le droit.</p>
                <p class="text-center"><button class="card-text text-center card-btn">voir plus
                  </button></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="info row categ_act" id="info2">
        <div class="row categ p-0 m-0 justify-content-center justify-content-around categ_acta">
          <div class="col-md-3 crd1 m-0 p-0">
            <div class="card crd_body">
              <img class="card-img-top" src="../../img/info.png" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Préparatoire Intégré</h4>
                <p class="card-text ">maitrise de développement logiciel en utilisant les différents langages de programmation.</p>
                <p class="text-center"><button class="card-text text-center card-btn">voir plus
                  </button></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 crd1 m-0 p-0">
            <div class="card crd_body ">
              <img class="card-img-top" src="../../img/arch.png" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Licence en business intelligence</h4>
                <p class="card-text ">Permettre la transmission d'un savoir de qualité en milieu architéctural</p>
                <p class="text-center"><button class="card-text text-center card-btn">voir plus
                  </button></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-0 p-0 crd1">
            <div class="card crd_body ">
              <img class="card-img-top" src="../../img/des.png" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Cycle d'ingénieure en informatique</h4>
                <p class="card-text ">Le designer image habille les
                  données leur donne une identité
                  ainsi qu’une forme visuelle.</p>
                <p class="text-center"><button class="card-text text-center card-btn">voir plus
                  </button></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h3 class="text-center fw-bold p-5 mt-5">L'UIK en chiffre</h3>
      <div class="row uik_numbers justify-content-center ">

        <div class="col-md-2 justify-content-center m-5">
          <img src="../../img/+25.png" alt="25">
          <span class="display-2 fw-bold text-center">+25</span>
          <p>Parcours de formation lances
            avec des professionnels du
            métier.</p>
        </div>
        <div class="col-md-2 justify-content-center m-5">
          <img src="../../img/+100.png" alt="+100">
          <span data-target="100" class="display-2 fw-bold text-center">+100</span>
          <p>partenaires recruteurs qui
            ont fait confiance à notre
            pédagogie.</p>
        </div>
        <div class="col-md-2 justify-content-center m-5">
          <img src="../../img/+10000.png" alt="700">
          <span data-target="700" class="display-2 fw-bold text-center">+700</span>
          <p>étudiants par an formés sur
            les technologies les plus
            tendance du marché.</p>
        </div>
      </div>
      <h3 class="text-center fw-bold p-4">Témoignages de nos étudiants</h3>
      <div id="carouselId" class="carousel slide " data-bs-ride="carousel" data-aos="fade-in">
        <div class="carousel-inner" role="listbox" style="overflow:visible;">

          <div class="carousel-item active">
            <div class="row justify-content-center  tem">
              <div class="col-md-4 ">
                <img src="../../img/tem1.png" alt="" class="img-fluid img-tem">
              </div>
              <div class="col-md-4 my-auto ms-5">
                <span class="fw-bold text-light titre">"Une Education Digne de son nom"</span>
                <p class="text-tem text-light">
                  UIK m'a fourni la plate-forme, les outils
                  essentiels et les opportunités pour exceller
                  et réaliser ce que j'ai aujourd'hui.
                  C'est un voyage qui vous met sur un chemin
                  nouveau mais gratifiant. Vraiment une
                  expérience qui change la vie.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="row justify-content-center tem">
              <div class="col-md-4 ">
                <img src="../../img/tem2.png" alt="" class="img-fluid img-tem">
              </div>
              <div class="col-md-4 my-auto ms-5">
                <span class="fw-bold text-light titre">"Une Education Digne de son nom"</span>
                <p class="text-tem text-light">
                  UIK m'a fourni la plate-forme, les outils
                  essentiels et les opportunités pour exceller
                  et réaliser ce que j'ai aujourd'hui.
                  C'est un voyage qui vous met sur un chemin
                  nouveau mais gratifiant. Vraiment une
                  expérience qui change la vie.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-center tem">
              <div class="col-md-4">
                <img src="../../img/tem3.png" alt="" class="img-fluid img-tem">
              </div>
              <div class="col-md-4 my-auto ms-5">
                <span class="fw-bold text-light titre">"Une Education Digne de son nom"</span>
                <p class="text-tem text-light ">
                  UIK m'a fourni la plate-forme, les outils
                  essentiels et les opportunités pour exceller
                  et réaliser ce que j'ai aujourd'hui.
                  C'est un voyage qui vous met sur un chemin
                  nouveau mais gratifiant. Vraiment une
                  expérience qui change la vie.
                </p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="row justify-content-center mt-5 ">
        <h3 class="text-center fw-bold p-5 mt-5">Actualités</h3>
        <div class="col-md-3 m-2">
          <div class="card crd4 crd2 crd3">
            <img class="crd-img card-img-top" src="../../img/body-act1.png" alt="">
            <div class="card-body ">
              <p class="card-text ">03.10.2021</p>
              <p class="card-text crd-text text-wrap" style="margin-bottom:2rem;">Séminaire analyse et
                interprétations du paysage
                architectural de Beni M'tir
              </p>
              <a href="act.html" class="text-primary mt-5 text-nowrap">en savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-md-3  m-2">
          <div class="card crd4 crd2 crd3">
            <img class="card-img-top crd-img " src="../../img/body-act2.png" alt="">
            <div class="card-body ">
              <p class="card-text ">17.09.2021</p>
              <p class="card-text crd-text" style="margin-bottom:2rem;">Une bonne nouvelle :
                notre partenaire Université
                Laval reprend la mobilité
                internationale !
              </p>
              <a href="act.html" class="text-primary mt-5 text-nowrap">en savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 m-2">
          <div class="card crd4 crd2 crd3">
            <img class="card-img-top crd-img " src="../../img/body-act3.png" alt="">
            <div class="card-body ">
              <p class="card-text ">13.09.2021</p>
              <p class="card-text crd-text" style="margin-bottom:2rem;">Département architecture II
                Info day et choix des Hubs
                pour les étudiant(e)s de la 5e
                année architecture
              </p>
              <a href="act.html" class="text-primary mt-5 text-nowrap">en savoir plus</a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center text-center p-5">
          <div class="col-md">
            <button class="btn btn-outline-primary "><a href="act.php" class=" btn btn-outlined-primary">Toutes les nouveauté</a></button>
          </div>
        </div>
      </div>
      <h3 class="text-center fw-bold p-5">Pourquoi l'UIK</h3>
      <div class="row justify-content-center justify-content-around why p-5">
        <div class="col-md-6 my-auto " data-aos="fade-right">
          <span class="fw-bold text-dark titre text-tem2">"Une faculté Digne de son parcours"</span>
          <p class="text-tem2 text-dark fs-5" da>
            L’enseignement à l’UIK repose sur une pédagogie
            active et interactive, fondée sur une très forte
            implication des étudiants dans tous les projets de
            l’université, nous assurons des enseignements à jour
            dans lesquels l’entreprise est très présente afin de
            préparer l’étudiant à la vie active.
          </p>
        </div>
        <div class="col-4" data-aos="fade-left">
          <img src="../../img/pourquoi.png" alt="" class="img-fluid">
        </div>
      </div>
      <h3 class="text-center fw-bold p-5">Professeur du mois</h3>
      <div class="row profs justify-content-center" data-aos="fade-in">
        <div class="col-md-6">
          <p class="textProf text-light">Elle a poursuivi ses études universitaires à la Faculté des sciences économiques
            et Gestion de Sfax (Licence, Master Recherche et Doctorat).<br>
            Elle a enseigné un grand nombre de cours dans divers établissements
            de l'Université de Sfax (FSEGS, IHEC Sfax, FLSHS).<br><br>

            Actuellement, elle est assistante permanente à l'université ibn khaldoun à Tunis.<br>
            Elle répartit statutairement son activité entre l'enseignement supérieur et
            l'enseignement scientifique.<br>
            Des recherches dans le domaine de la finance, en l'occurrence des publications
            dans des revues indexées.</p>

        </div>
        <div class="col-md-4  profNom  ">
          <div class="col-md-3">
            <img src="../../img/raida.png" class="img-fluid">
          </div>
          <div class="col-md-5 my-auto ">
            <span class="fw-bold text-light">Raida ben ATITALLAH</span>
            <p class="fw-normal text-light">Doctor of finance</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center justify-content-around mt-5 contact">
        <div class="col-md-5 p-5 contact-card1 my-auto" data-aos="fade-right">
          <div class="row cnt ">
            <div class="col-md-2 my-auto">
              <img src="../../img/architect.png" class="img-fluid">
            </div>
            <div class="col-md ">
              <span class="fw-bold text-primary">Vous rêvez de devenir architecte?</span>
              <p>Vous découvrirez l’architecture ancienne
                et l’application de ses principes aujourd’hui
                tout en développant un sens...</p>
            </div>
          </div>
          <div class="row cnt">
            <div class="col-md-2">
              <img src="../../img/designer.png" class="img-fluid">
            </div>
            <div class="col-md my-auto ">
              <span class="fw-bold text-primary">Vous rêvez de devenir architecte?</span>
              <p>Vous découvrirez l’architecture ancienne
                et l’application de ses principes aujourd’hui
                tout en développant un sens...</p>
            </div>
          </div>
          <div class="row cnt">
            <div class="col-md-2">
              <img src="../../img/avocat.png" class="img-fluid">
            </div>
            <div class="col-md my-auto ">
              <span class="fw-bold text-primary">Vous rêvez de devenir architecte?</span>
              <p>Vous découvrirez l’architecture ancienne
                et l’application de ses principes aujourd’hui
                tout en développant un sens...</p>
            </div>
          </div>
        </div>
        <div class="col-md-5 p-5  contact-card2 " data-aos="fade-left">
          <p class=" text-light text-center fw-bold mb-5">Contactez-nous</p>
          <form class="">
            <div class="form-group form_group">
              <label class="fw-bold text-light">Nom</label><br>
              <input type="text" class="form-control form-in border-top-0 border-end-0 border-start-0 rounded-0" name="nom" placeholder="nom" required></input>
            </div>
            <div class="form-group form_group">
              <label class="fw-bold text-light">Prénom</label><br>
              <input type="text" class="form-control form-in border-top-0 border-end-0 border-start-0 rounded-0" name="prenom" placeholder="prenom" required></input>
            </div>
            <div class="form-group form_group">
              <label class="fw-bold text-light">Email</label><br>
              <input type="email" class="form-control form-in border-top-0 border-end-0 border-start-0 rounded-0" name="mail" placeholder="Email" required></input>
            </div>
            <div class="form-group form_group">
              <label class="fw-bold text-light mb-3">Sujet</label><br>
              <input type="text-area" class="form-control form-in sujet" name="sujet" required></input>
            </div>
            <input type="submit" value="Contactez-nous" class="btn btn-outline-secondary border-4 cta2 text-light ">
          </form>
        </div>
      </div>

    </main>
    <footer>
      <?php
      include('../header/footer.php');
      include("../header/fléche.php");
      ?>
    </footer>
    <!-- Section: Links  -->
  </div>

</body>
<script src="../js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>