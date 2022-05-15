<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Backoffice - Investal24
  </title>
  <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <!-- BOXICONS -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/icons.min.css">

  <link rel="stylesheet" href="./libs/date-picker/datepicker.css">
  <!-- APP CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/grid.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/responsive.css">
</head>

<body class="sidebar-expand counter-scroll">

  <!-- SIDEBAR -->
  <!-- SIDEBAR -->
  <div class="sidebar">
    <div class="sidebar-logo">
      <a href="index.html">
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
          <a href="index.html" class="sidebar-menu-dropdown">
            <i class='bx bxs-home'></i>
            <span>Dashboard</span>

          </a>

        </li>
        <li class="sidebar-submenu">
          <a href="project.html" class="sidebar-menu-dropdown">
            <i class='bx bxs-bolt'></i>
            <span>Vertrieb</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">

            <li>
              <a href="project-details.html">
                Händler Verwaltung
              </a>
            </li>
            <li>
              <a href="new-project.html">
                Vermittler Verwaltung
              </a>
            </li>
          </ul>
        </li>

        <li class="sidebar-submenu">
          <a href="clients.html" class="sidebar-menu-dropdown">
            <i class='bx bxs-user'></i>
            <span>Kunden</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="clients.html">
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
              <a href="clients.html">
                Privatkunden Anfrage
              </a>
            </li>

            <li>
              <a href="clients.html">
                Geschäftskunden Anfrage
              </a>
            </li>

          </ul>
        </li>

        <li class="sidebar-submenu">
          <a href="clients.html" class="sidebar-menu-dropdown">
            <i class='bx bxs-area'></i>
            <span>Website Investal24</span>
            <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="clients.html">
                Seiten & Text verwalten
              </a>
            </li>
            <li>
              <a href="client-details.html">
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
              <a href="new-produkt.html">
                Produkt hinzufügen
              </a>
            </li>
            <li>
              <a href="Produktshow.html">
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
        Produkt hinzufügen
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
                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                <div class="input-group-append">
                  <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt'></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

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
          <a class="dropdown-item text-danger" href="user-login.html"><i
              class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>Abmelden</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Header -->

  <!-- MAIN CONTENT -->
  <div class="main">

    <div class="main-content project">
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
        <div class="col-12">
          <div class="box">
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label">Produkt Name</label> <input class="form-control"
                      placeholder="produkt Name"> </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label">Produkt referenz</label> <input
                      class="form-control" placeholder="S-0000"> </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label">Gewicht</label> <input class="form-control"
                      placeholder="0.0 g"> </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label"> Kategorie </label> <input class="form-control"
                      placeholder="G-S-P"> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label"> inventor </label> <input class="form-control"
                      placeholder="0 Stück"> </div>
                </div>

                <div class="col-md-6 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label">Bestellung Datum:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"> <i class='bx bx-calendar'></i> </div>
                      </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
                    </div>
                  </div>
                </div>

              </div>


              <div class="form-group mb-24"> <label class="form-label">Produnkt Beschreibung :</label>
                <textarea class="form-control" name="text" cols="30" rows="10"></textarea>
              </div>

              <div class="col-md-12 col-sm-12 mb-24">
                <div class="form-group"> <label class="form-label"> ZusatzInfos </label> <input type="text"
                    class="form-control" placeholder="ZusatzInfos"> </div>
              </div>


              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="form-group"> <label class="form-label">Foto:</label>
                    <div class="input-group file-browser"> <input type="file"
                        class="form-control border-end-0 browse-file" readonly=""> <label
                        class="input-group-append mb-0"> <span class="btn ripple btn-light"> Browse <input type="file"
                            class="file-browserinput" style="display: none;" multiple=""> </span> </label> </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="gr-btn mt-15"> <a href="#" class="btn btn-primary btn-lg fs-16">Hinzufügen</a> </div>
          </div>
        </div>

      </div>


      <div id="add_project" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Create Project</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Project Name</label>
                      <input class="form-control" value="" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Client</label>
                      <select class="select">
                        <option>Client 1</option>
                        <option>Client 2</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Start Date</label>
                      <div class="cal-icon">
                        <input class="form-control " type="date">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>End Date</label>
                      <div class="cal-icon">
                        <input class="form-control " type="date">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Rate</label>
                      <input placeholder="$50" class="form-control" value="" type="text">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>&nbsp;</label>
                      <select class="select">
                        <option>Hourly</option>
                        <option selected>Fixed</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Priority</label>
                      <select class="select">
                        <option selected>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                </div>
                <div class="form-group">
                  <label>Upload Files</label>
                  <input class="form-control" type="file">
                </div>
                <div class="submit-section">
                  <button class="btn btn-primary submit-btn">Save</button>
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
  <script src="./libs/date-picker/datepicker.js"></script>
  <script src="./libs/simplebar/simplebar.min.js"></script>


  <!-- APP JS -->
  <script src="./js/main.js"></script>
  <script src="./js/shortcode.js"></script>
  <script src="./js/pages/datepicker.js"></script>

  <script>
  </script>
</body>

</html>