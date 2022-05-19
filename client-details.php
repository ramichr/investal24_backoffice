<?php

if (isset($_GET['submit'])) {
  $kundenId = $_GET['kundenId'];
  $username = $_GET['username'];
  $vorname = $_GET['vorname'];
  $nachname = $_GET['nachname'];
  $email =  $_GET['email'];
  $telefonnummer = $_GET['telefonnummer'];
  $geschlecht = $_GET['geschlecht'];
  $addresse = $_GET['addresse'];
  $plz = $_GET['plz'];
  $stadt = $_GET['stadt'];
}

include "include/dbh.inc.php";

$sql1 = "SELECT * FROM `anlage_plan` WHERE kundenId = '$kundenId';";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT p.produktName, s.kundenId 
          FROM `shop_bestellung` AS s INNER JOIN `produkt` AS p 
          ON s.produktId = p.produktId 
          WHERE kundenId = '$kundenId';";

$result2 = mysqli_query($conn, $sql2);

?>


<!DOCTYPE html>
<html lang="DE">

<?php include 'layout/menu.php' ?>


<div class="main">
  <div class="main-content client project">

    <?php include 'layout/head.php' ?>

    <div class="row">
      <div class="col-8 col-xl-12">
        <div class="box pd-0">
          <div class="tab-menu-heading hremp-tabs p-0 ">
            <div class="tabs-menu1">
              <!-- Tabs -->
              <ul class="nav panel-tabs w-100 d-flex justify-content-between">
                <li><a href="#tab6" data-bs-toggle="tab" class="active">Bestellung</a></li>
                <li><a href="#tab8" data-bs-toggle="tab">Rechnung</a></li>
                <li><a href="#tab10" data-bs-toggle="tab">Dokuments</a></li>
              </ul>
            </div>
          </div>

          <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
            <div class="tab-content">

              <div class="tab-pane active" id="tab6">
                <div class="box-body pl-15 pr-15 pb-20 table-responsive activity mt-10">
                  <table class="table table-vcenter text-nowrap table-bordered dataTable no-footer mw-100"
                    id="task-profile" role="grid">
                    <thead>
                      <tr class="top">
                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile"
                          rowspan="1" colspan="1" style="width: 222.312px;">Artikel</th>
                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile"
                          rowspan="1" colspan="1" style="width: 71.875px;">Status</th>
                        <th class="border-bottom-0 sorting_disabled fs-14 font-w500" rowspan="1" colspan="1"
                          style="width: 145.391px;">Aktion</th>
                      </tr>
                    </thead>
                    <?php while ($row1 = mysqli_fetch_assoc($result1)) {
                    ?>
                    <tbody>
                      <tr class="odd">
                        <td>
                          <a href="#" class="d-flex "> <span>Anlage Plan ID: <?= $row1['anlageId'] ?></span> </a>
                        </td>

                        <td><span class="badge badge-warning">On hold</span></td>
                        <td>
                          <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                  class="bx bx-trash"></i> Delete</a>
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                  class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                    </tbody>
                    <?php }
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                    ?>
                    <tbody>
                      <tr class="odd">
                        <td>
                          <a href="#" class="d-flex "> <span><?= $row2['produktName'] ?></span> </a>
                        </td>

                        <td><span class="badge badge-warning">On hold</span></td>
                        <td>
                          <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                  class="bx bx-trash"></i> Delete</a>
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                  class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                    <?php } ?>
                  </table>
                </div>
              </div>

              <div class="tab-pane" id="tab8">
                <div class="box-body">
                  <div class="table-responsive"> <a href="#" class="btn btn-primary btn-tableview">.</a>
                    <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="invoice-tables">
                      <thead>
                        <tr>
                          <th class="border-bottom-0">RechnungID</th>
                          <th class="border-bottom-0">Betrag</th>
                          <th class="border-bottom-0">Datum der Rechnung</th>
                          <th class="border-bottom-0">Fälligkeitsdatum</th>
                          <th class="border-bottom-0">Zahlung</th>
                          <th class="border-bottom-0">Status</th>
                          <th class="border-bottom-0">Aktionen</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> <a href="#">#INV-0478</a> </td>
                          <td>583,00 €</td>
                          <td>01-01-2022</td>
                          <td>14-02-2022</td>
                          <td> <span class="">583,00 €</span> </td>
                          <td><span class="badge badge-danger">Unbezahlt</span></td>
                          <td>
                            <div class="dropdown">
                              <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                    class="bx bx-trash"></i> Ansehen</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                    class="bx bx-edit mr-5"></i>herunterladen</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                    class="bx bx-trash"></i> bearbeiten</a>

                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> <a href="#">#INV-1245</a> </td>
                          <td>5232.00 €</td>
                          <td>02-02-2022</td>
                          <td>03-02-2022</td>
                          <td> <span class="">5232.00 €</span> </td>
                          <td><span class="badge badge-success-light">bezahlt</span></td>
                          <td>
                            <div class="dropdown">
                              <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                    class="bx bx-trash"></i> Ansehen</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                    class="bx bx-edit mr-5"></i>herunterladen</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                    class="bx bx-trash"></i> bearbeiten</a>

                              </div>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab10">
                <div class="box-body">
                  <div class="table-responsive"> <a href="#" class="btn btn-primary btn-tableview">Dateien
                      hochladen</a>
                    <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="files-tables">
                      <thead>
                        <tr>
                          <th class="border-bottom-0 text-center w-5">No</th>
                          <th class="border-bottom-0">Datei Name</th>
                          <th class="border-bottom-0">Hochladen durch</th>
                          <th class="border-bottom-0">Aktionen</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">1</td>
                          <td> <a href="#" class="font-weight-semibold fs-14 mt-5">ausweis.pdf<span
                                class="text-muted ms-2">(23 KB)</span></a>
                            <div class="clearfix"></div> <small class="text-muted">2 week ago</small>
                          </td>
                          <td>Client</td>
                          <td>
                            <div class="dropdown">
                              <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                    class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                    class="bx bx-edit mr-5"></i>Edit</a>
                              </div>
                            </div>
                          </td>
                        </tr>



                        <tr>
                          <td class="text-center">7</td>
                          <td> <a href="#" class="font-weight-semibold fs-14 mt-5">kaufvertrag.pdf<span
                                class="text-muted ms-2">(15 KB)</span></a>
                            <div class="clearfix"></div> <small class="text-muted">1 hours ago</small>
                          </td>
                          <td>Team Lead</td>
                          <td>
                            <div class="dropdown">
                              <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i
                                    class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i
                                    class="bx bx-edit mr-5"></i>Edit</a>
                              </div>
                            </div>
                          </td>
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


      <div class="col-4 col-xl-12">
        <div class="box user-pro-list overflow-hidden mb-30">
          <div class="box-body">
            <div class="user-pic text-center">
              <div class="avatar ">
                <img src="./images/profile/1.png" alt="">
                <div class="pulse-css"></div>
              </div>
              <div class="pro-user mt-3">
                <h5 class="pro-user-username text-dark mb-2 fs-15 mt-42 color-span"><?= $vorname . ' ' . $nachname ?>
                </h5>
              </div>
            </div>
          </div>

        </div>
        <div class="modal custom-modal fade" id="delete_client" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <div class="form-header">
                  <h3>Rechnung * INV-0478 * </h3>
                  <p>Rechnung Status bearbeiten?</p>
                </div>
                <div class="modal-btn delete-action">
                  <div class="row">
                    <div class="col-6 mb-0">
                      <a href="javascript:void(0);" class="btn btn-primary continue-btn">bezahlt</a>
                    </div>
                    <div class="col-6 mb-0">
                      <a href="javascript:void(0);" data-dismiss="modal"
                        class="btn btn-primary cancel-btn">Unbezahlt</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box left-dot mb-30">
          <div class="box-header  border-0 pd-0">
            <div class="box-title fs-20 font-w600">Allgemeine Informationen</div>
          </div>
          <div class="box-body pt-20 user-profile">
            <div class="table-responsive">
              <table class="table mb-0 mw-100 color-span">
                <tbody>
                  <tr>
                    <td class="py-2 px-0"> <span class="w-50">Client ID </span> </td>
                    <td>:</td>
                    <td class="py-2 px-0"> <span class=""><?= $username ?></span> </td>
                  </tr>
                  <tr>
                    <td class="py-2 px-0"> <span class="w-50">Email ID</span> </td>
                    <td>:</td>
                    <td class="py-2 px-0"> <span class=""><?= $email ?></span> </td>
                  </tr>
                  <tr>
                    <td class="py-2 px-0"> <span class="w-50">Kontakt </span> </td>
                    <td>:</td>
                    <td class="py-2 px-0"> <span class=""><?= $telefonnummer ?></span> </td>
                  </tr>
                  <tr>
                    <td class="py-2 px-0"> <span class="w-50">Geschlecht</span> </td>
                    <td>:</td>
                    <td class="py-2 px-0"> <span class=""><?= $geschlecht ?></span> </td>
                  </tr>
                  <tr>
                    <td class="py-2 px-0"> <span class="w-50">Addresse</span> </td>
                    <td>:</td>
                    <td class="py-2 px-0"> <span class=""><?= $addresse . ', ' . $plz . ' ' . $stadt ?></span> </td>
                  </tr>
                  <tr>
                    <td class="py-2 px-0"> <span class="w-50">Status</span> </td>
                    <td>:</td>
                    <td class="py-2 px-0"> <span class="badge badge-success">Active</span> </td>
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
<!-- END MAIN CONTENT -->

<div class="overlay"></div>

<!-- SCRIPT -->
<!-- APEX CHART -->

<script src="./libs/jquery/jquery.min.js"></script>
<script src="./libs/jquery/jquery-ui.min.js"></script>
<script src="./libs/moment/min/moment.min.js"></script>
<script src="./libs/apexcharts/apexcharts.js"></script>
<script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./libs/peity/jquery.peity.min.js"></script>
<script src="./libs/chart.js/Chart.bundle.min.js"></script>
<script src="./libs/owl.carousel/owl.carousel.min.js"></script>
<script src="./libs/bootstrap/js/bootstrap.min.js"></script>
<script src="./libs/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="./js/countto.js"></script>
<script src="./libs/date-picker/datepicker.js"></script>
<script src="./libs/rating/js/custom-ratings.js"></script>
<script src="./libs/rating/js/jquery.barrating.js"></script>
<script src="./libs/circle-progress/circle-progress.min.js"></script>
<script src="./libs/simplebar/simplebar.min.js"></script>

<!-- APP JS -->
<script src="./js/main.js"></script>

<script src="./js/shortcode.js"></script>


</body>

</html>