<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Investal24 -  Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>


    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

	<?php include 'layout/logo.php' ?>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Dashboard
                            </div>
                        </div>
						 <!--* Menu Include *-->

						 <?php include 'layout/loginBarre.php' ?>
                    
                    </div>
                </nav>
            </div>
        </div>

		 <?php include 'layout/MenuSidebarre.php' ?>
        
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
			
				<div class="row">
				
					<div class="col-xl-12 col-xxl-8">

					<div class="row">
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="widget-stat card">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="mr-3 bgl-primary text-primary">
											<!-- <i class="ti-user"></i> -->
											<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
												<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
												<circle cx="12" cy="7" r="4"></circle>
											</svg>
										</span>
										<div class="media-body">
											<p class="mb-1">Investal24 Kunden</p>
											<h4 class="mb-0">2</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
	
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="widget-stat card">
								<div class="card-body  p-4">
									<div class="media ai-icon">
										<span class="mr-3 bgl-danger text-danger">
											<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
												<line x1="12" y1="1" x2="12" y2="23"></line>
												<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
											</svg>
										</span>
										<div class="media-body">
											<p class="mb-1">Investal24 Geschäftskunden</p>
											<h4 class="mb-0">2</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
	
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="widget-stat card">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="mr-3 bgl-warning text-warning">
											<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
												<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
												<polyline points="14 2 14 8 20 8"></polyline>
												<line x1="16" y1="13" x2="8" y2="13"></line>
												<line x1="16" y1="17" x2="8" y2="17"></line>
												<polyline points="10 9 9 9 8 9"></polyline>
											</svg>
										</span>
										<div class="media-body">
											<p class="mb-1">Shop Bestellung</p>
											<h4 class="mb-0">0</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
	
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="widget-stat card">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="mr-3 bgl-success text-success">
											<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
												<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
												<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
												<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
											</svg>
										</span>
										<div class="media-body">
											<p class="mb-1">Goldankauf</p>
											<h4 class="mb-0">0</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						

					
						<div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Offen Kunden Bestellungen bzw. Anfragen</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kunden Nr.</th>
                                                <th scope="col">Kunden Name</th>
                                                <th scope="col">Datum</th>
												<th scope="col">Betrag</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aktion</th>
                                              
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12</td>
												<td>Hammadi Elloumi</td>
                                           
                                                <td>01-07-2022</td>
                                             
                                                <td>320,20 €</td>

												<td><span class="badge badge-rounded badge-danger">Nicht bearbeitet</span></td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Bearbeiten</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Stonieren</a>
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


            </div>
        </div>





<?php include 'layout/Footer.php' ?>
</body>
</html>