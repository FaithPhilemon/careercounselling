      
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Grades</title>
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
        <div class="col-md-12">
            <div class="panel panel-default">
                 <div class="panel-heading">
                  <h2>Thank You!!!!<?php #echo $this->session->userdata('username');?></h2>
                 Please Enter your O level Grades Here</div>
                 <p class="text-danger">
                   Please note the english and mathematics fields are required
                 </p>
          <div class="panel-body">
                    <div class="col-md-6">
                    <br>
                    <form  action="<?=base_url('courses/add') ?>" method="post">
                         <?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
                        <div class="form-group">
                            <label for="english">English</label><br>
                            <select class="form-control" name="english" id="english">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>       
                          </div>

                        <div class="form-group">
                            <label for="maths">Mathematics</label><br>
                            <select class="form-control" name="maths">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="chemistry">Chemistry</label><br>
                            <select class="form-control" name="chemistry">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>
                        </div>
                        <div class="form-group">
                            <label for="biology">Biology</label><br>
                           <select class="form-control" name="biology">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="account">Account</label><br>
                             <select class="form-control" name="account">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="literature">Literature</label><br>
                             <select class="form-control" name="literature">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="commerce">Commerce</label><br>
                            <select class="form-control" name="commerce">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="goverment">Goverment</label><br>
                            <select class="form-control" name="goverment">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="food">Food and Nutrition</label><br>
                            <select class="form-control" name="food_nutrition">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="technical">Technical drawing</label><br>
                            <select class="form-control" name="technical_drawing">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="history">History</label><br>
                            <select class="form-control" name="history">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                            </select>
                        </div>
                     <input type="hidden"  name="user_id" class="form-control" value="<?=$this->session->userdata('user_id');?>">
                </div>
                <div class="col-md-6">
                      <div class="form-group">
                            <label for="physics">Physics</label><br>
                            <select class="form-control" name="physics">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                          <div class="form-group">
                            <label for="agriculture">Agriclture</label><br>
                              <select class="form-control" name="agriculture">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                          <div class="form-group">
                            <label for="geography">Geography</label><br>
                              <select class="form-control" name="geography">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                          <div class="form-group">
                            <label for="further_maths">Further Maths</label><br>
                              <select class="form-control" name="further_maths">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                          <div class="form-group">
                            <label for="economics">Economics</label><br>
                              <select class="form-control" name="economics">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                          <div class="form-group">
                            <label for="crk">CRK</label><br>
                              <select class="form-control" name="crk">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                          <div class="form-group">
                            <label for="health_education">Health Education</label><br>
                              <select class="form-control" name="health_education">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                          <div class="form-group">
                            <label for="music">Music</label><br>
                              <select class="form-control" name="music">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                          <div class="form-group">
                            <label for="fine_arts">Fine Arts</label><br>
                              <select class="form-control" name="fine_arts">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                          <div class="form-group">
                            <label for="wood_work">Woodwork</label><br>
                              <select class="form-control" name="wood_work">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                          <div class="form-group">
                            <label for="french">French</label><br>
                              <select class="form-control" name="french">
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                               </select>                        
                          </div>
                  </div>
                        <input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id')?>">
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

