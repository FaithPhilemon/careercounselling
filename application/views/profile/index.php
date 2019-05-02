      
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Profile</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../node_modules/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/themes/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth register-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                 <div class="panel-heading">
                  <h2>Hi!!!!<?php echo $this->session->userdata('username');?></h2>
          <div class="panel-body">

                      <div class="thumbnail">
                        <img src="<?php echo base_url();?>assets/images/students/images (46).jpeg" class="thumbnail" width="250px">
                      </div>
                      
                      <div class="courses" style="margin-top: 20px">
                      <p class="text-success">
                        <?php echo $this->session->userdata('username');?>!!! These are the course recommendations we have for you
                      </p>
                      </div>      
                      <?php if ($this->session->userdata('strength')=='1'):?>
                      <div class="recommendations">
                        <a href="<?=base_url('courses/sciences')?>" class="btn btn-primary">View recommendations</a>
                      </div>
                      <?php endif;?>
                      <?php if ($this->session->userdata('strength')=='2'):?>
                      <div class="recommendations">
                        <a href="<?=base_url('courses/arts')?>" class="btn btn-primary">View recommendations</a>
                      </div>
                    <?php endif;?>
                 </div>
            </div>
            </div>
        </div>
    </div>
            
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>

