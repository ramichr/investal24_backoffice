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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
                Produkt Investal
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
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-search-alt' ></i>
                    </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Suchen ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt' ></i></button>
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
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="./images/profile/profile.png"
                            alt="Header Avatar">
                        <span class="pulse-css"></span>
                        <span class="info d-xl-inline-block  color-span">
                            <span class="d-block fs-20 font-w600">Hammadi Elloumi</span>
                            <span class="d-block mt-7" >h.elloumi@konzept-fabrik.com</span>
                        </span>
                            
                        <i class='bx bx-chevron-down'></i>
                    </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span>Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span>Meine Geldbörse</span></a>
                    <a class="dropdown-item d-block" href="#"><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span>Einstellungen</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span>Sperre</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="user-login.html"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>Abmelden</span></a>
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
                                <p class="color-white mb-0 pt-4"> 125  Kunde</p>
                            </div>
                         
                        </div>


                       





                    </div>
                </div>

            </div>


            <div class="row">
                <div class="">
                
                    <div class="row">

                        <div class="col-3 col-xl-6 col-md-6 col-sm-12">
                            <div class="box left-dot">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12 mb-10">
                                            <div class="mt-0 text-start"> <a href="project-details.html" class="box-title mb-0 mt-1 mb-3 font-w600 fs-18">2.0G FEINGOLDBARREN</a>
                                                <p class="fs-14 font-w500 text-muted mb-6">999.9 Fein gold</p>
                                                <span class="fs-13  mt-2 text-muted">10 Stück</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
              
                            </div>
                        </div>

                        <div class="col-3 col-xl-6 col-md-6 col-sm-12">
                            <div class="box left-dot">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12 mb-10">
                                            <div class="mt-0 text-start"> <a href="project-details.html" class="box-title mb-0 mt-1 mb-3 font-w600 fs-18">2.0G FEINGOLDBARREN</a>
                                                <p class="fs-14 font-w500 text-muted mb-6">999.9 Fein gold</p>
                                                <span class="fs-13  mt-2 text-muted">10 Stück</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
              
                            </div>
                        </div>

                        <div class="col-3 col-xl-6 col-md-6 col-sm-12">
                            <div class="box left-dot">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12 mb-10">
                                            <div class="mt-0 text-start"> <a href="project-details.html" class="box-title mb-0 mt-1 mb-3 font-w600 fs-18">2.0G FEINGOLDBARREN</a>
                                                <p class="fs-14 font-w500 text-muted mb-6">999.9 Fein gold</p>
                                                <span class="fs-13  mt-2 text-muted">10 Stück</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
              
                            </div>
                        </div>



                        <div class="col-3 col-xl-6 col-md-6 col-sm-12">
                            <div class="box left-dot">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12 mb-10">
                                            <div class="mt-0 text-start"> <a href="project-details.html" class="box-title mb-0 mt-1 mb-3 font-w600 fs-18">2.0G FEINGOLDBARREN</a>
                                                <p class="fs-14 font-w500 text-muted mb-6">999.9 Fein gold</p>
                                                <span class="fs-13  mt-2 text-muted">10 Stück</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
              
                            </div>
                        </div>

                        <div class="col-3 col-xl-6 col-md-6 col-sm-12">
                            <div class="box left-dot">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12 mb-10">
                                            <div class="mt-0 text-start"> <a href="project-details.html" class="box-title mb-0 mt-1 mb-3 font-w600 fs-18">2.0G FEINGOLDBARREN</a>
                                                <p class="fs-14 font-w500 text-muted mb-6">999.9 Fein gold</p>
                                                <span class="fs-13  mt-2 text-muted">10 Stück</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
              
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