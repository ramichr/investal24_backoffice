<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Log-in - Investal24 </title>
  <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <!-- BOXICONS -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/icons.min.css">

  <link rel="stylesheet" href="./libs/date-picker/datepicker.css">
  <!-- APP CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/grid.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/responsive.css">
</head>

<body>


  <div class="main">

    <div class="main-content">
      <section class="login">
        <div class="row">
          <div class="col-8">
            <div class="box">
              <div class="box-header d-flex justify-content-between">
                <a href="index.php">
                  <img src="./images/logo.png" alt="">
                </a>

                <div class="action-reg">
                  <h4 class="fs-30">Login</h4>
                </div>

              </div>
              <div class="line"></div>
              <div class="box-body">
                <div class="auth-content my-auto">

                  <form class="mt-5 pt-2" action="include/login.inc.php">
                    <div class="mb-24">
                      <label class="form-label mb-14">E-Mail oder Benutzername</label>
                      <input type="text" class="form-control" id="username" placeholder="E-Mail oder Benutzername"
                        name="username">
                    </div>
                    <div class="mb-16">
                      <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                          <label class="form-label mb-14">Passwort</label>
                        </div>
                        <div class="flex-shrink-0">
                          <div class="">
                            <a href="#" class="text-muted">Passwort vergessen?</a>
                          </div>
                        </div>
                      </div>

                      <div class="input-group auth-pass-inputgroup">
                        <input type="password" class="form-control" placeholder="Passwort" aria-label="Password"
                          aria-describedby="password-addon" name="passwort">
                        <button class="btn shadow-none ms-0" type="button" id="password-addon"><i
                            class="far fa-eye-slash"></i></button>
                      </div>
                    </div>

                    <div class="mb-3">
                      <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500"
                        type="submit" name="submit">Anmelden</button>
                    </div>
                  </form>



                  <div class="mt-37 text-center">
                    <p class="text-muted mb-0 fs-14">Konto für mitarbeiter erstellen ? <a href="login.php"
                        class="text-primary fw-semibold"> Konto erstellen </a> </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
  <script src="./libs/date-picker/datepicker.js"></script>
  <script src="./libs/simplebar/simplebar.min.js"></script>
  <script src="./libs/password/pass-addon.init.js"></script>


  <!-- APP JS -->
  <script src="./js/main.js"></script>
  <script src="./js/shortcode.js"></script>
  <script src="./js/pages/datepicker.js"></script>

  <script>
  </script>
</body>

</html>