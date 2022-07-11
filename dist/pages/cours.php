<?php
session_start();
include("../config.php");

$fullName = $_SESSION['fullName'];
$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$photo = mysqli_query($conn, "select * from cour c, v_cour v where c.id=v.id");
$row2 = mysqli_fetch_array($photo, MYSQLI_BOTH);

$spe = mysqli_query($conn, "select * from specialite");
$bra = mysqli_query($conn, "select * from branche");
$sem = mysqli_query($conn, "select * from semestre");
$result =  mysqli_query($conn, "select * from v_cour where id_specialite=5 order by dt_cour asc limit 3 offset 3");
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
$sqlCount = mysqli_query($conn, "select count(v.id) as count from v_cour v where id_specialite=5");

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



  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>UIK</title>

</head>

<body>
  <div class="container-fluid cont-index">
    <?php include('../header/head.php'); ?>
    <main class="">
      <!-- Hero Photo -->
      <div class=" hero_img mt-4 row justify-content-center ">
        <h1 class=" text-light col-md text-center my-auto text_hero_cours">Meilleurs Cours</h1>
      </div>

      <div class="d-flex">

        <div class="ms-5 mt-5 filtres">
          <form action="" method="get" name="form" id="filtres">
            <h4 class="mt-5">Filières : </h4>
            <fieldset>
              <?php
              while ($tabspe = mysqli_fetch_array($spe)) {
              ?>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="filiere" id="" value="<?php echo $tabspe['id']; ?>">
                  <label class="form-check-label" for="">
                    <?php echo $tabspe['libelle']; ?>
                  </label>
                </div>

              <?php
              }
              ?>
            </fieldset>

            <h4 class="mt-4">Niveaux : </h4>
            <fieldset>
              <?php
              while ($tabbra = mysqli_fetch_array($bra)) {
              ?>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="niveaux" id="" value=" <?php echo $tabbra['id']; ?>">
                  <label class="form-check-label" for="">
                    <?php echo $tabbra['libelle']; ?>
                  </label>
                </div>

              <?php
              }
              ?>
            </fieldset>
            <h4 class="mt-4">Semestres : </h4>

            <fieldset> <?php
                        while ($tabsem = mysqli_fetch_array($sem)) {
                        ?>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="semestre" id="" value="   <?php echo $tabsem['id']; ?>">
                  <label class="form-check-label" for="">
                    <?php echo $tabsem['libelle']; ?>
                  </label>
                </div>
              <?php
                        }
              ?>
            </fieldset>
          </form>
        </div>

        <div class="mx-auto p-5">
          <h3 class="text-muted">Informatique</h3>
          <div class="row row-cols-md-3 justify-content-center justify-content-around ">

            <style>
              .list-image {
                width: 15rem;

              }
            </style>





            <div class="col d-flex justify-content-center flex-column">
              <div class="card crd_body ">
                <img class="card-img-top m-auto w-100 img-fluid list-image" src="../../img/image_2.png" alt="">
                <div class="card-body">
                  <h4 class="card-title">cour C</h4>
                  <?php echo '<p class="card-text">Pour :' . $row["libelle_branche"] . '</p>'; ?>
                  <hr>
                  <?php echo '<p class="card-text name-blue text-secondary fw-bold">' . $row["nom"] . $row["prenom"] . '</p>'; ?>
                </div>'
              </div>
              <a name="" id="" class="btn btn-outline-primary w-50 m-auto mt-4" href="#" role="button"> Consulter </a>
            </div>
            <div class="col d-flex justify-content-center flex-column">
              <div class="card crd_body ">
                <img class="card-img-top m-auto w-100 img-fluid list-image" src="../../img/info_3.png" alt="">
                <div class="card-body">
                  <h4 class="card-title">cour JEE</h4>
                  <?php echo '<p class="card-text">Pour : les licences, les mastères</p>'; ?>
                  <hr>
                  <?php echo '<p class="card-text name-blue text-secondary fw-bold">Par : Mm Ben-Ahmed</p>'; ?>
                </div>'
              </div>
              <a name="" id="" class="btn btn-outline-primary w-50 m-auto mt-4" href="#" role="button"> Consulter </a>
            </div>
            <div class="col d-flex justify-content-center flex-column">
              <div class="card crd_body ">
                <img class="card-img-top m-auto w-100 img-fluid list-image" src="../../img/image_2.png" alt="">
                <div class="card-body">
                  <h4 class="card-title">Base de donnée</h4>
                  <?php echo '<p class="card-text">Pour : les préparatoires, les licences</p>'; ?>
                  <hr>
                  <?php echo '<p class="card-text name-blue text-secondary fw-bold">Par : Mme Jafer</p>'; ?>
                </div>'
              </div>
              <a name="" id="" class="btn btn-outline-primary w-50 m-auto mt-4" href="#" role="button"> Consulter </a>
            </div>
          </div>
          <h3 class="mt-5">Business</h3>
          <div class="row row-cols-md-3">

            <style>
              .list-image {
                width: 15rem;

              }
            </style>

            <?php
            $countTot = 0;
            $sqlCount = mysqli_query($conn, "select count(v.id) as count from v_cour v where id_specialite=5");
            if (mysqli_num_rows($sqlCount) > 0) {
              while ($row = mysqli_fetch_array($sqlCount)) {
                $countTot = $row[0];
              }
              mysqli_free_result($sqlCount);
            }
            $count = 0;


            if ($result =  mysqli_query($conn, "select * from v_cour where id_specialite=5 order by dt_cour asc limit 3 offset 3")) {
              for ($count = 0; $count < 3; $count++) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                    echo  '<div class="col d-flex justify-content-center flex-column">';
                    echo  '<div class="card crd_body ">';
                    echo     '<img class="card-img-top m-auto w-100 img-fluid list-image" src="https://robohash.org/' . $count . '" alt="">';
                    echo     '<div class="card-body">';
                    echo      ' <h4 class="card-title">' . $row["libelle"] . '</h4>';
                    echo     '<p class="card-text">Pour :' . $row["libelle_branche"] . '</p>';
                    echo       '<hr>';
                    echo      '<p class="card-text name-blue text-secondary fw-bold">' . $row['nom'] . ' ' . $row['prenom'] . '</p>';
                    echo    '</div>';
                    echo    '</div>';
                    echo     '<a name="" id="" class="btn btn-outline-primary w-50 m-auto mt-4" href="#" role="button"> Consulter </a>';
                    echo   '</div>';
                  }
                }
              }
            }
            ?>
          </div>


        </div>
      </div>




    </main>

    <?php include("../header/footer.php"); ?>
  </div>
  </div>
</body>
<script src="../js/main2.js"></script>
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