<?php
include "include/dbh.inc.php";

$sql = 'SELECT * FROM `kunden`';

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Kunden - Investal24
  </title>
  <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <!-- BOXICONS -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

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
            <div class="dropdown-icon">
              <i class='bx bx-chevron-down'></i>
            </div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="index.php">
                Dashboard
              </a>
            </li>


          </ul>
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
                Kundenverwaltung
              </a>
            </li>

          </ul>
        </li>
        <li class="sidebar-submenu">
          <a href="project.php" class="sidebar-menu-dropdown">
            <i class='bx bxs-bell-ring'></i>
            <span>Goldankauf</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="">
                Privatkunden Anfrage
              </a>
            </li>

            <li>
              <a href="">
                Geschäftskunden Anfrage
              </a>
            </li>

          </ul>
        </li>


        <li class="sidebar-submenu">
          <a href="project.php" class="sidebar-menu-dropdown">
            <i class='bx bxs-area'></i>
            <span>Website Investal24</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="">
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
        Kunden Liste
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
          <a class="dropdown-item text-danger" href="user-login.php"><i
              class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>Abmelden</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Header -->

  <!-- MAIN CONTENT -->
  <div class="main">
    <div class="main-content client">
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
                    <a class="font-w600 h5" href="message.php">View All</a>
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
                    <a class="font-w600 h5" href="message.php">View All</a>
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
                  <a class="font-w600 h5" href="message.php">View All</a>
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