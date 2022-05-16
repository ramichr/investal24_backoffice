<?php
include "include/dbh.inc.php";

$sql = 'SELECT * FROM `kunden`';

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="DE">


<?php include 'layout/menu.php' ?>

  <!-- MAIN CONTENT -->
  <div class="main">
    <div class="main-content client">
     
    <?php include 'layout/head.php' ?>

      <div class="row">
        <div class="col-12">

          <div class="row">
            <div class="col-md-12 col-xl-4 mb-0">
              <div class="form-group"> <label class="form-label">von:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bx bx-calendar'></i> </div>
                  </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="date">
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xl-4 mb-0">
              <div class="form-group"> <label class="form-label">bis:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bx bx-calendar'></i> </div>
                  </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="date">
                  <button type="submit" class="search d-flex"><i class="fas fa-search"></i>CSV Export</button>
                </div>

              </div>
            </div>

          </div>
          <div class="box">



            <div class="box-body d-flex justify-content-between pt-0 pb-0">
              <div class="search-form d-flex">
                <input type="text" placeholder="Kunden Name" class="form-control">

                <button type="submit" class="search d-flex"><i class="fas fa-search"></i>Suchen</button>

              </div>




            </div>



          </div>


        </div>

        <?php
                while ($kunde = mysqli_fetch_assoc($result)) { ?>
        <div class="col-3 col-md-6 col-sm-12 mb-25">
          <form action="./client-details.php" method="GET" class="box client">
            <input type="hidden" name="username" value="<?= $kunde['username'] ?>">
            <input type="hidden" name="vorname" value="<?= $kunde['vorname'] ?>">
            <input type="hidden" name="nachname" value="<?= $kunde['nachname'] ?>">
            <input type="hidden" name="email" value="<?= $kunde['email'] ?>">
            <input type="hidden" name="telefonnummer" value="<?= $kunde['telefonnummer'] ?>">
            <input type="hidden" name="geschlecht" value="<?= $kunde['geschlecht'] ?>">
            <input type="hidden" name="addresse" value="<?= $kunde['addresse'] ?>">
            <input type="hidden" name="plz" value="<?= $kunde['plz'] ?>">
            <input type="hidden" name="stadt" value="<?= $kunde['stadt'] ?>">

            <div class="dropdown">
              <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bx-dots-horizontal-rounded'></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                    class="bx bx-trash"></i> Löschen</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                    class="bx bx-edit mr-5"></i>Bearbeiten</a>
              </div>
            </div>
            <div class="box-body pt-5 pb-0">
              <div class="img-box">
                <img src="./images/client/1.png" alt="">
                <div class="pulse-css"></div>
              </div>
              <a href="client-details.php">
                <h5 class="mt-17"><?= $kunde['vorname'] . ' ' . $kunde['nachname'] ?></h5>
              </a>

              <p class="fs-14 font-w400 font-main">Adresse:
                <span class="text-clo-primary font-w500 pl-4">
                  <?= $kunde['addresse'] . ' ,' . $kunde['plz'] . ' ' . $kunde['stadt'] ?>
                </span>
              </p>
              <ul class="info">
                <li class="fs-14"><i class='bx bxs-phone'></i><?= $kunde['telefonnummer'] ?></li>
                <li class="fs-14"><i class='bx bxs-envelope'></i><?= $kunde['email'] ?></li>
              </ul>
              <div class="group-btn d-flex justify-content-between">
                <input type="submit" name="submit" value="Profil ansehen" class="bg-btn-sec color-main">
              </div>
            </div>

          </form>
        </div>
        <?php } ?>
      </div>


      <div class="modal custom-modal fade" id="delete_client" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="form-header">
                <h3>Kunde löschen</h3>
                <p>Sind Sie sicher, dass Sie löschen möchten?</p>
              </div>
              <div class="modal-btn delete-action">
                <div class="row">
                  <div class="col-6 mb-0">
                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">löschen</a>
                  </div>
                  <div class="col-6 mb-0">
                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Abbrechen</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="edit_client" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Kunde bearbeiten</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label>Name des Kunden</label>
                  <input type="text" class="form-control" value="Alexandra Bleckmann">
                </div>

                <div class="form-group">
                  <label>Telefon des Kunden</label>
                  <input type="text" class="form-control" value="(589)505-4521">
                </div>
                <div class="form-group">
                  <label>E-Mail des Kunden</label>
                  <input type="text" class="form-control" value=".name@mail.com">
                </div>

                <div class="submit-section text-center">
                  <button class="btn btn-primary submit-btn">bestätigen</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT -->

  <div class="overlay"></div>

  <!-- SCRIPT -->

  <!-- Plugin -->

  <script src="./libs/jquery/jquery.min.js"></script>
  <script src="./libs/moment/min/moment.min.js"></script>
  <script src="./libs/apexcharts/apexcharts.js"></script>
  <script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./libs/peity/jquery.peity.min.js"></script>
  <script src="./libs/chart.js/Chart.bundle.min.js"></script>
  <script src="./libs/owl.carousel/owl.carousel.min.js"></script>
  <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
  <script src="./libs/simplebar/simplebar.min.js"></script>

  <!-- APP JS -->
  <script src="./js/main.js"></script>
  <script src="./js/shortcode.js"></script>
  <script src="./js/pages/clients.js"></script>
</body>

</html>