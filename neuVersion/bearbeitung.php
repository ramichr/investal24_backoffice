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
          <div class="col-xl-4">
            <div class="card">
              <div class="card-body">
                <div class="profile-statistics mb-5">
                  <div class="text-center">
                    <div class="row">

                      <div class="col">
                        <h3 class="m-b-0"><?= $auftragNum ?></h3><span>AuftragNr.</span>
                      </div>
                      <div class="col">
                        <h3 class="m-b-0"><?= $gesamtBetrag ?></h3><span>V.G.Betrag</span>
                      </div>
                    </div>
                    <div class="mt-4">
                      <a href="javascript:void()" class="btn btn-primary mb-1" data-toggle="modal"
                        data-target="#sendMessageModal">Email Senden </a>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="sendMessageModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Send Message</h5>
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
                                  <label class="text-black font-w600">Comment</label>
                                  <textarea rows="8" class="form-control" name="comment"
                                    placeholder="Comment"></textarea>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group mb-0">
                                  <input type="submit" value="Post Comment" class="submit btn btn-primary"
                                    name="submit">
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
                  <h5 class="text-primary d-inline">Foto</h5>
                  <div class="row mt-4 sp4" id="lightgallery">
                    <a href="images/profile/2.jpg" data-exthumbimage="images/profile/2.jpg"
                      data-src="images/profile/2.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                      <img src="images/profile/2.jpg" alt="" class="img-fluid">
                    </a>
                    <a href="images/profile/3.jpg" data-exthumbimage="images/profile/3.jpg"
                      data-src="images/profile/3.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                      <img src="images/profile/3.jpg" alt="" class="img-fluid">
                    </a>
                    <a href="images/profile/4.jpg" data-exthumbimage="images/profile/4.jpg"
                      data-src="images/profile/4.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                      <img src="images/profile/4.jpg" alt="" class="img-fluid">
                    </a>

                  </div>
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
                      <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Rechnung
                          Vorbereiten</a>
                      </li>

                    </ul>
                    <div class="tab-content">
                      <div id="my-posts" class="tab-pane fade active show">
                        <form>
                          <div class="my-post-content pt-3">


                            <div class="col-xl-12 col-lg-12">
                              <div class="card">
                                <div class="card-header">
                                  <h4 class="card-title">Gold</h4>
                                </div>
                                <div class="card-body">
                                  <div class="basic-form">
                                    <form>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <select class="mr-sm-2 default-select" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">999.9er Feingold</option>
                                            <option value="2">986er Gold</option>
                                            <option value="3">916er Gold</option>
                                            <option value="3">900er Gold</option>
                                            <option value="3">750er Gold</option>
                                            <option value="3">585er Gold</option>
                                            <option value="3">333er Gold</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                          <input type="text" class="form-control" placeholder="Menge in (g) ">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                          <input type="text" class="form-control" placeholder="Kurs">
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
                                  <h4 class="card-title">Silber</h4>
                                </div>
                                <div class="card-body">
                                  <div class="basic-form">
                                    <form>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <select class="mr-sm-2 default-select" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">999.9er Feinsilber</option>
                                            <option value="2">925er Silber</option>
                                            <option value="3">900er Silber</option>
                                            <option value="3">835er Silber</option>
                                            <option value="3">800er Silber</option>
                                            <option value="3">750er Silber</option>
                                            <option value="3">900er Silber</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                          <input type="text" class="form-control" placeholder="Menge in (g)">
                                        </div>

                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                          <input type="text" class="form-control" placeholder="Kurs">
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
                                    <form>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <select class="mr-sm-2 default-select" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">999.9er Feinplatin</option>
                                            <option value="2">950er Platin</option>
                                            <option value="3">900er Platin</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                          <input type="text" class="form-control" placeholder="Menge in (g)">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                          <input type="text" class="form-control" placeholder="Kurs">
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
                                  <h4 class="card-title">Palladium</h4>
                                </div>
                                <div class="card-body">
                                  <div class="basic-form">
                                    <form>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <select class="mr-sm-2 default-select" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">999.9er Feinpalladium</option>
                                            <option value="2">950er Palladium</option>
                                            <option value="3">500er Palladium</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                          <input type="text" class="form-control" placeholder="Menge in (g)">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                          <input type="text" class="form-control" placeholder="Kurs">
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>



                          </div>
                          <div class="col-12">
                            <a href="Rechnung.php"><button type="submit"
                                class="btn btn-primary mb-2">Erstellen</button></a>

                          </div>
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
    <?php include 'layout/Footer.php' ?>
</body>

</html>