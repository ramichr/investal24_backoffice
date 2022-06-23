<?php
include "includes/dbh.inc.php";

$sql = "SELECT * FROM `shop_bestellung` AS sb INNER JOIN `produkt` AS p

ON sb.`produktId`= p.`produktId`";

$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="DE">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Investal24 - Shop Bestellung Liste </title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
  <!-- Datatable -->
  <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
  <!-- Custom Stylesheet -->
  <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
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
                Bestellungen
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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Shop Bestellung</a></li>
          </ol>
        </div>



        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Bestellung Tabelle</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="display min-w850">
                    <thead>
                      <tr>
                        <th>Bestellung</th>
                        <th>Datum</th>
                        <th>Gesamtbetrag</th>
                        <th>Aktion</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?= $row['produktName'] ?></td>
                        <td><?= $row['datum'] ?></td>
                        <td><?= $row['preis'] ?> €</td>
                        <td class="py-2 text-right">
                          <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp"
                              type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport"
                              aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg"
                                  xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                  viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                  </g>
                                </svg></span></button>
                            <div class="dropdown-menu dropdown-menu-right border py-0"
                              aria-labelledby="order-dropdown-0">
                              <div class="py-2"><a class="dropdown-item" href="#!">bearbeiten</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                  href="#!">Löschen</a>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php } ?>
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