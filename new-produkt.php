<!DOCTYPE html>


<html lang="en">

<?php include 'layout/menu.php' ?>

<!-- MAIN CONTENT -->
<div class="main">

  <div class="main-content project">

    <?php include 'layout/head.php' ?>

    <div class="row">
      <div class="col-12">
        <div class="box">

          <form action="include/new-produkt.inc.php" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label">Produkt Name</label> <input class="form-control"
                      placeholder="produkt Name" name="produktName"> </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label">Produkt referenz</label> <input
                      class="form-control" placeholder="S-0000" name="referenz"> </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label">Gewicht</label> <input class="form-control"
                      placeholder="0.0 g" name="gewicht"> </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label"> Kategorie </label> <input class="form-control"
                      placeholder="G-S-P" name="kategorie"> </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 col-sm-12 mb-24">
                  <div class="form-group"> <label class="form-label"> inventor </label> <input class="form-control"
                      placeholder="0 Stück" name="inventor"> </div>
                </div>

              </div>


              <div class="form-group mb-24"> <label class="form-label">Produnkt Beschreibung :</label>
                <textarea class="form-control" name="beschreibung" cols="30" rows="10"></textarea>
              </div>

              <div class="col-md-12 col-sm-12 mb-24">
                <div class="form-group"> <label class="form-label"> ZusatzInfos </label> <input type="text"
                    class="form-control" placeholder="ZusatzInfos" name="zusatzInfos"> </div>
              </div>


              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="form-group"> <label class="form-label">Foto:</label>
                    <div class="input-group file-browser"> <input type="file" name="image"
                        class="form-control border-end-0 browse-file" readonly="">
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="gr-btn mt-15">
              <input type="submit" name="submit" value="Hinzufügen" class="btn btn-primary btn-lg fs-16">
            </div>
          </form>
        </div>
      </div>

    </div>


    <div id="add_project" class="modal custom-modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create Project</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Project Name</label>
                    <input class="form-control" value="" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Client</label>
                    <select class="select">
                      <option>Client 1</option>
                      <option>Client 2</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Start Date</label>
                    <div class="cal-icon">
                      <input class="form-control " type="date">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>End Date</label>
                    <div class="cal-icon">
                      <input class="form-control " type="date">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Rate</label>
                    <input placeholder="$50" class="form-control" value="" type="text">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>&nbsp;</label>
                    <select class="select">
                      <option>Hourly</option>
                      <option selected>Fixed</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Priority</label>
                    <select class="select">
                      <option selected>High</option>
                      <option>Medium</option>
                      <option>Low</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
              </div>
              <div class="form-group">
                <label>Upload Files</label>
                <input class="form-control" type="file">
              </div>
              <div class="submit-section">
                <button class="btn btn-primary submit-btn">Save</button>
              </div>
            </form>
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
<script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./libs/peity/jquery.peity.min.js"></script>
<script src="./libs/chart.js/Chart.bundle.min.js"></script>
<script src="./libs/owl.carousel/owl.carousel.min.js"></script>
<script src="./libs/bootstrap/js/bootstrap.min.js"></script>
<script src="./js/countto.js"></script>
<script src="./libs/date-picker/datepicker.js"></script>
<script src="./libs/simplebar/simplebar.min.js"></script>


<!-- APP JS -->
<script src="./js/main.js"></script>
<script src="./js/shortcode.js"></script>
<script src="./js/pages/datepicker.js"></script>

<script>
</script>
</body>

</html>