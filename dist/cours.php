<?php
session_start();
include("../config.php");

$fullName = $_SESSION['fullName'];
$idUser=$_SESSION['idUser'];
$profile=$_SESSION['profile'];

$var = "select * from v_cour";
$req = mysqli_query($conn,$var);
$spe= mysqli_query($conn,"select * from specialite");
$bra= mysqli_query($conn,"select * from branche");
$sem= mysqli_query($conn,"select * from semestre");



$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$url_components = parse_url($url);
 

parse_str($url_components['query'], $params);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="css/main.css">
 

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>UIK</title>
  
</head>

<body>
  <div class="container-fluid cont-index">
  <header>
      <div class="row nav  fixed-top" id="nav2">
        <nav class="navbar navbar-expand-md " id="nav">
          <div class="container-fluid">
        <a href="index.html" class="ms-5"><img src="../img/logo3.png" class="navbar-brand img-fluid" style="width:6rem;"></a>
        <form class="d-flex">
          <input type="search" class="search2 input-group " placeholder="Recherche">
         <span class="material-icons srch">
            search
            </span>
      </form>
            <ul class="navbar-nav nav_list">
            <li class="navbar-item">
              <a class="nav-link"href="Informatique">Informatique</a>
            </li>
            <li class="navbar-item">
              <a href="Architecture" class="nav-link">Architecture</a>
            </li>
            <li class="navbar-item">
              <a href="Design"class="nav-link">Design</a>
            </li>
            <li class="navbar-item">
              <a href="business" class="nav-link">Business</a>
            </li>
            <li class="navbar-item">
              <a href="droit" class="nav-link">Droit </a>
            </li>
            <li class="navbar-item">
              <div id="burger"><span class="menu_btn"><span id="br_btn" class=" material-icons">
                menu</div></span></span>
            </li>
            </ul>
           </div>
           <div class="col-md-2 side_menu d-none" id="side_menu">
          <ul class="">
            <li class=""><a href="#" class=""><img src="../img/logo.png" class="w-50"></a></li>
            <li class=""><span class="material-icons pe-5 text-light">home</span><a href="#" class="text-light">Acceuil</a></li>
            <li><span class="material-icons text-light pe-5 ">
              speaker_notes
              </span><a href="#" class="text-light">Présentation</a></li>
            <li><a href="#"><span class="material-icons text-light pe-5">
              person
              </span><a href="#" class="text-light">Profil</a></li>
            <li><span class="material-icons text-light pe-5">
              pending_actions
              </span><a href="#" class="text-light">Actualité</a></li>
            <li><span class="material-icons text-light pe-5">
              event
              </span><a href="#" class="text-light">Evénement</a></li>
            <li><span class="material-icons text-light pe-5">
              contact_page
              </span><a href="#" class="text-light">Espace Personnel</a></li>
            <li><a href="#"><span class="material-icons text-light pe-5">
              contacts
              </span><a href="#" class="text-light fw-normal " >F.A.Q</a></li>
            <li><span class="material-icons text-light pe-5">
              date_range
              </span><a href="#" class="text-light text-light">Calendrier</a></li>
            <li><span class="material-icons text-light pe-5">
            mark_as_unread
              </span><a href="#" class="text-light text-light">Message</a></li>
            <li><span class="material-icons text-light pe-5">
            help_outline
            </span><a href="#" class="text-light">Aide</a></li>
              
          </ul>
      
           </div>
        </nav>
      </div>  
      <div class="hero_img col-md mt-5">aaaaa</div>
</header>
      <main class="mt-5">
       <!-- Hero Photo -->
     

        <div class="d-flex">

          <div class="ms-5 mt-5 filtres">
            <form action="" method="get" name="form" id="filtres">
            <h4 class="mt-5">Filières : </h4>
            <fieldset>
            <?php 
                 while($tabspe=mysqli_fetch_array($spe))
                 { 
            ?>
          
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="filiere" id="" value="<?php echo $tabspe['id']; ?>">
              <label class="form-check-label" for="">
                <?php echo $tabspe['libelle']; ?>
              </label>
            </div>
              
            <?php 
}
?>   </fieldset>

            <h4>Niveaux : </h4>
            <fieldset>
            <?php 
  while($tabbra=mysqli_fetch_array($bra))
  { 
            ?>
    
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="niveaux" id="" value=" <?php echo $tabbra['id']; ?>" >
              <label class="form-check-label" for="">
              <?php echo $tabbra['libelle']; ?>
              </label>
            </div>

            <?php 
}
?>
  </fieldset>
            <h4>Semestres : </h4>
            
            <fieldset>   <?php 
 while($tabsem=mysqli_fetch_array($sem))
 { 
            ?>
  
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="semestre" id="" value="   <?php echo $tabsem['id']; ?>" >
              <label class="form-check-label" for="">
              <?php echo $tabsem['libelle']; ?>
              </label>
            </div>
            <?php 
 }
?></fieldset>
</form>
          </div>

          <div class="margin-left">
            <div class="row row-cols-3">
              <style>
                .list-image{
                  width: 15rem;
                  
                }
                </style>
                <?php
                $i = 0;
                  while($tab=mysqli_fetch_array($req,MYSQLI_BOTH))
                {
                  $i= $i + 1 ; 
                ?>

              <div class="col d-flex justify-content-center flex-column">
                <div class="card ">
                  <img class="card-img-top m-auto  list-image"  src="https://robohash.org/<?php echo $i ?>" alt="">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $tab['libelle']; ?></h4>
                    <p class="card-text">Pour : <?php echo $tab['libelle_branche']; ?></p>
                    <hr>
                    <p class="card-text name-blue text-secondary fw-bold"><?php echo $tab['nom'].' '.$tab['prenom']; ?></p>
                  </div>
                </div>
                <a name="" id="" class="btn btn-outline-primary w-50 m-auto mt-4" href="#" role="button"> Consulter </a>
              </div>
                    <?php
                    }
                    ?>
              </div>
            </div>
          </div>


        </div>

      </main>

<?php include("../header/footer.php");?>
</div>
</body>
<script src="js/main2.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<script>
  console.log("tekhdem");
  var elements = document.getElementsByClassName("form-check-input");


for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('change', function() {
  console.log("testtest")
  document.getElementById('filtres').submit();
});
}

 
  </script>
</html>