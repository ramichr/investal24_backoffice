<?php
include "includes/dbh.inc.php";


$auftragNum = $_GET['auftragNum'];
$versandArt = $_GET['versandArt'];
$gesamtBetrag = $_GET['gesamtBetrag'];

if (isset($_GET['gast'])) {
  $gastUid = $_GET['gastUid'];

  $sql = "SELECT * FROM `gaste` WHERE `gastUid` = '$gastUid'";
  $result = mysqli_query($conn, $sql);
}

if (isset($_GET['kunde'])) {
  $kundenId = $_GET['kundenId'];

  $sql = "SELECT * FROM `kunden` WHERE `kundenId` = '$kundenId'";
  $result = mysqli_query($conn, $sql);
}

if (isset($_GET['gKunde'])) {
  $gKundenId = $_GET['gKundenId'];

  $sql = "SELECT * FROM `gKunden` WHERE `gKundenId` = '$gKundenId'";
  $result = mysqli_query($conn, $sql);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Investal24 - Bearbeitung Auftrag Dashboard</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
  <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="./vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
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
                Goldankauf Auftrag bearbeiten
              </div>
            </div>



            <?php include 'layout/loginBarre.php' ?>


          </div>
        </nav>
      </div>
    </div>

    <?php include 'layout/MenuSidebarre.php' ?>

    <div class="content-body">
      <form action="includes/goldAnkfRechnung.inc.php" method="GET">

        <div class="container-fluid">

          <div class="page-titles">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Dashbord</a></li>
              <li class="breadcrumb-item active"><a href="#">Auftrag Nr.</a></li>
            </ol>
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                  <div class="photo-content">
                    <div class="cover-photo"></div>
                  </div>
                  <div class="profile-info">

                    <div class="profile-details">
                      <?php if (isset($_GET['gast'])) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                      <div class="profile-name px-3 pt-2">
                        <h4 class="text-primary mb-0"><?= $row['gastVorname'] . ' ' . $row['gastNachname'] ?></h4>
                        <p>Vor-/Nachname</p>
                      </div>

                      <div class="profile-email px-2 pt-2">
                        <h4 class="text-muted mb-0"><?= $row['gastEmail'] ?></h4>
                        <p>Email</p>
                      </div>

                      <div class="profile-email px-2 pt-2">
                        <h4 class="ttext-primary mb-0"><?= $row['gastTelefonnummer'] ?></h4>
                        <p>Tel.</p>
                      </div>

                      <input type="hidden" name="vorname" value="<?= $row['gastVorname'] ?>">
                      <input type="hidden" name="nachname" value="<?= $row['gastNachname'] ?>">
                      <input type="hidden" name="email" value="<?= $row['gastEmail'] ?>">
                      <input type="hidden" name="telefonnummer" value="<?= $row['gastTelefonnummer'] ?>">
                      <input type="hidden" name="adresse" value="<?= $row['gastAdresse'] ?>">
                      <input type="hidden" name="plz" value="<?= $row['gastPlz'] ?>">
                      <input type="hidden" name="stadt" value="<?= $row['gastStadt'] ?>">
                      <?php }
                      }

                      if (isset($_GET['kunde'])) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                      <div class="profile-name px-3 pt-2">
                        <h4 class="text-primary mb-0"><?= $row['vorname'] . ' ' . $row['nachname'] ?></h4>
                        <p>Vor-/Nachname</p>
                      </div>

                      <div class="profile-email px-2 pt-2">
                        <h4 class="text-muted mb-0"><?= $row['email'] ?></h4>
                        <p>Email</p>
                      </div>

                      <div class="profile-email px-2 pt-2">
                        <h4 class="ttext-primary mb-0"><?= $row['telefonnummer'] ?></h4>
                        <p>Tel.</p>
                      </div>

                      <input type="hidden" name="vorname" value="<?= $row['vorname'] ?>">
                      <input type="hidden" name="nachname" value="<?= $row['nachname'] ?>">
                      <input type="hidden" name="email" value="<?= $row['email'] ?>">
                      <input type="hidden" name="telefonnummer" value="<?= $row['telefonnummer'] ?>">
                      <input type="hidden" name="adresse" value="<?= $row['adresse'] ?>">
                      <input type="hidden" name="plz" value="<?= $row['plz'] ?>">
                      <input type="hidden" name="stadt" value="<?= $row['stadt'] ?>">
                      <?php }
                      }

                      if (isset($_GET['gKunde'])) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                      <div class="profile-name px-3 pt-2">
                        <h4 class="text-primary mb-0"><?= $row['gkVorname'] . ' ' . $row['gkNachname'] ?></h4>
                        <p>Vor-/Nachname</p>
                      </div>

                      <div class="profile-email px-2 pt-2">
                        <h4 class="text-muted mb-0"><?= $row['gkEmail'] ?></h4>
                        <p>Email</p>
                      </div>

                      <div class="profile-email px-2 pt-2">
                        <h4 class="ttext-primary mb-0"><?= $row['gkTelefonnummer'] ?></h4>
                        <p>Tel.</p>
                      </div>

                      <input type="hidden" name="vorname" value="<?= $row['gkVorname'] ?>">
                      <input type="hidden" name="nachname" value="<?= $row['gkNachname'] ?>">
                      <input type="hidden" name="email" value="<?= $row['gkEmail'] ?>">
                      <input type="hidden" name="telefonnummer" value="<?= $row['gkTelefonnummer'] ?>">
                      <input type="hidden" name="adresse" value="<?= $row['gkAdresse'] ?>">
                      <input type="hidden" name="plz" value="<?= $row['gkPlz'] ?>">
                      <input type="hidden" name="stadt" value="<?= $row['gkStadt'] ?>">
                      <?php }
                      } ?>

                      <div class="profile-email px-2 pt-2">
                        <h4 class="ttext-primary mb-0"><?= $auftragNum ?></h4>
                        <p>AutragNr.</p>
                      </div>

                      <div class="profile-email px-2 pt-2">
                        <h4 class="ttext-primary mb-0"><?= $gesamtBetrag ?></h4>
                        <p>Betrag</p>
                      </div>

                      <div class="profile-email px-2 pt-2">
                        <h4 class="ttext-primary mb-0"><?= $versandArt ?></h4>
                        <p>Versand Art.</p>
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
                        <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Rechnung
                            Vorbereiten</a>
                        </li>

                      </ul>
                      <div class="tab-content">

                        <div id="my-posts" class="tab-pane fade active show">
                          <div class="my-post-content pt-3">

                            <div class="col-xl-12 col-lg-12">
                              <div class="card">
                                <div class="card-header">
                                  <h4 class="card-title">Gold</h4>
                                </div>
                                <div class="card-body">
                                  <div class="basic-form">
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <select class="mr-sm-2 default-select" id="inlineFormCustomSelect" name="gold">
                                          <option value="" selected>Bitte auswählen...</option>
                                          <option value="999.9er Feingold">999.9er Feingold</option>
                                          <option value="986er Gold">986er Gold</option>
                                          <option value="916er Gold">916er Gold</option>
                                          <option value="900er Gold">900er Gold</option>
                                          <option value="3750er Gold">750er Gold</option>
                                          <option value="585er Gold">585er Gold</option>
                                          <option value="333er Gold">333er Gold</option>
                                        </select>
                                      </div>
                                      <div class="col-sm-3 mt-2 mt-sm-0">
                                        <input type="text" class="form-control" placeholder="Menge in (g) "
                                          name="goldMenge">
                                      </div>
                                      <div class="col-sm-3 mt-2 mt-sm-0">
                                        <input type="text" class="form-control" placeholder="Kurs" name="goldKurs">
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>


                            <div class="col-xl-12 col-lg-12">
                              <div class="card">
                                <div class="card-header">
                                  <h4 class="card-title">Silber</h4>
                                </div>
                                <div class="card-body">
                                  <div class="basic-form">
                                    <form>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <select class="mr-sm-2 default-select" id="inlineFormCustomSelect"
                                            name="silber">
                                            <option value="" selected>Bitte auswählen...</option>
                                            <option value="999.9er Feinsilber">999.9er Feinsilber</option>
                                            <option value="925er Silber">925er Silber</option>
                                            <option value="900er Silber">900er Silber</option>
                                            <option value="835er Silber">835er Silber</option>
                                            <option value="800er Silber">800er Silber</option>
                                            <option value="750er Silber">750er Silber</option>
                                            <option value="900er Silber">900er Silber</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                          <input type="text" class="form-control" placeholder="Menge in (g)"
                                            name="silberMenge">
                                        </div>

                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                          <input type="text" class="form-control" placeholder="Kurs" name="silberKurs">
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>



                            <div class="col-xl-12 col-lg-12">
                              <div class="card">
                                <div class="card-header">
                                  <h4 class="card-title">Platin</h4>
                                </div>
                                <div class="card-body">
                                  <div class="basic-form">
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <select class="mr-sm-2 default-select" id="inlineFormCustomSelect"
                                          name="platin">
                                          <option value="" selected>Bitte auswählen...</option>
                                          <option value="999.9er Feinplatin">999.9er Feinplatin</option>
                                          <option value="950er Platin">950er Platin</option>
                                          <option value="900er Platin">900er Platin</option>
                                        </select>
                                      </div>
                                      <div class="col-sm-3 mt-2 mt-sm-0">
                                        <input type="text" class="form-control" placeholder="Menge in (g)"
                                          name="platinMenge">
                                      </div>
                                      <div class="col-sm-3 mt-2 mt-sm-0">
                                        <input type="text" class="form-control" placeholder="Kurs" name="platinKurs">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>



                            <div class="col-xl-12 col-lg-12">
                              <div class="card">
                                <div class="card-header">
                                  <h4 class="card-title">Palladium</h4>
                                </div>
                                <div class="card-body">
                                  <div class="basic-form">

                                    <div class="row">
                                      <div class="col-sm-6">
                                        <select class="mr-sm-2 default-select" id="inlineFormCustomSelect"
                                          name="palladium">
                                          <option value="" selected>Bitte auswählen...</option>
                                          <option value="999.9er Feinpalladium">999.9er Feinpalladium</option>
                                          <option value="950er Palladium">950er Palladium</option>
                                          <option value="500er Palladium">500er Palladium</option>
                                        </select>
                                      </div>
                                      <div class="col-sm-3 mt-2 mt-sm-0">
                                        <input type="text" class="form-control" placeholder="Menge in (g)"
                                          name="palladiumMenge">
                                      </div>
                                      <div class="col-sm-3 mt-2 mt-sm-0">
                                        <input type="text" class="form-control" placeholder="Kurs" name="palladiumKurs">
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>

                          <input type="hidden" name="auftragNum" value="<?= $auftragNum ?>">
                          <input type="hidden" name="gesamtBetrag" value="<?= $gesamtBetrag ?>">
                          <input type="hidden" name="versandArt" value="<?= $versandArt ?>">


                          <div class="col-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit"
                              name="gutschriftErstellen">Gutschrift erstellen und abschicken
                            </button>
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
      </form>
    </div>
    <?php include 'layout/Footer.php' ?>
</body>

</html>