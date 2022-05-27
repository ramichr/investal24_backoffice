<?php
session_start();
?>

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
          <a href="#" class="sidebar-menu-dropdown">
            <i class='bx bxs-bolt'></i>
            <span>Vertrieb</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">

            <li>
              <a href="Gesch.php">
                Geschäftskunden Verwaltung
              </a>
            </li>
            <li>
              <a href="vermit.php">
                Vermittler Verwaltung
              </a>
            </li>
            <li>
              <a href="rechnung.php">
                Rechnung Verwalten
              </a>
            </li>
            <li>
              <a href="fix.php">
                Fixierung
              </a>
            </li>
          </ul>
        </li>

        <li class="sidebar-submenu">
          <a href="#" class="sidebar-menu-dropdown">
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
          <a href="#" class="sidebar-menu-dropdown">
            <i class='bx bxs-bell-ring'></i>
            <span>Goldankauf</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="Privatanf.php">
                Privatkunden Anfrage
              </a>
            </li>

            <li>
              <a href="GeschAnf.php">
                Geschäftskunden Anfrage
              </a>
            </li>

          </ul>
        </li>

        <li class="sidebar-submenu">
          <a href="#" class="sidebar-menu-dropdown">
            <i class='bx bxs-area'></i>
            <span>Website Investal24</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="Web.php">
                Seiten & Text verwalten
              </a>
            </li>
            <li>
              <a href="Rechner.php">
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
            <span class="d-block fs-20 font-w600"><?= $_SESSION["vorname"] . ' ' . $_SESSION["nachname"] ?></span>
            <span class="d-block mt-7"><?= $_SESSION["email"] ?></span>
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