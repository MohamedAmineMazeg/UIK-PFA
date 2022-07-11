<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];
$result =  mysqli_query($conn, "select * from users where id=" . $idUser);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
$result2 =  mysqli_query($conn, "select * from v_etudiant v where v.id_user=" . $idUser);
$row2 = mysqli_fetch_array($result2, MYSQLI_BOTH);
$result3 =  mysqli_query($conn, "select * from v_enseignant v,users u where v.id_user=u.id");
$row3 = mysqli_fetch_array($result3, MYSQLI_BOTH);
$note = mysqli_query($conn, "select * from v_evaluation_rendu v,users u where v.id_user=u.id");
$g_etd = $row2['id_groupe'];
$g_prof = mysqli_query($conn, "select * from v_groupe_prof p where p.id_groupe=" . $g_etd);
$g_prof2 = mysqli_fetch_array($g_prof, MYSQLI_BOTH);
$prof_id = $g_prof2['id_users'];
$prof = mysqli_query($conn, "select * from v_enseignant e where e.id_user=" . $prof_id);
$prof2 = mysqli_fetch_array($prof, MYSQLI_BOTH);
$comm = mysqli_query($conn, "select commentaire from commentaire c where c.id_user=" . $prof_id);
$cour = mysqli_query($conn, "select * from cour");

