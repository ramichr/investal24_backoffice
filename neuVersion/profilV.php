<?php
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_GET['submit'])) {
  $vermittlerId = test_input($_GET['vermittlerId']);
  $vUsername = test_input($_GET['vUsername']);
  $vPasswort = test_input($_GET['vPasswort']);
  $vVorname = test_input($_GET['vVorname']);
  $vNachname = test_input($_GET['vNachname']);
  $vFirmenname = test_input($_GET['vFirmenname']);
  $vRechtform = test_input($_GET['vRechtform']);
  $vUmsatzsteur = test_input($_GET['vUmsatzsteur']);
  $vSteurnummer = test_input($_GET['vSteurnummer']);
  $vAdresse = test_input($_GET['vAdresse']);
  $vPlz = test_input($_GET['vPlz']);
  $vStadt = test_input($_GET['vStadt']);
  $vEmail = test_input($_GET['vEmail']);
  $vTelefonnummer = test_input($_GET['vTelefonnummer']);
  $vBonusProzent = test_input($_GET['vBonusProzent']);
}

include "includes/dbh.inc.php";

$sql = "SELECT `vAusweis`, `vFirmenausweis` FROM `vermittler` WHERE vermittlerId = '$vermittlerId';";

$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Investal24 - Antraf G.K Dashboard</title>
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
                G.K Auftrag
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
            <li class="breadcrumb-item active"><a href="#">Auftrag G.K: </a></li>
          </ol>
        </div>
        <!-- row -->

        <div class="row">
          <div class="col-xl-4">
            <div class="card">
              <div class="card-body">
                <div class="profile-statistics mb-5">
                  <div class="text-center">
                    <div class="row">
                      <div class="col">
                        <span>ID-Nr</span>
                        <h3 class="m-b-0"><?= $vermittlerId ?></h3>
                      </div>

                    </div>
                    <div class="mt-4">
                      <a href="javascript:void()" class="btn btn-primary mb-1" data-toggle="modal"
                        data-target="#sendMessageModal">Email</a>
                      <a href="javascript:void()" class="btn btn-primary mb-1" data-toggle="modal"
                        data-target="#sendSMSModal">SMS</a>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="sendMessageModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Email</h5>
                          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                          <form class="comment-form">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="text-black font-w600">Name <span class="required">*</span></label>
                                  <input type="text" class="form-control" value="Author" name="Author"
                                    placeholder="Author">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="text-black font-w600">Email <span class="required">*</span></label>
                                  <input type="text" class="form-control" value="Email" placeholder="Email"
                                    name="Email">
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <label class="text-black font-w600">Nachricht</label>
                                  <textarea rows="8" class="form-control" name="comment"
                                    placeholder="Nachricht"></textarea>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group mb-0">
                                  <input type="submit" value="Senden" class="submit btn btn-primary" name="submit">
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="sendSMSModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">SMS</h5>
                          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                          <form class="comment-form">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="text-black font-w600">Name <span class="required">*</span></label>
                                  <input type="text" class="form-control" value="Author" name="Author"
                                    placeholder="Author">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="text-black font-w600">HandyNummer <span
                                      class="required">*</span></label>
                                  <input type="text" class="form-control" value="HandyNummer" placeholder="HandyNummer"
                                    name="HandyNummer">
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <label class="text-black font-w600">Nachricht</label>
                                  <textarea rows="8" class="form-control" name="comment"
                                    placeholder="Nachricht"></textarea>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group mb-0">
                                  <input type="submit" value="Senden" class="submit btn btn-primary" name="submit">
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="profile-interest mb-5">
                  <h5 class="text-primary d-inline">Interest</h5>
                  <?php while ($image = mysqli_fetch_assoc($result)) { ?>
                  <div class="row mt-4 sp4" id="lightgallery">
                    <!-- <a href="images/profile/2.jpg" data-exthumbimage="images/profile/2.jpg"
                      data-src="images/profile/2.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                      <img src="images/profile/2.jpg" alt="" class="img-fluid">
                    </a>
                    <a href="images/profile/3.jpg" data-exthumbimage="images/profile/3.jpg"
                      data-src="images/profile/3.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                      <img src="images/profile/3.jpg" alt="" class="img-fluid">
                    </a> -->
                    <a download="ausweis_<?= $vermittlerId ?>.jpg"
                      href="data:image;charset=utf8;base64,<?= base64_encode($image['vAusweis']); ?>"
                      class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                      <img src="data:image;charset=utf8;base64,<?= base64_encode($image['vAusweis']); ?>"
                        class="img-fluid">
                    </a>

                    <a download="firmenausweis_<?= $vermittlerId ?>.jpg"
                      href="data:image;charset=utf8;base64,<?= base64_encode($image['vFirmenausweis']); ?>"
                      class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                      <img src="data:image;charset=utf8;base64,<?= base64_encode($image['vFirmenausweis']); ?>"
                        class="img-fluid">
                    </a>
                  </div>
                  <?php } ?>
                </div>

              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <div class="card">
              <div class="card-body">
                <div class="profile-tab">
                  <div class="custom-tab-1">
                    <ul class="nav nav-tabs">

                      <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">Kunden
                          Kartei</a>
                      </li>
                      <li class="nav-item"><a href="#profile-settings" data-toggle="tab"
                          class="nav-link">Benachrichtigung</a>
                      </li>
                    </ul>
                    <div class="tab-content">

                      <div id="about-me" class="tab-pane fade active show">



                        <div class="profile-personal-info">
                          <h4 class="text-primary mb-4 hoch ">Personlichen Information</h4>
                          <div class="row mb-2">
                            <div class="col-sm-3 col-5">
                              <h5 class="f-w-500">Vor/-Nachname <span class="pull-right">:</span>
                              </h5>
                            </div>
                            <div class="col-sm-9 col-7"><span><?= $vVorname . ' ' . $vNachname ?></span>
                            </div>
                          </div>
                          <div class="row mb-2">
                            <div class="col-sm-3 col-5">
                              <h5 class="f-w-500">Email <span class="pull-right">:</span>
                              </h5>
                            </div>
                            <div class="col-sm-9 col-7"><span><?= $vEmail ?></span>
                            </div>
                          </div>
                          <div class="row mb-2">
                            <div class="col-sm-3 col-5">
                              <h5 class="f-w-500">Telefonnummer <span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-sm-9 col-7"><span><?= $vTelefonnummer ?></span>
                            </div>
                          </div>


                        </div>

                        <div class="profile-personal-info hoch">
                          <h4 class="text-primary mb-4">Firma Information</h4>
                          <div class="row mb-2">
                            <div class="col-sm-3 col-5">
                              <h5 class="f-w-500">Firma Name <span class="pull-right">:</span>
                              </h5>
                            </div>
                            <div class="col-sm-9 col-7"><span><?= $vFirmenname ?></span>
                            </div>
                          </div>
                          <div class="row mb-2">
                            <div class="col-sm-3 col-5">
                              <h5 class="f-w-500">Rechforme <span class="pull-right">:</span>
                              </h5>
                            </div>
                            <div class="col-sm-9 col-7"><span><?= $vRechtform ?></span>
                            </div>
                          </div>
                          <div class="row mb-2">
                            <div class="col-sm-3 col-5">
                              <h5 class="f-w-500">Firma Anschrift <span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-sm-9 col-7"><span><?= $vAdresse . ', ' . $vPlz . ' ' . $vStadt ?></span>
                            </div>
                          </div>
                          <div class="row mb-2">
                            <div class="col-sm-3 col-5">
                              <h5 class="f-w-500">Steuernummer <span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-sm-9 col-7"><span><?= $vSteurnummer ?></span>
                            </div>
                          </div>



                        </div>


                      </div>
                      <div id="profile-settings" class="tab-pane fade">
                        <div class="pt-3">
                          <div class="settings-form">
                            <h4 class="text-primary">Konto-Einstellung</h4>
                            <form action="includes/v-antwort.inc.php" method="GET">
                              <input type="hidden" name="vermittlerId" value="<?= $vermittlerId ?>">
                              <input type="hidden" name="vUsername" value="<?= $vUsername ?>">
                              <input type="hidden" name="vPasswort" value="<?= $vPasswort ?>">
                              <input type="hidden" name="vVorname" value="<?= $vVorname ?>">
                              <input type="hidden" name="vNachname" value="<?= $vNachname ?>">
                              <input type="hidden" name="vFirmenname" value="<?= $vFirmenname ?>">
                              <input type="hidden" name="vRechtform" value="<?= $vRechtform ?>">
                              <input type="hidden" name="vUmsatzsteur" value="<?= $vUmsatzsteur ?>">
                              <input type="hidden" name="vSteurnummer" value="<?= $vSteurnummer ?>">
                              <input type="hidden" name="vAdresse" value="<?= $vAdresse ?>">
                              <input type="hidden" name="vPlz" value="<?= $vPlz ?>">
                              <input type="hidden" name="vStadt" value="<?= $vStadt ?>">
                              <input type="hidden" name="vEmail" value="<?= $vEmail ?>">
                              <input type="hidden" name="vTelefonnummer" value="<?= $vTelefonnummer ?>">
                              <input type="hidden" name="vBonusProzent" value="<?= $vBonusProzent ?>">

                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label>Bonus</label>
                                  <select class="form-control default-select" name="BonusProzent" id="inputState">
                                    <option selected="">Bitte wählen...</option>
                                    <option>10 %</option>
                                    <option>20 %</option>
                                    <option>30 %</option>
                                  </select>
                                </div>
                              </div>

                              <button class="btn btn-primary" type="submit" name="accept">Annehmen</button>
                              <button class="btn btn-danger" type="submit" name="decline">Ablehnen</button>

                            </form>
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
      </div>
    </div>
    <?php include 'layout/Footer.php' ?>

</body>

</html>