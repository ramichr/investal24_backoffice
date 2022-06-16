<?php

$vorname = $_GET['vorname'];
$nachname = $_GET['nachname'];
$email = $_GET['email'];
$telefonnummer = $_GET['telefonnummer'];
$adresse = $_GET['adresse'];
$plz = $_GET['plz'];
$stadt = $_GET['stadt'];

$auftragNum = $_GET['auftragNum'];
$gesamtBetrag = $_GET['gesamtBetrag'];
$versandArt = $_GET['versandArt'];


if (isset($_GET['sendMessage'])) {
  header("Location: ankaufPrivat.php?email=sent");
  // header("Location: bearbeitung.php?email=sent");
  exit();
}


if (isset($_GET['gutschriftErstellen'])) {

  $gold = $_GET['gold'];
  $goldMenge = $_GET['goldMenge'];
  $goldKurs = $_GET['goldKurs'];


  $silber = $_GET['silber'];
  $silberMenge = $_GET['silberMenge'];
  $silberKurs = $_GET['silberKurs'];


  $platin = $_GET['platin'];
  $platinMenge = $_GET['platinMenge'];
  $platinKurs = $_GET['platinKurs'];


  $palladium = $_GET['palladium'];
  $palladiumMenge = $_GET['palladiumMenge'];
  $palladiumKurs = $_GET['palladiumKurs'];
}
?>

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
                    <form action="includes/goldAnkfRechnung.inc.php" method="GET">
                      <div class="row">

                        <div class="col-md-4 mb-3">
                          <label for="lastName">Vor-/Nachname</label>
                          <input type="text" class="form-control" id="lastName" placeholder=""
                            value="<?= $vorname . ' / ' . $nachname ?>" readonly>

                        </div>

                        <div class="col-md-4 mb-3">
                          <label for="lastName">Adresse</label>
                          <input type="text" class="form-control" id="lastName" placeholder=""
                            value="<?= $adresse . ', ' . $plz . ' ' . $stadt ?>" readonly>

                        </div>

                        <div class="col-md-4 mb-3">
                          <label for="lastName">Email</label>
                          <input type="text" class="form-control" id="lastName" placeholder="" value="<?= $email ?>"
                            readonly>

                        </div>
                      </div>

                      <br>
                      <br>



                      <h4 class="mb-3">GUTSCHRIFT</h4>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="cc-name">Bechreibung</label>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label for="cc-number">Menge (Gramm)</label>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label for="cc-number">Kurs (€)</label>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label for="cc-number">Summe (€)</label>
                        </div>
                      </div>

                      <?php if (!empty($gold) && !empty($goldMenge) && !empty($goldKurs)) { ?>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="gold" value="<?= $gold ?>" readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="goldMenge" value="<?= $goldMenge ?>" readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="goldKurs" value="<?= $goldKurs ?>" readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="goldSumme" value="<?= $goldMenge * $goldKurs ?>"
                            readonly>
                        </div>
                      </div>


                      <?php } ?>

                      <?php if (!empty($silber) && !empty($silberMenge) && !empty($silberKurs)) { ?>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="silber" value="<?= $silber ?>" readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="silberMenge" value="<?= $silberMenge ?>"
                            readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="silberKurs" value="<?= $silberKurs ?>" readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="silberSumme"
                            value="<?= $silberMenge * $silberKurs ?>" readonly>
                        </div>
                      </div>

                      <?php } ?>

                      <?php if (!empty($platin) && !empty($platinMenge) && !empty($platinKurs)) { ?>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="platin" value="<?= $platin ?>" readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="platinMenge" value="<?= $platinMenge ?>"
                            readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="platinKurs" value="<?= $platinKurs ?>" readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="platinSumme"
                            value="<?= $platinMenge * $platinKurs ?>" readonly>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="palladium" value="<?= $palladium ?>" readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="palladiumMenge" value="<?= $palladiumMenge ?>"
                            readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="palladiumKurs" value="<?= $palladiumKurs ?>"
                            readonly>
                        </div>

                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control" name="palladiumSumme"
                            value="<?= $palladiumMenge * $palladiumKurs ?>" readonly>
                        </div>
                      </div>

                      <?php } ?>

                      <hr class="mb-4">

                      <input type="hidden" name="vorname" value="<?= $vorname ?>">
                      <input type="hidden" name="nachname" value="<?= $nachname ?>">
                      <input type="hidden" name="email" value="<?= $email ?>">
                      <input type="hidden" name="telefonnummer" value="<?= $telefonnummer ?>">
                      <input type="hidden" name="adresse" value="<?= $adresse ?>">
                      <input type="hidden" name="plz" value="<?= $plz ?>">
                      <input type="hidden" name="stadt" value="<?= $stadt ?>">

                      <input type="hidden" name="auftragNum" value="<?= $auftragNum ?>">
                      <input type="hidden" name="gesamtBetrag" value="<?= $gesamtBetrag ?>">
                      <input type="hidden" name="versandArt" value="<?= $versandArt ?>">


                      <button class="btn btn-primary btn-lg btn-block" type="submit"
                        name="rechnungAbschliessen">Gutschrift erstellen und abschicken
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