<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Investal24 - Checkout Dashboard</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
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
                Checkout
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
            <li class="breadcrumb-item"><a href="index.php">Dashbord </a></li>
            <li class="breadcrumb-item active"><a href="#">AuftragNr.</a></li>
            <li class="breadcrumb-item active"><a href="#">Checkout</a></li>
          </ol>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-body">
                <div class="row">

                  <div class="col-lg-12 col-md-7 order-md-1">
                    <h4 class="mb-3">Rechnung Adresse</h4>
                    <form class="needs-validation" novalidate="">
                      <div class="row">

                        <div class="col-md-4 mb-3">
                          <label for="lastName">Vor-/Nachname</label>
                          <input type="text" class="form-control" id="lastName" placeholder="" value="" readonly>

                        </div>

                        <div class="col-md-4 mb-3">
                          <label for="lastName">Adresse</label>
                          <input type="text" class="form-control" id="lastName" placeholder="" value="" readonly>

                        </div>

                        <div class="col-md-4 mb-3">
                          <label for="lastName">Email</label>
                          <input type="text" class="form-control" id="lastName" placeholder="you@example.com" value=""
                            readonly>

                        </div>
                      </div>





                      <h4 class="mb-3">GUTSCHRIFT</h4>


                      <div class="row">
                        <div class="col-md-4 mb-3">
                          <label for="cc-name">Bechreibung</label>
                          <input type="text" class="form-control" id="cc-name" placeholder="" required="">

                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="cc-number">Menge</label>
                          <input type="text" class="form-control" id="cc-number" placeholder="" required="">

                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="cc-number">Gramm preis</label>
                          <input type="text" class="form-control" id="cc-number" placeholder="" required="">

                        </div>
                      </div>

                      <hr class="mb-4">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Gutschrift erstellen und abschicken
                      </button>
                    </form>
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