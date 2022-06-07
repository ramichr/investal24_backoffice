<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Investal24 - Kunden Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
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
								Kunden Liste
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
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModalside">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Event</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Event Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Event Date</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Description</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">Create</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Daschbord</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Kunden</a></li>
					</ol>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                          <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                <div class="d-flex mb-3">
                                <input class="form-control input-daterange-datepicker" type="date" name="daterange">
						    <a href="javascript:void(0)" class="btn btn-primary text-nowrap"><i class="fa fa-file-text scale5 mr-3" aria-hidden="true"></i>Generate Report</a>
					    </div>
                    
                                    <table class="table table-responsive-lg mb-0 table-striped">
                                        <thead>
                                            <tr>
                                             
                                                <th>Vor/-Nachname</th>
                                                <th>Email</th>
                                                <th>Telefon</th>
                                                <th>Addresse</th>
                                                <th>Aktion</th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
                                            <tr class="btn-reveal-trigger">
                                              
                                                <td class="py-3">
                                                    <a href="#">
                                                        <div class="media d-flex align-items-center">
                                                           
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Hammadi Elloumi</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">elloumiha@gmail.com</td>
                                                <td class="py-2">+491727898041</td>
                                                <td class="py-2 pl-5 wspace-no">Gruitener Str 68, <br>42327 Wuppertal</td>
                                                <td class="py-2 text-right">
                                                    <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                                            <div class="py-2"><a class="dropdown-item"  href="kunde-profil.php">Profil Sehen</a><a class="dropdown-item text-danger" href="#!">Löschen</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                              
  
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