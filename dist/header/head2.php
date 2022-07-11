<header>
  <div class="row nav  fixed-top" id="nav2">
    <nav class="navbar navbar-expand-md " id="nav">
      <div class="container-fluid">
        <a href="index.html" class="ms-5"><img src="../../img/logo3.png" class="navbar-brand img-fluid" style="width:6rem;"></a>
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
              <a href="#" class="dropdown-item">Préparatoire Intégrer</a>
              <a href="#" class="dropdown-item">Préparatoire Intégrer</a>
              <a href="#" class="dropdown-item">Préparatoire Intégrer</a>
            </div>
          </li>
          <li class="navbar-item">
            <a href="Architecture" class="nav-link">Architecture</a>
          </li>
          <li class="navbar-item">
            <a href="Design" class="nav-link">Design</a>
          </li>
          <li class="navbar-item">
            <a href="business" class="nav-link">Business</a>
          </li>
          <li class="navbar-item">
            <a href="droit" class="nav-link">Droit </a>
          </li>
          <li class="navbar-item">
            <div id="burger"><span class="menu_btn"><span id="br_btn" class=" material-icons">
                  menu</div>
          </li>
        </ul>
      </div>
      <div class="col-md-2 side_menu d-none" id="side_menu">
        <ul class="">
          <li class=""><a href="#" class=""><img src="../../img/logo.png" class="w-50"></a></li>
          <?php
          if ($profile == 'ENSG') {
            echo '<li><a href="acceuilProf.php">Acceuil</a></li>';
            echo '<li><a href="acceuilProf.php">Présentation</a></li>';
            echo '<li><a href="profileProf.php">Profil</a></li>';
            echo '<li><a href="espacePersonnelProf.php">Espace personnel</a></li>';
            echo '<li><a href="coursProf.php">Cours</a></li>';
          } else if ($profile == 'SCOL') {
            echo '<li><a href="acceuilScol.php">Acceuil</a></li>';
            echo '<li><a href="listEtudiantScol.php">Gestion des étudiants</a></li>';
            echo '<li><a href="listProfScol.php">Gestion des professeurs</a></li>';
            echo '<li><a href="listGroupeScol.php">Gestion des groupe</a></li>';
            echo '<li><a href="listAffGroupeScol.php">Gestion d' . "'" . 'affectation des groupes</a></li>';
            echo '<li><a href="listCourScol.php">Gestion des cours</a></li>';
            echo '<li><a href="listExamenScol.php">Gestion des examens</a></li>';
            echo '<li><a href="listSalleScol.php">Gestion des salles</a></li>';
            echo '<li><a href="listEmploieScol.php">Gestion des emploies</a></li>';
            echo '<li><a href="listAnneeScol.php">Gestion d' . "'" . 'année scolaire</a></li>';
            echo '<li><a href="listSemstreScol.php">Gestion de semestre</a></li>';
          } else if ($profile == 'ADMIN') {
          } else if ($profile == 'STUD') {
            echo '<li><span class="material-icons me-3 mb-3 text-light">home</span><a href="acceuil.php">Acceuil</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light"> speaker_notes</span><a href="Presentation.html">Présentation</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light"> person</span><a href="profileEtud.php">Profile</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light">content_copy</span><a href="cours.php">Cours</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light"> pending_actions</span><a href="act.php">Actualité</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light">event</span><a href="Event.php">Événements</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light">contact_page</span><a href="espacePersonelleEtud.php">Espace Personelle</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light">contacts</span><a href="faq.php">F.A.Q</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light">date_range</span><a href="calendrier.php">Calendrier</a></li>';
            echo '<li><span class="material-icons me-3  text-light">help_outline</span><a href="Aide.php">Aide</a></li>';
          }
          ?>
          <li class="pt-2 mt-5"><span class="material-icons me-2 ms-5  text-light text-end">
              logout
            </span><a href="http://localhost/UIK/deconnexion.php">Se déconnecter</a></li>
        </ul>

      </div>
    </nav>
  </div>
  <div class="row nav-white fixed-top" id="nav3">
    <nav class="navbar navbar-expand-md" id="nav4">
      <div class="container-fluid">
        <a href="index.html" class="ms-5"><img src="../../img/logo2.png" class="navbar-brand img-fluid" style="width:6rem;"></a>
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
        <ul class="">
          <li class=""><a href="#" class=""><img src="../../img/logo.png" class="w-50"></a></li>
          <?php
          if ($profile == 'ENSG') {
            echo '<li><a href="acceuilProf.php">Acceuil</a></li>';
            echo '<li><a href="presentation.php">Présentation</a></li>';
            echo '<li><a href="profileProf.php">Profil</a></li>';
            echo '<li><a href="espacePersonnelProf.php">Espace personnel</a></li>';
            echo '<li><a href="coursProf.php">Cours</a></li>';
          } else if ($profile == 'SCOL') {
            echo '<li><a href="acceuilScol.php">Acceuil</a></li>';
            echo '<li><a href="listEtudiantScol.php">Gestion des étudiants</a></li>';
            echo '<li><a href="listProfScol.php">Gestion des professeurs</a></li>';
            echo '<li><a href="listGroupeScol.php">Gestion des groupe</a></li>';
            echo '<li><a href="listAffGroupeScol.php">Gestion d' . "'" . 'affectation des groupes</a></li>';
            echo '<li><a href="listCourScol.php">Gestion des cours</a></li>';
            echo '<li><a href="listExamenScol.php">Gestion des examens</a></li>';
            echo '<li><a href="listSalleScol.php">Gestion des salles</a></li>';
            echo '<li><a href="listEmploieScol.php">Gestion des emploies</a></li>';
            echo '<li><a href="listAnneeScol.php">Gestion d' . "'" . 'année scolaire</a></li>';
            echo '<li><a href="listSemstreScol.php">Gestion de semestre</a></li>';
          } else if ($profile == 'ADMIN') {
          } else if ($profile == 'STUD') {
            echo '<li><span class="material-icons me-3 mb-3 text-light">home</span><a href="acceuil.php">Acceuil</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light"> speaker_notes</span><a href="Presentation.php">Présentation</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light"> person</span><a href="profileEtud.php">Profile</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light">content_copy</span><a href="cours.php">Cours</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light"> pending_actions</span><a href="act.php">Actualité</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light">event</span><a href="Event.php">Événements</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light">contact_page</span><a href="espacePersonelleEtud.php">Espace Personelle</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light">contacts</span><a href="faq.php">F.A.Q</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light">date_range</span><a href="calendrier.php">Calendrier</a></li>';
            echo '<li><span class="material-icons me-3  text-light">help_outline</span><a href="Aide.php">Aide</a></li>';
          }
          ?>
          <li class="pt-2 mt-5"><span class="material-icons me-2 ms-5  text-light text-end">
              logout
            </span><a href="http://localhost/UIK/deconnexion.php">Se déconnecter</a></li>
        </ul>

      </div>
    </nav>
  </div>

  <div class="row hero" id="hero">
    <div class="col-md ms-5 head">
      <p class="text-light my-auto text-head fw-bold">Université Ibn Khaldoun</p>
      <p class="text-light my-auto fs-5">Nous assurons des enseignements à jour dans lesquels l'entreprise est trés présente afin de préparer l'étudiant à la vie active</p>
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