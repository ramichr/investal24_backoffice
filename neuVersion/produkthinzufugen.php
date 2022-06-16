<!DOCTYPE html>

<html lang="DE">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Investal14 - Produkt hinzufügen</title>
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
                hinzufügen
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
            <li class="breadcrumb-item active"><a href="#">Produkt hinzüfugen</a></li>
          </ol>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Produkt information eingeben</h4>
              </div>
              <div class="card-body">
                <div class="form-validation">
                  <form class="form-valide">
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label" for="val-username">Produkt Name
                            <span class="text-danger">*</span>
                          </label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-username" name="val-username"
                              placeholder="Produkt Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label" for="val-email">Produkt referenz <span
                              class="text-danger">*</span>
                          </label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-email" name="val-email" placeholder="S-052">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label" for="val-password">Gewicht
                            <span class="text-danger">*</span>
                          </label>
                          <div class="col-lg-6">
                            <input type="password" class="form-control" id="val-password" name="val-password"
                              placeholder="0.0 g">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label" for="val-confirm-password">Inventor <span
                              class="text-danger">*</span>
                          </label>
                          <div class="col-lg-6">
                            <input type="password" class="form-control" id="val-confirm-password"
                              name="val-confirm-password" placeholder="..inventor">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label" for="val-suggestions">Produnkt Beschreibung : <span
                              class="text-danger">*</span>
                          </label>
                          <div class="col-lg-6">
                            <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="10"
                              placeholder=".. Produnkt Beschreibung :"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label" for="val-skill">Kategorie
                            <span class="text-danger">*</span>
                          </label>
                          <div class="col-lg-6">
                            <select class="form-control default-select" id="val-skill" name="val-skill">
                              <option value="">bitte wählen</option>
                              <option value="Gold">Gold</option>
                              <option value="Silber">Silber</option>
                              <option value="Palladium">Palladium</option>

                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label" for="val-suggestions">Produnkt Beschreibung : <span
                              class="text-danger">*</span>
                          </label>
                          <div class="col-lg-6">
                            <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5"
                              placeholder=".. Produnkt Beschreibung :"></textarea>
                          </div>
                        </div>



                      </div>

                      <div class="input-group mb-3">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input">
                          <label class="custom-file-label">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Foto Upload</span>
                        </div>
                      </div>


                      <div class="form-group row">
                        <div class="col-lg-12 ml-auto">
                          <button type="submit" class="btn btn-primary">hinzufügen</button>
                        </div>
                      </div>

                    </div>
                  </form>
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