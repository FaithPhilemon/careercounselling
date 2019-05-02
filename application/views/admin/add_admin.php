<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
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
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">
              <span class="nav-link">General</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>admin/courses_list">
                <span class="menu-title">Home</span>
                <i class="icon-speedometer menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="<?php echo base_url();?>admin/logout" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Logout</span>
                <i class="icon-layers menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Manage admin</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>admin/add">
                <span class="menu-title">Add admin</span>
                <i class="icon-flag menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>admin/admin_list">
                <span class="menu-title">Admin List</span>
                <i class="icon-flag menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Manage Courses</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>admin/add_courses">
                <span class="menu-title">Add courses</span>
                <i class="icon-flag menu-icon"></i>
              </a>
            </li>
        </nav>







          <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Add admin</h4>
                  <div class="row">
                        <div class="col-md-8 offset-2">
                    <?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
                    <form method="post" action="<?php echo base_url();?>admin/add">
                          <div class="form-group">
                            <label>Username*</label>
                            <input type="text" class="form-control" name="username" required="required">
                          </div>
                          <div class="form-group">
                            <label>Email*</label>
                            <input type="email" class="form-control" name="email" required="required">
                          </div>
                          <div class="form-group">
                            <label>Password*</label>
                            <input type="password" class="form-control" name="password" required="required">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password*</label>
                            <input type="password" class="form-control" name="password1" required="required">
                          </div>
                          <div class="form-group">
                            <label>Phone*</label>
                            <input type="text" class="form-control" name="phone" required="required">
                          </div>
                          <button class="btn btn-primary pull-right" name="submit">Submit</button>
                        </form>
                </div>
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
