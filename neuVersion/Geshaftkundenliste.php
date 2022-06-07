<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Investal24 - Geschäftskunden Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
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
								Geschäftskunden Anfrage
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
            <div class="container-fluid">
		
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashbord</a></li>
						<li class="breadcrumb-item active"><a href="#">Geschäftskunden</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                

					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Geschäftskunden Liste</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkAll" required="">
														<label class="custom-control-label" for="checkAll"></label>
													</div>
												</th>
                                                <th>ID</th>
                                                <th>Vor/-Nachname</th>
                                                <th>Firma</th>
                                                <th>Rechform</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#G-00001</td>
                                                <td>Oliver Schnur</td>
                                                <td>Investal24</td>
                                                <td>GmbH</td>
                                                <td>o.schnur@schnur-Gruppe.de</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Neu Kunden
													</span>
												</td>
                                               
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
														
															<a class="dropdown-item" href="profilGK.php"> Details ansehen</a>
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
        
        

        <?php include 'layout/Footer.php' ?>

</body>
</html>