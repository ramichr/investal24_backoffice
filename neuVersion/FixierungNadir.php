<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Investal24 - Fixierung Nadir Istanbul Dashboard</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
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
                Nadir Fixierung Liste
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
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Nadir Fixierung </a></li>
          </ol>
        </div>
        <!-- row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Fixierung Tabelle </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-responsive-md">
                    <thead>
                      <tr>

                        <th>ID</th>
                        <th>Produkt</th>
                        <th>Fixirung</th>
                        <th>Gold Summe</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><strong>01</strong></td>
                        <td>Anlage plan</td>
                        <td>20.05.2022 - 16:20</td>
                        <td>200 Gramm</td>

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