<?php
include "includes/dbh.inc.php";

$sql = "SELECT * FROM `produkt`";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Investal24 - Produkt liste Dashboard</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
  <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/star-rating/star-rating-svg.css">
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
                Produkt liste
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
            <li class="breadcrumb-item"><a href="index.php">Daschbord</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Shop liste</a></li>
          </ol>
        </div>
        <div class="row">
          <?php while ($produkt = mysqli_fetch_assoc($result)) { ?>
          <div class="col-lg-12 col-xl-6">
            <form action="" method="get">
              <div class="card">
                <div class="card-body">
                  <div class="row m-b-30">
                    <div class="col-md-5 col-xxl-12">
                      <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                        <?php
                                                    $produktId = $produkt['produktId'];
                                                    $sql2 = "SELECT `image` 
                                                    FROM `produkt_images` 
                                                    WHERE `produktId` = '$produktId' ";

                                                    $result2 = mysqli_query($conn, $sql2);

                                                    $image = mysqli_fetch_array($result2);
                                                    ?>
                        <div class="new-arrivals-img-contnent">
                          <img class="img-fluid"
                            src="data:image;charset=utf8;base64,<?= base64_encode($image[0]); ?>" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7 col-xxl-12">
                      <div class="new-arrival-content position-relative">
                        <h4><?= $produkt['produktName']; ?></h4>

                        <p>Inventor: <span class="item"><?= $produkt['inventor']; ?> In stock <i
                              class="fa fa-check-circle text-success"></i></span>
                        </p>

                        <p>Produkt referenz: <span class="item"><?= $produkt['referenz']; ?></span></p>

                        <p>Kategorie: <span class="item"><?= $produkt['kategorie']; ?></span></p>

                        <p>Produkt Beschreibung: </p>
                        <p class="text-content"><?= $produkt['beschreibung']; ?></p>
                      </div> <br><br>


                      <button type="submit" class="btn btn-outline-info">Bearbeiten</button>

                    </div>

                  </div>
                </div>
              </div>
            </form>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>



    <?php include 'layout/Footer.php' ?>

</body>

</html>