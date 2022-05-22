<!DOCTYPE html>
<html lang="en">


    <?php include 'layout/menu.php' ?>
    <!-- MAIN CONTENT -->
    <div class="main">
        <div class="main-content client">

        <?php include 'layout/head.php' ?>
      
            <div class="row">
           
         
              
     
         
      
                <div class="col-3 col-md-6 col-sm-12 mb-25 ">
                    <div class="box client" id="bggkunde">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Bearbeiten</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            
                            <a href=""><h5 class="mt-17">Kunde Name</h5></a>
                            
                            <p class="fs-14 font-w400 font-main">Firma Name <span class="text-clo-primary font-w500 pl-4">Rechtlichform</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-envelope'></i>Email</li>
                            </ul>
                          
                        </div>

                    </div>
                </div>
            </div>

  

            <div id="edit_client" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Kunde Kartei bearbeiten</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                    <label>ID kunde</label>
                                    <input type="text" class="form-control" value="DB name">
                                </div>
                                <div class="form-group">
                                    <label>Kunde Name</label>
                                    <input type="text" class="form-control" value="DB name">
                                </div>
                                <div class="form-group">
                                    <label>Firma Name</label>
                                    <input type="text" class="form-control" value="DB firma name + recht form">
                                </div>
                                <div class="form-group">
                                    <label>SteuerNummer</label>
                                    <input type="text" class="form-control" value="SteuerNummer">
                                </div>

                                <div class="form-group">
                                    <label>Handynummer</label>
                                    <input type="text" class="form-control" value="+49 ...">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="Email DB">
                                </div>
                                <div class="form-group">
                                    <label>Bonus</label>
                                    <select class="form-control select">
                                    <option value="" >Prozent eingeben</option>
                                    <option value="10" >10%</option>
                                    <option value="15" >15%</option>
                                    <option value="20" >20%</option>
                                    </select>
                                </div>
                                <div class="form-group">

                                <img src="./images/client/1.png" alt="">
                                <img src="./images/client/2.png" alt="">


                            </div>
                          
                        
                                <div class="submit-section text-center">
                                    <button class="btn btn-primary submit-btn">Annehmen</button>
                                    <button class="btn btn-primary submit-btn">Ablehnen</button>

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

    <!-- Plugin -->

    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/moment/min/moment.min.js"></script>
    <script src="./libs/apexcharts/apexcharts.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./libs/peity/jquery.peity.min.js"></script>
    <script src="./libs/chart.js/Chart.bundle.min.js"></script>
    <script src="./libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./libs/simplebar/simplebar.min.js"></script>

    <!-- APP JS -->
    <script src="./js/main.js"></script>
    <script src="./js/shortcode.js"></script>
    <script src="./js/pages/clients.js"></script>
</body>

</html>