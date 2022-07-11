<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Acceuil</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="main">
    <div class="container-fluid cont-index">
        <header>
            <div class="row nav nav-actif fixed-top" id="nav2">
                <nav class="navbar navbar-expand-md " id="nav">
                    <div class="container-fluid">
                        <a href="acceuilProf.php" class="ms-5"><img src="../../img/logo3.png" class="navbar-brand img-fluid" style="width:6rem;"></a>
                        <form class="d-flex">
                            <input type="search" class="search2 input-group " placeholder="Recherche">
                            <span class="material-icons srch">
                                search
                            </span>
                        </form>
                        <ul class="navbar-nav nav_list">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="Info" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Informatique</a>
                                <div class="dropdown-menu" aria-labelledby="info">
                                    <a href="../../pages2/info/info1.html" class="dropdown-item">Préparatoire Intégré</a>
                                    <a href="#" class="dropdown-item">License business Intelligence</a>
                                    <a href="#" class="dropdown-item">cycle Ingénieur en Informatique</a>
                                </div>
                            </li>
                            <li class="navbar-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="Info" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Architecture</a>
                                <div class="dropdown-menu" aria-labelledby="info">
                                    <a href="#" class="dropdown-item">Diplome nationale d'architecte</a>
                                    <a href="#" class="dropdown-item">Mastére en BIM,Smart city, Smart architecture</a>
                                    <a href="#" class="dropdown-item">cycle Ingénieur en Informatique</a>
                                </div>
                            </li>
                            <li class="navbar-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="Info" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Design</a>
                                <div class="dropdown-menu" aria-labelledby="info">
                                    <a href="#" class="dropdown-item">Licence en design: publicité graphique</a>
                                    <a href="#" class="dropdown-item">Licence en design: Architecture d'intérieure</a>
                                    <a href="#" class="dropdown-item">Mastére en architecture d'intérieure</a>
                                </div>
                            </li>
                            <li class="navbar-item">
                                <a href="business" class="nav-link">business</a>
                            </li>
                            <li class="navbar-item">
                                <a href="droit" class="nav-link">droit </a>
                            </li>
                            <li class="navbar-item">
                                <div id="burger"><span class="menu_btn"><span id="br_btn" class=" material-icons">
                                            menu
                                        </span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 side_menu d-none" id="side_menu">
                        <ul class="">
                            <li class=""><a href="#" class=""><img src="../../img/logo.png" class="w-50"></a></li>
                            <!--
                            <li class=""><span class="material-icons pe-5 text-light">home</span><a href="#" class="text-light">Acceuil</a></li>
                            <li><span class="material-icons text-light pe-5 ">
                                    speaker_notes
                                </span><a href="#" class="text-light">Présentation</a></li>
                            <li><a href="#"><span class="material-icons text-light pe-5">
                                        person
                                    </span></a><a href="#" class="text-light">Acceuil</a></li>
                            <li><span class="material-icons text-light pe-5">
                                    pending_actions
                                </span><a href="#" class="text-light">Profil</a></li>
                            <li><span class="material-icons text-light pe-5">
                                    event
                                </span><a href="#" class="text-light">Axtualité</a></li>
                            <li><span class="material-icons text-light pe-5">
                                    contact_page
                                </span><a href="#" class="text-light">Evénement</a></li>
                            <li><span class="material-icons text-light pe-5">contacts</span>
                                <a href="#" class="text-light fw-normal ">Espace Personnel</a>
                            </li>


                            <li><span class="material-icons text-light pe-5">
                                    date_range
                                </span><a href="#" class="text-light text-light">F.A.Q</a></li>
                            <li><span class="material-icons text-light pe-5">
                                    mark_as_unread
                                </span><a href="#" class="text-light text-light">Calendrier</a></li>
                            <li><span class="material-icons text-light pe-5">
                                    help_outline
                                </span><a href="#" class="text-light">Message</a></li>
                            <li><span class="material-icons text-light pe-5">
                                    help_outline</span><a href="#" class="text-light">Aide</a></li>
                            -->
                            <li><a href="acceuilProf.php"><span class="material-icons">home</span>Acceuil</a></li>
                            <li><a href="acceuilProf.php"><span class="material-icons">home</span>Présentation</a></li>
                            <li><a href="profileProf.php"><span class="material-icons">home</span>Profil</a></li>
                            <li><a href="espacePersonnelProf.php"><span class="material-icons">home</span>Espace personnel</a></li>
                            <li><a href="coursProf.php"><span class="material-icons">home</span>Cours</a></li>
                            <li class="pt-2 mt-5"><span class="material-icons me-2 ms-5  text-light text-end">
                                    logout
                                </span><a href="http://localhost/UIK/deconnexion.php">Se déconnecter</a>
                            </li>


                    </div>
                </nav>
            </div>
            <div class="row nav-white fixed-top" id="nav3">
                <nav class="navbar navbar-expand-md" id="nav4">
                    <div class="container-fluid">
                        <a href="acceuilProf.php" class="ms-5"><img src="../../img/logo2.png" class="navbar-brand img-fluid" style="width:6rem;"></a>
                        <form class="d-flex">
                            <input type="search" class="search input-group " placeholder="Recherche">
                            <span class="material-icons srch">
                                search
                            </span>
                        </form>

                        <ul class="navbar-nav nav_list">
                            <li class="navbar-item">
                                <div id="burger2"><span class="menu_btn"><span id="br_btn2" class=" material-icons">
                                            menu</span></span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 side_menu d-none" id="side_menu2">
                        <ul>
                            <li class=""><a href="#" class=""><img src="../../img/logo.png" class="w-50"></a></li>
                            <!--
                            <li><a href="#"><span class="material-icons">home</span>
                                    <p class="ps-4">Acceuil</p>
                                </a></li>
                            <li><a href="#"><span class="material-icons">
                                        speaker_notes
                                    </span>aide</a></li>
                            <li><a href="#"><span class="material-icons">
                                        person
                                    </span>aide</a></li>
                            <li><a href="#"><span class="material-icons">
                                        pending_actions
                                    </span>aide</a></li>
                            <li><a href="#"><span class="material-icons">
                                        event
                                    </span>aide</a></li>
                            <li><a href="#"><span class="material-icons">
                                        contact_page
                                    </span>aide</a></li>
                            <li><a href="#"><span class="material-icons">
                                        contacts
                                    </span>aide</a></li>
                            <li><a href="#"><span class="material-icons">
                                        date_range
                                    </span>aide</a></li>
                            <li><a href="#"><span class="material-icons">
                                        mark_as_unread
                                    </span>aide</a></li>
                            <li><a href="#"><span class="material-icons">
                                        help_outline
                                    </span>aide</a></li>
                            <li><a href="deconnexion.php"><span class="material-icons">
                                        help_outline
                                    </span>deconnexion</a></li>
