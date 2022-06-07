<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Investal24 - Kunden Details Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
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
								Kunden Details
                            </div>
                        </div>
					
						<?php include 'layout/loginBarre.php' ?>

                    </div>
                </nav>
            </div>
        </div>
		<?php include 'layout/MenuSidebarre.php' ?>


        <div class="content-body">
            <div class="container-fluid">

          
                <!-- row -->
                <div class="row">
                  
					<div class="col-xl-12">
                        <div class="card">
							<div class="profile card card-body px-3 pt-3 pb-0">
								<div class="profile-personal-info">
									<h4 class="text-primary mb-4">Allgemeine Informationen
									</h4>
									<div class="row mb-2">
										
										<div class="col-sm-3 col-5">
											<h5 class="f-w-500">Kunde Name <span class="pull-right">:</span>
											</h5>
										</div>
										<div class="col-sm-9 col-7"><span>Hammadi Elloumi</span>
										</div>
									</div>
									<div class="row mb-2">
										
										<div class="col-sm-3 col-5">
											<h5 class="f-w-500">Kunden ID <span class="pull-right">:</span>
											</h5>
										</div>
										<div class="col-sm-9 col-7"><span>k-hamell566929</span>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-sm-3 col-5">
											<h5 class="f-w-500">Email <span class="pull-right">:</span>
											</h5>
										</div>
										<div class="col-sm-9 col-7"><span>elloumiha@gmail.com </span>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-sm-3 col-5">
											<h5 class="f-w-500">Tel Kontakt <span class="pull-right">:</span></h5>
										</div>
										<div class="col-sm-9 col-7"><span>+491727898041</span>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-sm-3 col-5">
											<h5 class="f-w-500">Geschlecht <span class="pull-right">:</span>
											</h5>
										</div>
										<div class="col-sm-9 col-7"><span>männlich</span>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-sm-3 col-5">
											<h5 class="f-w-500">Addresse <span class="pull-right">:</span></h5>
										</div>
										<div class="col-sm-9 col-7"><span>GruitenerStr 68, 42327 Wuppertal</span>
										</div>
									</div>
								
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  
					<div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Bestellungen</a>
                                            </li>
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">Rechnungen</a>
                                            </li>
                                            <li class="nav-item"><a href="#kom" data-toggle="tab" class="nav-link">Kommunikation</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
												<div class="col-xl-12">
													<div class="tab-content">
														<div id="All" class="tab-pane active fade show">
															<div class="table-responsive">
																<table id="example2" class="table card-table display dataTablesCard">
																	<thead>
																		<tr>
																			<th>Bst. ID</th>
																			<th>Datum</th>
																			<th>Produkt Name</th>
																			<th>Status</th>
																			<th>Aktion</th>

																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>#0012451</td>
																			<td>04/08/2020<br>12:34 AM</td>
																			<td><span class="text-nowrap">Anlage Plan </span></td>
																			<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">On Hold</a></td>
																			<td>
                                                                                <div class="dropdown">
                                                                                    <button type="button" class="badge light badge-warning" data-toggle="dropdown">
                                                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        
                                                                                        <a class="dropdown-item" href="#">Ansehen</a>
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
                                            <div id="about-me" class="tab-pane fade">
                                            
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Rechnung Kunde : Hammadi Elloumi</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-responsive-md">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="width80">#RechnungID</th>
                                                                            
                                                                            <th>Produkt</th>
                                                                            <th>Betrag</th>
                                                                            <th>Datum der Rechnung</th>
                                                                            <th>Fälligkeitsdatum</th>
                                                                            <th>Status</th>
                                                                            <th>Aktion</th>
                                                                           
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>01</strong></td>
                                                                            <td>AnlagePlan</td>
                                                                            <td>5000 €</td>
                                                                            <td>01.07.2022</td>
                                                                            <td>14.07.2022</td>
                                                                          
                                                                            <td><span class="badge light badge-warning">Pending</span></td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <button type="button" class="badge light badge-warning" data-toggle="dropdown">
                                                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#">Bezahlt</a>
                                                                                        <a class="dropdown-item" href="#">Neu Drucken</a>
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
                                          

                                            <div id="kom" class="tab-pane fade">
                                                <div class="compose-content">
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg-transparent" placeholder=" To:">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg-transparent" placeholder=" Subject:">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="15" placeholder="Enter text ..."></textarea>
                                                        </div>
                                                    </form>
                                                 
                                                </div>
                                                <div class="text-left mt-4 mb-2">
                                                    <button class="btn btn-primary btn-sl-sm mr-2" type="button"><span class="mr-2"><i class="fa fa-paper-plane"></i></span>Send</button>
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
        
        <?php include 'layout/Footer.php' ?>
	
</body>
</html>