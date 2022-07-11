<header>
  <div class="row nav fixed-top" id="nav2">
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
          <li class="nav-item active">
            <a href="Architecture" class="nav-link">Architecture</a>
          </li>
          <li class="nav-item">
            <a href="Design" class="nav-link">Design</a>
          </li>
          <li class="nav-item">
            <a href="business" class="nav-link">Business</a>
          </li>
          <li class="nav-item">
            <a href="droit" class="nav-link">Droit </a>
          </li>
          <li class="nav-item">
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
          <?php
          if ($profile == 'ENSG') {
            echo '<li><a href="acceuilProf.php"><span class="material-icons">home</span>Acceuil</a></li>';
            echo '<li><a href="presentation.php"><span class="material-icons">home</span>Présentation</a></li>';
            echo '<li><a href="profileProf.php"><span class="material-icons">home</span>Profil</a></li>';
            echo '<li><a href="espacePersonnelProf.php"><span class="material-icons">home</span>Espace personnel</a></li>';
            echo '<li><a href="coursProf.php"><span class="material-icons">home</span>Cours</a></li>';
          } else if ($profile == 'SCOL') {
            echo '<li><a href="acceuilScol.php"><span class="material-icons">home</span>Acceuil</a></li>';
            echo '<li><a href="listEtudiantScol.php"><span class="material-icons">home</span>Gestion des étudiants</a></li>';
            echo '<li><a href="listProfScol.php"><span class="material-icons">home</span>Gestion des professeurs</a></li>';
            echo '<li><a href="listGroupeScol.php"><span class="material-icons">home</span>Gestion des groupe</a></li>';
            echo '<li><a href="listAffGroupeScol.php"><span class="material-icons">home</span>Gestion d' . "'" . 'affectation des groupes</a></li>';
            echo '<li><a href="listCourScol.php"><span class="material-icons">home</span>Gestion des cours</a></li>';
            echo '<li><a href="listExamenScol.php"><span class="material-icons">home</span>Gestion des examens</a></li>';
            echo '<li><a href="listSalleScol.php"><span class="material-icons">home</span>Gestion des salles</a></li>';
            echo '<li><a href="listEmploieScol.php"><span class="material-icons">home</span>Gestion des emploies</a></li>';
            echo '<li><a href="listAnneeScol.php"><span class="material-icons">home</span>Gestion d' . "'" . 'année scolaire</a></li>';
            echo '<li><a href="listSemstreScol.php"><span class="material-icons">home</span>Gestion de semestre</a></li>';
          } else if ($profile == 'ADMIN') {
          } else if ($profile == 'STUD') {
            echo '<li><span class="material-icons me-3 mb-3 text-light">home</span><a href="acceuil.php">Acceuil</a></li>';
            echo '<li><span class="material-icons me-3 mb-3 text-light"> speaker_notes</span><a href="presentation.php">Présentation</a></li>';
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
</header>