-->
                            <li><a href="acceuilProf.php"><span class="material-icons">home</span>Acceuil</a></li>
                            <li><a href="presentation.php"><span class="material-icons">home</span>Présentation</a></li>
                            <li><a href="profileProf.php"><span class="material-icons">home</span>Profil</a></li>
                            <li><a href="espacePersonnelProf.php"><span class="material-icons">home</span>Espace personnel</a></li>
                            <li><a href="coursProf.php"><span class="material-icons">home</span>Cours</a></li>
                            <li class="pt-2 mt-5"><span class="material-icons me-2 ms-5  text-light text-end">
                                    logout
                                </span><a href="http://localhost/UIK/deconnexion.php">Se déconnecter</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>

            <div class="row hero" id="hero">
                <div class="col-md ms-5 head">
                    <p class="text-light my-auto text-head fw-bold">Université Ibn Khaldoun</p>
                    <p class="text-light my-auto fs-5">Nous assurons des enseignement à jour dans lesquels l'entreprise est trés présente afin de préparer l'étudiant à la vie active</p>
                    <button class="btn btn-outline-secondary text-warning mt-5 cta">consulter</button>
                </div>

                <div class="menu_item_exp " id="menu_item_exp">

                </div>
                <div class="col-md">
                    <div class="menu row">


                        <div class="menu_item col-md" id="info">
                            <img src="../../img/informatique.png" class="img-fluid">
                            <a href="#" class="menu_item_link">Informatique</a>
                        </div>

                        <div class="menu_item col-md" id="arch">
                            <a href="#" class="menu_item_link">architecture</a>
                            <img src="../../img/architecture.png" class="img-fluid">
                        </div>
                        <div class="menu_item col-md" id="design">
                            <a href="#" class="menu_item_link">Design</a>
                            <img src="../../img/design.png" class="img-fluid">
                        </div>
                        <div class="menu_item col-md" id="bis">
                            <a href="#" class="menu_item_link">Business</a>
                            <img src="../../img/business.png" class="img-fluid">
                        </div>
                        <div class="menu_item col-md" id="law">
                            <a href="#" class="menu_item_link">Droit</a>
                            <img src="../../img/droit.png" class="img-fluid">
                        </div>
                    </div>
                </div>



            </div>
        </header>
        <main>
            <h2 class="p-5 text-center"><b>Pourquoi l'UIK ?</b></h2>
            <div class="row uik_numbers uik_number justify-content-center">
                <div class="col-md-2 justify-content-center m-5 text-center text-light">
                    <span data-target="300" class=" display-2 fw-bold text-center" id="number">300</span>
                    <p class="num-desc">Enseignants</p>
                </div>
                <div class="col-md-2 justify-content-center m-5 text-center text-light ">
                    <span data-target="700" class=" display-2 fw-bold text-center" id="number">700</span>
                    <p class="num-desc">Cours</p>
                </div>
                <div class="col-md-2 justify-content-center m-5 text-center text-light">
                    <span data-target="40" class=" display-2 fw-bold text-center" id="number">40</span>
                    <p class="num-desc">Sections</p>
                </div>
                <div class="col-md-2 justify-content-center text-center m-5 text-light">
                    <span data-target="1000" class=" display-2 fw-bold text-center" id="number">1000</span>
                    <p class="num-desc">Etudiants</p>
                </div>
            </div>




            <div class="row categ">
                <h2 class="p-5 text-center"><b>Meilleurs Cours</b></h2>
                <div class="col-md categ_menu ">
                    <ul class="categ_menu_cat ">
                        <li>
                            <span class="" id="tout"><b>Toutes les catégorie</b></span>
                        </li>
                        <li>
                            <span id="info_btn"><b>Informatique</b></span>
                        </li>
                        <li>
                            <span id="arch2"><b>Architecture</b></span>
                        </li>
                        <li>
                            <span id="design2"><b>Design</b></span>
                        </li>
                        <li>
                            <span id="bis2"><b>Business</b></span>
                        </li>
                        <li>
                            <span id="law2"><b>Droit</b></span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tout row" id="tout2" data-aos="fade-in">
                <div class="row categ p-0 m-0 justify-content-center justify-content-around">
                    <div class="col-sm-3 crd1 m-0 p-0">
                        <div class="card crd_body">
                            <img class="card-img-top" src="../../img/info.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center">Informatique</h4>
                                <p class="card-text ">Maîtrise de développement logiciel en utilisant les différents langages de programmation.</p>
                                <p class="text-center"><button class="card-text text-center card-btn">voir plus
                                    </button></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 crd1 m-0 p-0">
                        <div class="card crd_body ">
                            <img class="card-img-top" src="../../img/arch.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center">Architécture</h4>
                                <p class="card-text ">Permettre la transmission d'un savoir de qualité en milieu architécturale</p>
                                <p class="text-center"><button class="card-text text-center card-btn">voir plus
                                    </button></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 m-0 p-0 crd1">
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
                <div class="row categ categ2 justify-content-center">
                    <div class="col-sm-3 crd1 crd2 p-0">
                        <div class="card crd_body ">
                            <img class="card-img-top" src="../../img/buss.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center">Business</h4>
                                <p class="card-text ">Poursuivez vos études en licence marketing dans l'une des universités les plus réputées.</p>
                                <p class="text-center"><button class="card-text  card-btn">voir plus
                                    </button></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 crd1 crd2 m-0 p-0">
                        <div class="card crd_body">
                            <img class="card-img-top" src="../../img/law.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center">Droit</h4>
                                <p class="card-text">Cette licence tend à Munir les étudiants des connaissances pour exercer les métiers en relation avec le domaine du droit.</p>
                                <p class="text-center"><button class="card-text text-center card-btn">voir plus
                                    </button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row categ">
                <h2 class="p-5 text-center"><b>Vos parcours</b></h2>
                <div class="row">
                    <div style="padding-left: 15%; width: 50%;" data-aos="fade-right">
                        <h5 class="p-1 text-left"><b>"Une faculté Digne de son parcours"</b></h5>
                        <h5 class="p-1 text-left">L'enseignement à l'UIK repose sur une pédagogie</h5>
                        <h5 class="p-1 text-left">active et interactive, fondée sur une très forte</h5>
                        <h5 class="p-1 text-left">implication des professeurs.</h5>
                        <h5 class="p-1 text-left">Vous n'aurez pas à me faire seul, notre équipe</h5>
                        <h5 class="p-1 text-left">d'assistance aux instructeurs est là par pour répondre</h5>
                        <h5 class="p-1 text-left">à vos questions et vous aider tout au long du votre</h5>
                        <h5 class="p-1 text-left">parcours et même pour vous faciliter la vie.</h5>
                    </div>
                    <div style="width: 40%;" data-aos="fade-left">
                        <img src="../../img/29479.png" width="80%" height="80%">
                    </div>
                </div>
            </div>



            <h2 class="p-5 text-center"><b>Témoignages de nos professeurs</b></h2>
            <div id="carouselId" class="carousel slide " data-bs-ride="carousel" data-aos="fade-in">
                <div class="carousel-inner" role="listbox" style="overflow:visible;">

                    <div class="carousel-item active">
                        <div class="row justify-content-center  tem">
                            <div class="col-md-4 ">
                                <img src="../../img/prof1.png" alt="" class="img-fluid img-tem">
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
                                <img src="../../img/prof2.png" alt="" class="img-fluid img-tem">
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
                                <img src="../../img/prof3.png" alt="" class="img-fluid img-tem">
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

            <br>
            <br>
            <div class="row categ">
                <h2 class="p-5 m-5 text-center"><b>Actualités</b></h2>
            </div>

            <div class="tout row" id="tout2">
                <div class="row categ p-0 m-0 justify-content-center justify-content-around">
                    <div class="col-sm-3  m-0 p-0">
                        <div class="card crd5">
                            <img class="card-img-top" src="../../img/Screenshot2021-12-25102937.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center">03.10.2021</h4>
                                <p class="card-text ">Séminaire analyse et interprétations du paysage architecural
                                    de Beni M'tir.</p>
                                <p class="text-right">En savoir plus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 crd1 m-0 p-0">
                        <div class="card crd5 ">
                            <img class="card-img-top" src="../../img/Screenshot2021-12-25102619.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center">17.09.2021</h4>
                                <p class="card-text">Une bonne nouvelle : notre partenaire Université Laval reprend la mobilité internationale !</p>
                                <p class="text-right">En savoir plus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 m-0 p-0 crd1">
                        <div class="card crd5 ">
                            <img class="card-img-top" src="../../img/Screenshot2021-12-25102957.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center">13.09.2021</h4>
                                <p class="card-text">Département architecture II Info day et choix des Hubs pour les étudiant(e)s
                                    de la 5e année architecture.</p>
                                <p class="text-right">En savoir plus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row categ categ2 justify-content-center">
                    <a href="act.php">
                        <p class="text-center"><button class="card-text text-center card-btn">voir plus
                            </button></p>
                    </a>
                </div>
            </div>
            <br>
            <br>
        </main>
        <footer>
            <?php
            include("../header/footer.php");
            include("../header/fléche.php");
            ?>
        </footer>
    </div>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="../js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script>
    AOS.init();
</script>

</html>