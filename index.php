<?php
session_start();

if (!isset($_SESSION["personalId"])) {
  include_once './login.php';
} else { ?>


<!DOCTYPE html>
<html lang="DE">


<?php include 'layout/menu.php' ?>


<div class="main">


  <div class="main-content dashboard">

    <?php include 'layout/head.php' ?>


    <div class="row">
      <div class="col-12 col-md-12 col-sm-12 mb-0">

        <div class="row">
          <div class="col-12">
            <!-- CUSTOMERS CHART -->
            <div class="box f-height">
              <div class="box-header d-flex justify-content-between mb-wrap">
                <h3 class="mt-9 ml-5">Gold Kauf Analyse</h3>
                <ul class="card-list mb-0">
                  <li class="custom-label"><span></span>Aktuelles Kurs </li>
                  <li class="custom-label"><span></span>Kauf kurs</li>
                </ul>
              </div>
              <div class="box-body pt-20">
                <div id="customer-chart"></div>
              </div>
            </div>
            <!-- END CUSTOMERS CHART -->
          </div>
          <div class="col-6 col-xl-12 col-sm-12">
            <div class="box">
              <div class="box-body d-flex pb-0">
                <div class="me-auto">
                  <h5 class="box-title">Total Anlage Pläne</h5>
                  <div class="d-flex align-items-center">
                    <h4 class="mb-0 font-wb fs-30 mt-23">78</h4>
                    <div class="text-primary transaction-caret">
                      <i class="bx bxs-up-arrow"></i>
                      <p class="mb-0 text-primary fs-18 font-w400 mt-14 ml-7">+0.5%</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-6 col-xl-12 col-sm-12">
            <div class="box">
              <div class="box-body d-flex pb-0">
                <div class="me-auto">
                  <h5 class="box-title">Total Spar Pläne</h5>
                  <div class="d-flex align-items-center">
                    <h4 class="mb-0 font-wb fs-30 mt-23">25</h4>
                    <div class="text-primary transaction-caret">
                      <i class="bx bxs-up-arrow"></i>
                      <p class="mb-0 text-primary fs-18 font-w400 mt-14 ml-7">+0.9%</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>



        </div>
      </div>

      <div class="col-12 col-sm-12">
        <div class="box">
          <div class="box-header">
            <div class="me-auto">
              <h4 class="card-title">Tresor Investal24</h4>
            </div>
          </div>
          <div class="box-body pt-0">
            <div class="row">
              <div class="col-6 col-xl-12 w-sm-100 mb-0">
                <ul class="box-list mt-26 pr-67">
                  <li><span class="bg-blue square"></span>999.9 Fein Gold<span>25%</span></li>
                  <li><span class="bg-success square"></span>986 Gold<span>18%</span></li>
                  <li><span class="bg-warning square"></span>999.9 Feinsilber<span>17%</span></li>
                  <li><span class="bg-blue square"></span>999.9 Feinplatin<span>12.50%</span></li>
                  <li><span class="bg-success square"></span>999.9 Feinpalladium<span>12.50%</span></li>
                  <li><span class="bg-warning square"></span>Andere<span>12.50%</span></li>
                </ul>
              </div>
              <div class="col-6 col-xl-12 w-sm-100 mb-0">
                <!-- <canvas id="doughnut-chart" width="240" height="240"></canvas> -->
                <div class="canvas-container">
                  <canvas id="chartjs-4" class="chartjs" width="100" height="100"></canvas>
                  <div class="chart-data">
                    <div data-percent="25" data-color="#3C21F7" data-label="Fein Gold"></div>
                    <div data-percent="18" data-color="#00BC8B" data-label="986er Gold"></div>
                    <div data-percent="17" data-color="#FFB800" data-label="999.9er Feinsilber"></div>
                    <div data-percent="12.5" data-color="#00ECCC" data-label="999.9er Feinplatin"></div>
                    <div data-percent="12.5" data-color="#EF7F5A" data-label="999.9er Feinpalladium"></div>
                    <div data-percent="12.5" data-color="#5D45FB" data-label="Andere"></div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12">
        <div class="box">
          <div class="box-header pt-0">
            <div class="me-auto">
              <h4 class="card-title mb-0">Investal Chat</h4>
            </div>
          </div>
          <div class="box-body pb-0 pt-39">
            <ul class="message mb-2">
              <li class="dlab-chat-user">
                <div class="d-flex bd-highlight">
                  <div class="img_cont">
                    <img src="./images/avatar/message-03.png" class="rounded-circle user_img" alt="" />
                  </div>
                  <div class="user_info">
                    <a class="h6" href="message.html">Oliver Schnur</a>
                    <p class="fs-14 mb-0">guten abend , ich habe ein Frage bezüglich mein Sparplan?</p>
                  </div>
                </div>
              </li>
              <li class="dlab-chat-user">
                <div class="d-flex bd-highlight">
                  <div class="img_cont border-pink">
                    <img src="./images/avatar/message-01.png" class="rounded-circle user_img" alt="" />
                  </div>
                  <div class="user_info">
                    <a class="h6" href="message.html">Tefik Gueder</a>
                    <p class="fs-14 mb-0">ich habe keine kaufvertrag bekommen </p>
                  </div>
                </div>
              </li>
              <li class="dlab-chat-user">
                <div class="d-flex bd-highlight">
                  <div class="img_cont border-green">
                    <img src="./images/avatar/message-02.png" class="rounded-circle user_img" alt="" />
                  </div>
                  <div class="user_info">
                    <a class="h6" href="message.html">Steve Ford</a>
                    <p class="fs-14 mb-0">ich möchte meine Anlegeplan wiederrufen</p>
                  </div>
                </div>
              </li>

            </ul>
          </div>
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
<script src="./libs/moment/min/moment.min.js"></script>
<script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./libs/peity/jquery.peity.min.js"></script>
<script src="./libs/chart.js/Chart.bundle.min.js"></script>
<script src="./libs/owl.carousel/owl.carousel.min.js"></script>
<script src="./libs/bootstrap/js/bootstrap.min.js"></script>
<script src="./libs/apexcharts/apexcharts.js"></script>
<script src="./libs/simplebar/simplebar.min.js"></script>

<!-- APP JS -->
<script src="./js/main.js"></script>
<script src="./js/dashboard.js"></script>
<script src="./js/shortcode.js"></script>
<script src="./js/pages/dashboard.js"></script>


</body>

</html>
<?php } ?>