$sqlSection = "select distinct(s.libelle) from section s
join cour c on c.id_section = s.id 
join enseignant e on e.id = c.id_enseignant 
join users u on u.id = e.id_users 
where u.id=" . $idUser;
$idSemester = "";
$sqlSemester = "select distinct(v.id_semester), v.semester_libelle from v_rendu_prof v where v.id_users=" . $row2['id'];
$resSemester = mysqli_query($conn, $sqlSemester);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Acceuil</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <div class="container">
    <?php include("../header/head.php"); ?>
    <main>
      <div class="row" style="padding-left: 2%;">
        <div class="col-md">
          <!-- <div class="split_left"> -->
          <div class="row ">
            <h4 class="p-1"><b>Mon profile</b></h4>
          </div>
          <div class="tout row" id="tout2">
            <div class="row  p-0  justify-content-center">
              <div class="col-md-6 crd1 m-0 py-2">
                <div class=" card " style="border-radius:2rem;">
                  <div class="card-body crd_etd">
                    <h6 class="card-title pb-3"><b>Fiche Etudiant</b></h6>
                    <p class="card-text text-etd">
                    <div class="row">
                      <div class="col-md-3">
                        <?php echo '<img  src="' . $row['photo'] . '" width="140" height="140" alt="img-profil">'; ?>
                      </div>
                      <div class="col-md-8" style="padding-right: 10px;">
                        <?php
                        echo '<p class=" m-0 pb-3 text-secondary" style="font-size: 20px;"><b>' . $row['prenom'] . ' ' . $row['nom'] . '</b></p>';
                        echo '<p class="card-text m-0 pb-3"><b>Date de naissance :</b> ' . date("d/m/Y", strtotime($row['dt_naissance'])) . '</p>';
                        echo "<p class='card-text m-0 pb-3'><b>Lieux :</b> " . $row['adresse'] . "</p>";
                        echo "<p class='card-text m-0 '><b>Etudes :</b>" . $row2['libelle_niveau'] . ' ' . $row2['libelle_specialite'] . "</p>";
                        ?>
                      </div>
                    </div>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 m-0 py-2">
                <div class="card" style="border-radius:2rem;">
                  <div class="card-body crd_body3 ">
                    <div class="card-title">
                      <h6 class="mb-3 pb-3"><b>Contact</b></h6>
                    </div>
                    <div class="row">
                      <div class="col-md card-text">
                        <?php
                        echo "<i class=' fa fa-phone ms-2 mb-5 me-3'></i><span class='card-text pb-3'>Téléphone : +216 " . $row['num_telephone'] . "</span><br>";
                        echo "<i class='fa fa-envelope ms-2 mb-5 me-3'></i><span class='card-text pb-3'>Email : " . $row['email'] . "</span><br>";
                        echo "<i class='fa fa-map-marker-alt ms-2 mb-2 me-3 '></i><span class='card-text pb-3'>Adresse : 2 Rue Farhat Hached Tunis, 2030</span>";

                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="row justify-content-center">
              <div class="col-md-3  p-0">
                <div class="card w" style="border-radius:2rem">
                  <div class="card-body crd_body3">
                    <h4 class="card-title"><b>Matiéres</b></h4>
                    <?php
                    if (mysqli_num_rows($note) > 0) {
                      echo '<table class="table">';

                      echo '<tbody>';
                      while ($row8 = mysqli_fetch_array($note, MYSQLI_BOTH)) {
                        echo '<tr>';
                        echo '<td class=" fw-bold">' . $row8["libelle_rendu"] . '</td>';
                        echo '<td>' . $row8["note"] . '</td></tr>';
                      }
                      echo '<tr>';
                      echo '<td class=" fw-bold">Rendu 3</td>';
                      echo '<td>14</td></tr>';
                      echo '<tr>';
                      echo '<td class=" fw-bold">Rendu 4</td>';
                      echo '<td>15</td></tr>';
                      echo '</tbody>';
                      echo '</table>';
                    }
                    ?>
                  </div>
                </div>
              </div>.
              <div class="col-md-3 mx-5 p-0">
                <div class="card w" style="border-radius:2rem">
                  <div class="card-body crd_body2 ">
                    <h4 class="card-title"><b>Moyenne</b></h4>
                    <h2 class="p-1 my-5 text-center display-4 fw-bold">11,45</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-3  p-0">
                <div class="card w" style="border-radius:2rem">
                  <div class="card-body crd_body2 ">
                    <h4 class="card-title"><b>Credit</b></h4>
                    <h2 class="p-1 my-5 text-center display-4 fw-bold"><?php echo $row2['credit']; ?></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="row justify-content-center pt-5 mt-5 m-0 p-0">

    <div class="cnt_etud col-md-5 me-5 jusitify-content-center text-center">

      <h3 class="text-start fw-bold mb-4">Contacter</h3>
      <div class="col-md p-5  contact-etud  " data-aos="fade-left">
        <p class=" text-light  fw-bold mb-5">Contactez-nous</p>
        <form class="">
          <div class="form-group form_group text-start">
            <label class="fw-bold text-light ">Nom</label><br>
            <input type="text" class="form-control form-in border-top-0 border-end-0 border-start-0 rounded-0" name="nom" placeholder="nom" required></input>
          </div>
          <div class="form-group form_group text-start">
            <label class="fw-bold text-light">Prénom</label><br>
            <input type="text" class="form-control form-in border-top-0 border-end-0 border-start-0 rounded-0" name="prenom" placeholder="prenom" required></input>
          </div>
          <div class="form-group form_group text-start">
            <label class="fw-bold text-light mb-3">Matiére</label><br>
            <SELECT class="form-control form-in" reaquired>
              <?php
              if (mysqli_num_rows($cour) > 0) {
                while ($courTab = mysqli_fetch_array($cour, MYSQLI_BOTH)) {
                  echo '<option id="3">' . $courTab["libelle"] . '</option>';
                }
              }
              ?>

            </SELECT>
          </div>
          <div class="form-group form_group text-start">
            <label class="fw-bold text-light">Email</label><br>
            <input type="email" class="form-control form-in border-top-0 border-end-0 border-start-0 rounded-0" name="mail" placeholder="Email" required></input>
          </div>

          <div class="form-group form_group text-start">
            <label class="fw-bold text-light mb-3">Sujet</label><br>
            <input type="text-area" class="form-control form-in sujet" name="sujet" required></input>
          </div>


        </form>

      </div>
      <div class="col-md">
        <input type="submit" value="Envoyer" class="btn text-dark btn-outline-primary border-4 cta2 mt-4 text-light text-center">
      </div>
    </div>

    <div class="col-md-3 ms-2">
      <h3 class="fw-bold mb-4">Professeurs</h3>
      <div class="row prof_crd mb-5">
        <div class="col-md ">
          <?php
          echo "<p class='text-secondary  fw-bold'>JavaScript</p>";
          echo "<span class='fw-bold'>Mr." . $prof2['nom'] . "</span>";

          ?>
          <p style="font-size:0.8rem;" class="fw_bold">Tu dois travailler plus sur les pointeurs</p>
        </div>
        <div class="col-md-4 my-auto">
          <?php
          echo '<img class="img-fluid img_prof " src="' . $prof2['photo'] . '" alt="photo_prof" ">';
          ?>

        </div>
      </div>
      <div class="row prof_crd mb-5">
        <div class="col-md ">
          <?php
          echo "<p class='text-secondary  fw-bold'>Math</p>";
          echo "<span class='fw-bold'> Mme.Ben Gamra</span>";

          ?>
          <p style="font-size:0.8rem;" class="fw_bold">Tu devrais faire plus de series, mais bon travaille grosso modo.</p>
        </div>
        <div class="col-md-4 my-auto">
          <?php
          echo '<img class="img-fluid img_prof " src="../../img/kaiser.jpg"alt="photo_prof" ">';
          ?>

        </div>
      </div>
      <div class="row prof_crd mb-5">
        <div class="col-md ">
          <?php
          echo "<p class='text-secondary  fw-bold'>Analyse</p>";
          echo "<span class='fw-bold'>Mme.Maaref</span>";

          ?>
          <p style="font-size:0.8rem;" class="fw_bold">Très bon travail continuer comme ça.</p>
        </div>
        <div class="col-md-4 my-auto">
          <?php
          echo '<img class="img-fluid img_prof " src="../../img/raida.jpg" alt="photo_prof" ">';
          ?>

        </div>
      </div>
      <div class="row prof_crd mb-3">
        <div class="col-md ">
          <?php
          echo "<p class='text-secondary  fw-bold'>Physique</p>";
          echo "<span class='fw-bold'>Mme.Aloui</span>";

          ?>
          <p style="font-size:0.8rem;" class="fw_bold">Tu sais très bien travailler avec les
            tableaux, bonne continuation.</p>
        </div>
        <div class="col-md-4 my-auto">
          <?php
          echo '<img class="img-fluid img_prof " src="../../img/emira.jpg" alt="photo_prof" ">';
          ?>

        </div>
      </div>
    </div>
  </div>
  </div>

  </div>
  </main>
  </div>
  <br><br>
  <?php include("../header/footer.php"); ?>
  <?php include("../header/fléche.php"); ?>
</body>
<script src="../js/main2.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>