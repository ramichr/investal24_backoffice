<?php
session_start();

if (!(isset($_SESSION["personalId"]))) {
    include_once 'login.php';
} else { ?>
<!DOCTYPE html>
<html lang="DE">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Dashboard - Investal24
  </title>
  <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <!-- BOXICONS -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- Plugin -->
  <link rel="stylesheet" href="./libs/owl.carousel/assets/owl.carousel.min.css">

  <!-- APP CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/grid.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/responsive.css">
</head>

<body class="sidebar-expand">

  <!-- SIDEBAR -->
  <div class="sidebar">
    <div class="sidebar-logo">
      <a href="index.php">
        <img src="./images/logo.png" alt="Protend logo">
      </a>
      <div class="sidebar-close" id="sidebar-close">
        <i class='bx bx-left-arrow-alt'></i>
      </div>
    </div>
    <!-- SIDEBAR MENU -->
    <div class="simlebar-sc" data-simplebar>
      <ul class="sidebar-menu tf">
        <li class="sidebar-submenu">
          <a href="index.php" class="sidebar-menu-dropdown">
            <i class='bx bxs-home'></i>
            <span>Dashboard</span>

          </a>

        </li>
        <li class="sidebar-submenu">
          <a href="project.php" class="sidebar-menu-dropdown">
            <i class='bx bxs-bolt'></i>
            <span>Vertrieb</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">

            <li>
              <a href="project-details.php">
                Händler Verwaltung
              </a>
            </li>
            <li>
              <a href="new-project.php">
                Vermittler Verwaltung
              </a>
            </li>
          </ul>
        </li>

        <li class="sidebar-submenu">
          <a href="clients.php" class="sidebar-menu-dropdown">
            <i class='bx bxs-user'></i>
            <span>Kunden</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="clients.php">
                Kunden Verwaltung
              </a>
            </li>

          </ul>
        </li>

        <li class="sidebar-submenu">
          <a href="clients.html" class="sidebar-menu-dropdown">
            <i class='bx bxs-bell-ring'></i>
            <span>Goldankauf</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="clients.php">
                Privatkunden Anfrage
              </a>
            </li>

            <li>
              <a href="clients.php">
                Geschäftskunden Anfrage
              </a>
            </li>

          </ul>
        </li>

        <li class="sidebar-submenu">
          <a href="clients.php" class="sidebar-menu-dropdown">
            <i class='bx bxs-area'></i>
            <span>Website Investal24</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="clients.php">
                Seiten & Text verwalten
              </a>
            </li>
            <li>
              <a href="client-details.php">
                Rechner
              </a>
            </li>
          </ul>
        </li>

        <li class="sidebar-submenu">
          <a href="#" class="sidebar-menu-dropdown">
            <i class='bx bxs-shopping-bag'></i>
            <span>Shop</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="new-produkt.php">
                Produkt hinzufügen
              </a>
            </li>
            <li>
              <a href="produkt-show.php">
                Produkt anzeigen
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </div>

    <!-- END SIDEBAR MENU -->
  </div>
  <!-- END SIDEBAR -->
  <!-- Main Header -->
  <div class="main-header">
    <div class="d-flex">
      <div class="mobile-toggle" id="mobile-toggle">
        <i class='bx bx-menu'></i>
      </div>
      <div class="main-title">
        Dashboard
      </div>
    </div>

    <div class="d-flex align-items-center">

      <!-- App Search-->
      <form class="app-search d-none d-lg-block">
        <div class="position-relative">
          <input type="text" class="form-control" placeholder="Suchen">
          <span class="bx bx-search-alt"></span>
        </div>
      </form>
      <div class="dropdown d-inline-block d-lg-none ms-2">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class='bx bx-search-alt'></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

          <form class="p-3">
            <div class="form-group m-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Suchen ..." aria-label="Recipient's username">
                <div class="input-group-append">
                  <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt'></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>


      <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
            </div> -->
      <div class="dropdown d-inline-block mt-12">
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="rounded-circle header-profile-user" src="./images/profile/profile.png" alt="Header Avatar">
          <span class="pulse-css"></span>
          <span class="info d-xl-inline-block  color-span">
            <span class="d-block fs-20 font-w600">Hammadi Elloumi</span>
            <span class="d-block mt-7">h.elloumi@konzept-fabrik.com</span>
          </span>

          <i class='bx bx-chevron-down'></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
          <!-- item-->
          <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
            <span>Profile</span></a>
          <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span>Meine
              Geldbörse</span></a>
          <a class="dropdown-item d-block" href="#"><i class="bx bx-wrench font-size-16 align-middle me-1"></i>
            <span>Einstellungen</span></a>
          <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
            <span>Sperre</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-danger" href="include/logout.inc.php"><i
              class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>Abmelden</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Header -->
  <!-- MAIN CONTENT -->

  <div class="main">


    <div class="main-content dashboard">
      <div class="row">
        <div class="col-12">
          <div class="box card-box">


            <div class="icon-box bg-color-1">
              <div class="icon bg-icon-1">
                <i class='bx bxs-shopping-bag-alt'></i>
              </div>
              <div class="content click-c">
                <h5 class="title-box">Shop Bestellung</h5>
                <p class="color-1 mb-0 pt-4">1 Neu karte Bestellung</p>
              </div>
              <div class="notification-list card">
                <div class="top box-header">
                  <h5>Informationen</h5>

                </div>
                <div class="pd-1r">
                  <div class="divider"></div>
                </div>

                <div class="box-body">
                  <ul class="list">
                    <li class="d-flex no-seen">
                      <div class="img-mess"><img class="mr-14" src="./images/avatar/avt-1.png" alt="avt"></div>
                      <div class="info">
                        <a href="#" class="font-w600 mb-0 color-primary">1 gramm gold Kart</a>
                      </div>
                    </li>



                  </ul>
                  <div class="btn-view">
                    <a class="font-w600 h5" href="message.html">View All</a>
                  </div>
                </div>

              </div>
            </div>


            <div class="icon-box bg-color-2">
              <div class="icon bg-icon-2">
                <i class='bx bxs-bug-alt'></i>
              </div>
              <div class="content click-c">
                <h5 class="title-box">Händler Anfrage</h5>
                <p class="color-2 mb-0 pt-4"> 2 Neu Anfrage</p>
              </div>
              <div class="notification-list card">
                <div class="top box-header">
                  <h5>Informationen</h5>

                </div>
                <div class="pd-1r">
                  <div class="divider"></div>
                </div>

                <div class="box-body">
                  <ul class="list">
                    <li class="d-flex no-seen">
                      <div class="img-mess"><img class="mr-14" src="./images/avatar/avt-12.png" alt="avt"></div>
                      <div class="info">
                        <a href="#" class="font-w600 mb-0 color-primary">muster mann</a>
                      </div>
                    </li>

                    <li class="d-flex">
                      <div class="img-mess"><img class="mr-14" src="./images/avatar/avt-12.png" alt="avt"></div>
                      <div class="info">
                        <a href="#" class="font-w600 mb-0 color-primary">Max muster</a>
                      </div>
                    </li>

                  </ul>
                  <div class="btn-view">
                    <a class="font-w600 h5" href="message.html">View All</a>
                  </div>
                </div>

              </div>
            </div>

            <div class="icon-box bg-color-3">
              <div class="icon bg-icon-3">
                <i class='bx bxs-badge'></i>
              </div>
              <div class="content click-c">
                <h5 class="title-box">Vermittler </h5>
                <p class="color-3 mb-0 pt-4"> 0 Neu Anfrage</p>
              </div>
              <div class="notification-list card">
                <div class="top box-header">
                  <h5>Informationen</h5>

                </div>
                <div class="pd-1r">
                  <div class="divider"></div>
                </div>
                <div class="btn-view">
                  <a class="font-w600 h5" href="message.html">View All</a>
                </div>


              </div>
            </div>


            <div class="icon-box bg-color-4">
              <div class="icon bg-icon-4">
                <i class='bx bxs-bank'></i>
              </div>
              <div class="content click-c">
                <h5 class="color-white">Investal Kunden </h5>
                <p class="color-white mb-0 pt-4"> 125 Kunde</p>
              </div>

            </div>

          </div>
        </div>

      </div>
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