<?php

if (isset($_GET['submit'])) {
    $username = $_GET['username'];
    $vorname = $_GET['vorname'];
    $nachname = $_GET['nachname'];
    $email =  $_GET['email'];
    $telefonnummer = $_GET['telefonnummer'];
    $geschlecht = $_GET['geschlecht'];
    $addresse = $_GET['addresse'];
    $plz = $_GET['plz'];
    $stadt = $_GET['stadt'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Einzelheiten zum Kunden - Investal24
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

  <!-- Plugin -->
  <link rel="stylesheet" href="./libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="./libs/date-picker/datepicker.css">
  <link rel="stylesheet" href="./libs/datatable/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="./libs/rating/css/rating-themes.css">
  <!-- APP CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/grid.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/responsive.css">
</head>

<body class="sidebar-expand">

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
            <div class="dropdown-icon">
              <i class='bx bx-chevron-down'></i>
            </div>
          </a>
          <ul class="sidebar-menu sidebar-menu-dropdown-content">
            <li>
              <a href="index.html">
                Dashboard
              </a>
            </li>


          </ul>
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
                Kundenverwaltung
              </a>
            </li>

          </ul>
        </li>
        <li class="sidebar-submenu">
          <a href="project.html" class="sidebar-menu-dropdown">
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
          <a href="project.html" class="sidebar-menu-dropdown">
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
              <a href="Rechner.html">
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
        Kunden-Details
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
          <a class="dropdown-item text-danger" href="user-login.html"><i
              class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>Abmelden</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Header -->

  <!-- MAIN CONTENT -->
  <div class="main">
    <div class="main-content client project">
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
        <div class="col-8 col-xl-12">
          <div class="box pd-0">
            <div class="tab-menu-heading hremp-tabs p-0 ">
              <div class="tabs-menu1">
                <!-- Tabs -->
                <ul class="nav panel-tabs w-100 d-flex justify-content-between">
                  <li><a href="#tab6" data-bs-toggle="tab" class="active">Bestellung</a></li>
                  <li><a href="#tab8" data-bs-toggle="tab">Rechnung</a></li>
                  <li><a href="#tab10" data-bs-toggle="tab">Dokuments</a></li>
                </ul>
              </div>
            </div>

            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
              <div class="tab-content">

                <div class="tab-pane active" id="tab6">
                  <div class="box-body pl-15 pr-15 pb-20 table-responsive activity mt-10">
                    <table class="table table-vcenter text-nowrap table-bordered dataTable no-footer mw-100"
                      id="task-profile" role="grid">
                      <thead>
                        <tr class="top">
                          <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile"
                            rowspan="1" colspan="1" style="width: 222.312px;">Artikel</th>
                          <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile"
                            rowspan="1" colspan="1" style="width: 87.9844px;">Start</th>
                          <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile"
                            rowspan="1" colspan="1" style="width: 87.9844px;">Ablauf </th>
                          <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile"
                            rowspan="1" colspan="1" style="width: 71.875px;">Progress</th>
                          <th class="border-bottom-0 sorting_disabled fs-14 font-w500" rowspan="1" colspan="1"
                            style="width: 145.391px;">Aktion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="odd">
                          <td>
                            <a href="#" class="d-flex "> <span>Anlage Plan</span> </a>
                          </td>

                          <td>01-01-2022</td>
                          <td>01-01-2023</td>

                          <td><span class="badge badge-warning">On hold</span></td>
                          <td>
                            <div class="dropdown">
                              <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                    class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                    class="bx bx-edit mr-5"></i>Edit</a>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <tr class="odd">
                          <td>
                            <a href="#" class="d-flex "> <span>100 gramm Gold</span> </a>
                          </td>

                          <td>02-02-2022</td>
                          <td>04-02-2022</td>

                          <td><span class="badge badge-success">Geliefert</span></td>
                          <td>
                            <div class="dropdown">
                              <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                    class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                    class="bx bx-edit mr-5"></i>Edit</a>
                              </div>
                            </div>
                          </td>
                        </tr>




                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="tab-pane" id="tab8">
                  <div class="box-body">
                    <div class="table-responsive"> <a href="#" class="btn btn-primary btn-tableview">.</a>
                      <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="invoice-tables">
                        <thead>
                          <tr>
                            <th class="border-bottom-0">RechnungID</th>
                            <th class="border-bottom-0">Betrag</th>
                            <th class="border-bottom-0">Datum der Rechnung</th>
                            <th class="border-bottom-0">Fälligkeitsdatum</th>
                            <th class="border-bottom-0">Zahlung</th>
                            <th class="border-bottom-0">Status</th>
                            <th class="border-bottom-0">Aktionen</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> <a href="#">#INV-0478</a> </td>
                            <td>583,00 €</td>
                            <td>01-01-2022</td>
                            <td>14-02-2022</td>
                            <td> <span class="">583,00 €</span> </td>
                            <td><span class="badge badge-danger">Unbezahlt</span></td>
                            <td>
                              <div class="dropdown">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class='bx bx-dots-horizontal-rounded'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                      class="bx bx-trash"></i> Ansehen</a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                      class="bx bx-edit mr-5"></i>herunterladen</a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                      class="bx bx-trash"></i> bearbeiten</a>

                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> <a href="#">#INV-1245</a> </td>
                            <td>5232.00 €</td>
                            <td>02-02-2022</td>
                            <td>03-02-2022</td>
                            <td> <span class="">5232.00 €</span> </td>
                            <td><span class="badge badge-success-light">bezahlt</span></td>
                            <td>
                              <div class="dropdown">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class='bx bx-dots-horizontal-rounded'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                      class="bx bx-trash"></i> Ansehen</a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                      class="bx bx-edit mr-5"></i>herunterladen</a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                      class="bx bx-trash"></i> bearbeiten</a>

                                </div>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="tab10">
                  <div class="box-body">
                    <div class="table-responsive"> <a href="#" class="btn btn-primary btn-tableview">Dateien
                        hochladen</a>
                      <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="files-tables">
                        <thead>
                          <tr>
                            <th class="border-bottom-0 text-center w-5">No</th>
                            <th class="border-bottom-0">Datei Name</th>
                            <th class="border-bottom-0">Hochladen durch</th>
                            <th class="border-bottom-0">Aktionen</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">1</td>
                            <td> <a href="#" class="font-weight-semibold fs-14 mt-5">ausweis.pdf<span
                                  class="text-muted ms-2">(23 KB)</span></a>
                              <div class="clearfix"></div> <small class="text-muted">2 week ago</small>
                            </td>
                            <td>Client</td>
                            <td>
                              <div class="dropdown">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class='bx bx-dots-horizontal-rounded'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                      class="bx bx-trash"></i> Delete</a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                      class="bx bx-edit mr-5"></i>Edit</a>
                                </div>
                              </div>
                            </td>
                          </tr>



                          <tr>
                            <td class="text-center">7</td>
                            <td> <a href="#" class="font-weight-semibold fs-14 mt-5">kaufvertrag.pdf<span
                                  class="text-muted ms-2">(15 KB)</span></a>
                              <div class="clearfix"></div> <small class="text-muted">1 hours ago</small>
                            </td>
                            <td>Team Lead</td>
                            <td>
                              <div class="dropdown">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class='bx bx-dots-horizontal-rounded'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                      class="bx bx-trash"></i> Delete</a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                      class="bx bx-edit mr-5"></i>Edit</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>


        <div class="col-4 col-xl-12">
          <div class="box user-pro-list overflow-hidden mb-30">
            <div class="box-body">
              <div class="user-pic text-center">
                <div class="avatar ">
                  <img src="./images/profile/1.png" alt="">
                  <div class="pulse-css"></div>
                </div>
                <div class="pro-user mt-3">
                  <h5 class="pro-user-username text-dark mb-2 fs-15 mt-42 color-span"><?= $vorname . ' ' . $nachname ?>
                  </h5>
                </div>
              </div>
            </div>

          </div>
          <div class="modal custom-modal fade" id="delete_client" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="form-header">
                    <h3>Rechnung * INV-0478 * </h3>
                    <p>Rechnung Status bearbeiten?</p>
                  </div>
                  <div class="modal-btn delete-action">
                    <div class="row">
                      <div class="col-6 mb-0">
                        <a href="javascript:void(0);" class="btn btn-primary continue-btn">bezahlt</a>
                      </div>
                      <div class="col-6 mb-0">
                        <a href="javascript:void(0);" data-dismiss="modal"
                          class="btn btn-primary cancel-btn">Unbezahlt</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="box left-dot mb-30">
            <div class="box-header  border-0 pd-0">
              <div class="box-title fs-20 font-w600">Allgemeine Informationen</div>
            </div>
            <div class="box-body pt-20 user-profile">
              <div class="table-responsive">
                <table class="table mb-0 mw-100 color-span">
                  <tbody>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Client ID </span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $username ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Email ID</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $email ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Kontakt </span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $telefonnummer ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Geschlecht</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $geschlecht ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Addresse</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class=""><?= $addresse . ', ' . $plz . ' ' . $stadt ?></span> </td>
                    </tr>
                    <tr>
                      <td class="py-2 px-0"> <span class="w-50">Status</span> </td>
                      <td>:</td>
                      <td class="py-2 px-0"> <span class="badge badge-success">Active</span> </td>
                    </tr>
                  </tbody>
                </table>
              </div>
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