<!DOCTYPE html>

<?php
include "./include/dbh.inc.php";

$preis = 100;

$sql = 'SELECT * FROM `produkt`';

$result = mysqli_query($conn, $sql);
?>

<html lang="DE">

<?php include 'layout/menu.php' ?>


<div class="main">

  <div class="main-content project">

    <?php include 'layout/head.php' ?>

    <div class="row">
      <div class="">

        <div class="row">
          <?php while ($produkt = mysqli_fetch_assoc($result)) { ?>
          <div class="col-3 col-xl-6 col-md-6 col-sm-12">
            <div class="box left-dot">
              <div class="box-body">
                <div class="row">
                  <div class="col-12 mb-10">
                    <div class="mt-0 text-start"> <a href="project-details.html"
                        class="box-title mb-0 mt-1 mb-3 font-w600 fs-18"><?= $produkt['produktName']; ?></a>
                      <p class="fs-14 font-w500 text-muted mb-6"><?= $produkt['referenz']; ?></p>
                      <span class="fs-13  mt-2 text-muted"><?= $produkt['inventor']; ?> Stück</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
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
<script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./libs/peity/jquery.peity.min.js"></script>
<script src="./libs/chart.js/Chart.bundle.min.js"></script>
<script src="./libs/owl.carousel/owl.carousel.min.js"></script>
<script src="./libs/bootstrap/js/bootstrap.min.js"></script>
<script src="./js/countto.js"></script>
<script src="./libs/circle-progress/circle-progress.min.js"></script>
<script src="./libs/pg-calendar-master/pignose.calendar.full.min.js"></script>
<script src="./libs/apexcharts/apexcharts.js"></script>
<script src="./libs/simplebar/simplebar.min.js"></script>

<!-- APP JS -->
<script src="./js/pages/chart-circle.js"></script>
<script src="./js/main.js"></script>
<script src="./js/pages/project.js"></script>
<script src="./js/shortcode.js"></script>
<script src="./js/script.js"></script>
<script src="./js/pages/dashboard.js"></script>
</body>

</html>