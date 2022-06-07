<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Investal24 - Rechnungen Dashboard</title>
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
								Rechnungen
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
		
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashbord</a></li>
						<li class="breadcrumb-item active"><a href="#">Rechnungen</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">

					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Alle Rechnungen Investal24</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>ID Nr.</th>
                                                <th>Kunde Name</th>
                                                <th>Rechnung Nr.</th>
                                                <th>Type </th>
												<th>verwendungszweck </th>
                                                <th>Datum</th>
                                                <th>G.Betrag</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                            <tr>
                                                <td>01</td>
                                                <td>Oliver Schnur</td>
                                                <td>#54605</td>
                                                <td>Rechnung</td>
                                                <td>K-54986-2476</td>
                                                <td>02.08.2022</td>
                                                <td><strong>5622 €</strong></td>

                                                <td>
                                                    <div class="d-flex">
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-print"></i></a>
													</div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>02</td>
                                                <td>Rami Chickrouhou</td>
                                                <td>#54605</td>
                                                <td>SEPA</td>
                                                <td>K-54986-2476</td>
                                                <td>08.08.2022</td>
                                                <td><strong>500 €</strong></td>

                                                <td>
                                                    <div class="d-flex">
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-print"></i></a>
													</div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>03</td>
                                                <td>Hammadi Elloumi</td>
                                                <td>#54605</td>
                                                <td>Rechnung</td>
                                                <td>K-54986-2476</td>
                                                <td>02.08.2022</td>
                                                <td><strong>102 €</strong></td>

                                                <td>
                                                    <div class="d-flex">
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-print"></i></a>
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