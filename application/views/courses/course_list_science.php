<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Science Courses</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../node_modules/bootstrap-table/dist/bootstrap-table.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/themes/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2><?php echo $this->session->userdata('username');?></h2>
                  <h4 class="card-title text-center">Course list</h4>
                  <div class="row">
                    <div class="table-sorter-wrapper col-lg-12 table-responsive">
                      <table id="sortable-table-1" class="table">
                        <thead>
                          <tr>
                            <th class="sortStyle">Degree<i class="mdi mdi-chevron-down"></i></th>
                            <th class="sortStyle">Requirement<i class="mdi mdi-chevron-down"></i></th>
                            <th class="sortStyle">Other Requirement<i class="mdi mdi-chevron-down"></i></th>
                            <th class="sortStyle">Category<i class="mdi mdi-chevron-down"></i></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($course as $courses):?>
                            <tr>
                              <td><?=$courses->degree;?></td>
                              <td><?=$courses->key_requirement;?></td>
                              <td><?=$courses->other_requirements;?></td>
                              <td><?=$courses->category;?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                  <div class="logout" style="margin-top:30px">
                        <a href="<?=base_url('users/login');?>" class="btn btn-primary pull-left">Logout</a>
                      </div>
              </div>
            </div>
          </div>
       </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="#" target="_blank">Counselling</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../js/jq.tablesort.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/tablesorter.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
