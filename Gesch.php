<?php
include "include/dbh.inc.php";

$sql = 'SELECT * FROM `gKunden`';

$result = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">


<?php include 'layout/menu.php' ?>
<!-- MAIN CONTENT -->
<div class="main">
  <div class="main-content client">

    <?php include 'layout/head.php' ?>

    <div class="row">
      <?php while ($gKunde = mysqli_fetch_assoc($result)) { ?>
      <div class="col-3 col-md-6 col-sm-12 mb-25 ">
        <form action="bussines-client-details.php" method="get">
          <input type="hidden" name="gKundenId" value="<?= $gKunde['gKundenId'] ?>">
          <input type="hidden" name="gkUsername" value="<?= $gKunde['gkUsername'] ?>">
          <input type="hidden" name="gkPasswort" value="<?= $gKunde['gkPasswort'] ?>">
          <input type="hidden" name="gkVorname" value="<?= $gKunde['gkVorname'] ?>">
          <input type="hidden" name="gkNachname" value="<?= $gKunde['gkNachname'] ?>">
          <input type="hidden" name="gkFirmenname" value="<?= $gKunde['gkFirmenname'] ?>">
          <input type="hidden" name="gkRechtform" value="<?= $gKunde['gkRechtform'] ?>">
          <input type="hidden" name="gkUmsatzsteur" value="<?= $gKunde['gkUmsatzsteur'] ?>">
          <input type="hidden" name="gkSteurnummer" value="<?= $gKunde['gkSteurnummer'] ?>">
          <input type="hidden" name="gkAdresse" value="<?= $gKunde['gkAdresse'] ?>">
          <input type="hidden" name="gkPlz" value="<?= $gKunde['gkPlz'] ?>">
          <input type="hidden" name="gkStadt" value="<?= $gKunde['gkStadt'] ?>">
          <input type="hidden" name="gkEmail" value="<?= $gKunde['gkEmail'] ?>">
          <input type="hidden" name="gkTelefonnummer" value="<?= $gKunde['gkTelefonnummer'] ?>">
          <input type="hidden" name="gkBonusProzent" value="<?= $gKunde['gkBonusProzent'] ?>">
          <input type="hidden" name="gkBonusEUR" value="<?= $gKunde['gkBonusEUR'] ?>">

          <div class="box client" id="bggkunde">
            <div class="box-body pt-5 pb-0">

              <h5 class="mt-17"><?= $gKunde['gkVorname'] . ' ' . $gKunde['gkNachname'] ?></h5><br>

              <p class="fs-14 font-w400 font-main"><?= $gKunde['gkFirmenname'] ?> <span
                  class="text-clo-primary font-w500 pl-4"><?= $gKunde['gkRechtform'] ?></span></p>
              <ul class="info">
                <li class="fs-14"><i class='bx bxs-envelope'></i><?= $gKunde['gkEmail'] ?></li>
              </ul>
            </div>
            <div class="group-btn d-flex justify-content-between">
              <button type="submit" name="submit" class="search d-flex">Profil ansehen</button>
            </div>
          </div>
        </form>

      </div>

      <div id="edit_client" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Kunde Kartei bearbeiten</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label>ID kunde</label>
                  <input type="text" class="form-control" value="<?= $gKunde['gKundenId'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Kunde Name</label>
                  <input type="text" class="form-control"
                    value="<?= $gKunde['gkVorname'] . ' ' . $gKunde['gkNachname'] ?>">
                </div>
                <div class="form-group">
                  <label>Firma Name</label>
                  <input type="text" class="form-control" value="DB firma name + recht form">
                </div>
                <div class="form-group">
                  <label>SteuerNummer</label>
                  <input type="text" class="form-control" value="SteuerNummer">
                </div>

                <div class="form-group">
                  <label>Handynummer</label>
                  <input type="text" class="form-control" value="+49 ...">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" value="Email DB">
                </div>
                <div class="form-group">
                  <label>Bonus</label>
                  <select class="form-control select">
                    <option value="">Prozent eingeben</option>
                    <option value="10">10%</option>
                    <option value="15">15%</option>
                    <option value="20">20%</option>
                  </select>
                </div>
                <div class="form-group">

                  <img src="./images/client/1.png" alt="">
                  <img src="./images/client/2.png" alt="">


                </div>


                <div class="submit-section text-center">
                  <button class="btn btn-primary submit-btn">Annehmen</button>
                  <button class="btn btn-primary submit-btn">Ablehnen</button>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
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