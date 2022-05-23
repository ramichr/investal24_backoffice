<?php

if (isset($_GET['submit'])) {
  $gKundenId = htmlspecialchars($_GET['gKundenId']);
  $gkUsername = htmlspecialchars($_GET['gkUsername']);
  $gkPasswort = htmlspecialchars($_GET['gkPasswort']);
  $gkVorname = htmlspecialchars($_GET['gkVorname']);
  $gkNachname = htmlspecialchars($_GET['gkNachname']);
  $gkFirmenname = htmlspecialchars($_GET['gkFirmenname']);
  $gkRechtform = htmlspecialchars($_GET['gkRechtform']);
  $gkUmsatzsteur = htmlspecialchars($_GET['gkUmsatzsteur']);
  $gkSteurnummer = htmlspecialchars($_GET['gkSteurnummer']);
  $gkAdresse = htmlspecialchars($_GET['gkAdresse']);
  $gkPlz = htmlspecialchars($_GET['gkPlz']);
  $gkStadt = htmlspecialchars($_GET['gkStadt']);
  $gkEmail = htmlspecialchars($_GET['gkEmail']);
  $gkTelefonnummer = htmlspecialchars($_GET['gkTelefonnummer']);
  $gkBonusProzent = htmlspecialchars($_GET['gkBonusProzent']);
  $gkBonusEUR = htmlspecialchars($_GET['gkBonusEUR']);
}

include "include/dbh.inc.php";

$sql = "SELECT `gkAusweis`, `gkFirmenausweis` FROM `gkunden` WHERE gKundenId = '$gKundenId';";

$result = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html lang="DE">

<?php include 'layout/menu.php' ?>

<div class="main">
  <div class="main-content client project">

    <?php include 'layout/head.php' ?>

    <div class="row">
      <form action="include/gk-antwort.inc.php" method="GET">
        <input type="hidden" name="gKundenId" value="<?= $gKundenId ?>">
        <input type="hidden" name="gkUsername" value="<?= $gkUsername ?>">
        <input type="hidden" name="gkPasswort" value="<?= $gkPasswort ?>">
        <input type="hidden" name="gkVorname" value="<?= $gkVorname ?>">
        <input type="hidden" name="gkNachname" value="<?= $gkNachname ?>">
        <input type="hidden" name="gkFirmenname" value="<?= $gkFirmenname ?>">
        <input type="hidden" name="gkRechtform" value="<?= $gkRechtform ?>">
        <input type="hidden" name="gkUmsatzsteur" value="<?= $gkUmsatzsteur ?>">
        <input type="hidden" name="gkSteurnummer" value="<?= $gkSteurnummer ?>">
        <input type="hidden" name="gkAdresse" value="<?= $gkAdresse ?>">
        <input type="hidden" name="gkPlz" value="<?= $gkPlz ?>">
        <input type="hidden" name="gkStadt" value="<?= $gkStadt ?>">
        <input type="hidden" name="gkEmail" value="<?= $gkEmail ?>">
        <input type="hidden" name="gkTelefonnummer" value="<?= $gkTelefonnummer ?>">
        <div class="col-4 col-xl-12">
          <div class="box left-dot mb-30">
            <div class="box-header  border-0 pd-0">
              <div class="box-title fs-20 font-w600">Allgemeine Informationen</div>
            </div>
            <div class="box-body pt-20 user-profile">
              <div class="table-responsive">
                <table class="table mb-0 mw-100 color-span">
                  <tbody>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Vorname</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $gkVorname ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Nachname</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $gkNachname ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Firmenname </span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $gkFirmenname ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Steuernummer</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $gkSteurnummer ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Telefonnummer</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $gkTelefonnummer ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Email</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $gkEmail ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Bonus</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0">
                        <select name="gkBonusProzent" class="form-control select">
                          <option>Prozent eingeben</option>
                          <option value="10">10%</option>
                          <option value="15">15%</option>
                          <option value="20">20%</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Dokumente</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0">
                        <?php while ($image = mysqli_fetch_assoc($result)) { ?>
                        <div style="display: flex; justify-content: space-evenly;">

                          <a download="ausweis_<?= $gKundenId ?>.jpg"
                            href="data:image;charset=utf8;base64,<?= base64_encode($image['gkAusweis']); ?>">
                            <img src="data:image;charset=utf8;base64,<?= base64_encode($image['gkAusweis']); ?>"
                              width="150" height="100" />
                          </a>

                          <a download="firmenausweis_<?= $gKundenId ?>.jpg"
                            href="data:image;charset=utf8;base64,<?= base64_encode($image['gkFirmenausweis']); ?>">
                            <img src="data:image;charset=utf8;base64,<?= base64_encode($image['gkFirmenausweis']); ?>"
                              width="150" height="100" />
                          </a>

                        </div>
                        <?php } ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="submit-section text-center">
          <button type="submit" class="btn btn-primary submit-btn" name="accept">Annehmen</button>
          <button type="submit" class="btn btn-primary submit-btn" name="decline">Ablehnen</button>
        </div>
      </form>
    </div>

  </div>
</div>
<!-- END MAIN CONTENT -->

<div class="overlay"></div>

<!-- SCRIPT -->
<!-- APEX CHART -->

<script src="./libs/jquery/jquery.min.js"></script>
<script src="./libs/jquery/jquery-ui.min.js"></script>
<script src="./libs/moment/min/moment.min.js"></script>
<script src="./libs/apexcharts/apexcharts.js"></script>
<script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./libs/peity/jquery.peity.min.js"></script>
<script src="./libs/chart.js/Chart.bundle.min.js"></script>
<script src="./libs/owl.carousel/owl.carousel.min.js"></script>
<script src="./libs/bootstrap/js/bootstrap.min.js"></script>
<script src="./libs/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="./js/countto.js"></script>
<script src="./libs/date-picker/datepicker.js"></script>
<script src="./libs/rating/js/custom-ratings.js"></script>
<script src="./libs/rating/js/jquery.barrating.js"></script>
<script src="./libs/circle-progress/circle-progress.min.js"></script>
<script src="./libs/simplebar/simplebar.min.js"></script>

<!-- APP JS -->
<script src="./js/main.js"></script>

<script src="./js/shortcode.js"></script>


</body>

</html>