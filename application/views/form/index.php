      
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
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
                 Please answer the following questions</div>
          <div class="panel-body">

                    <br>
                    <?php if($this->session->flashdata('complete')): ?>
                    <ul class="alert-danger">
                      <?php echo $this->session->flashdata('fail');?>
                    <li></li>
                    </ul>
                  <?php endif;?>
                    <form  action="<?=base_url('form/add') ?>" method="post">
                         <?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
                        <div class="form-group">
                         1.Select your favourite subject groups?
                            <label for="strength">Strength</label><br>
                               <select class="form-control" name="strength" required="required">
                                  <option value="1">Sciences*Maths,Physics,Chemistry</option>
                                  <option value="2">Arts*Literature,History</option>
                               </select>
                        </div>

                        <div class="form-group">
                          2.Do you consider yourself a/an?
                           <label for="personality">Personality</label><br>
                               <select class="form-" control name="personality">
                                  <option>Introvert</option>
                                  <option>Extrovert</option>
                                  <option>Ambivert</option>
                               </select>
                        </div>
                        <div class="form-group">
                          3.What do you love?
                            <label for="passion">Passion</label><br>
                              <input type="text"  name="passion" class="form-control">
                        </div>
                        <div class="form-group">
                           4.What is your parents financial capacity?
                            <label for="finance">Financial capacity</label><br>
                              <select class="form-control" name="finance" required="required">
                                  <option>Rich</option>
                                  <option>Middle</option>
                                  <option>Poor</option>
                               </select>
                        </div>
                        <input type="hidden"  name="user_id" class="form-control" value="<?=$this->session->userdata('user_id');?>">
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Submit
                                </button>
                            </div>
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

