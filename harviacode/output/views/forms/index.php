    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                 <div class="panel-heading">Please answer the following questions</div>
          <div class="panel-body">

                    <br>
                    <?php if($this->session->flashdata('complete')): ?>
                    <ul class="alert-danger">
                      <?php echo $this->session->flashdata('fail');?>
                    <li></li>
                    </ul>
                  <?php endif;?>
                    <form  method="post" action="<?=base_url();?>form\index">
                         <?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
                        <div class="form-group">
                            <label for="strength">Strength</label><br>
                               <select form="control" name="strength">
                                  <option>Sciences*Maths,Physics,Chemistry</option>
                                  <option>Arts*Literature,History</option>
                                  <option>Social*Economics,Commerce,Goverment</option>
                               </select>
                        </div>
                        <div class="form-group">
                            <label for="personality">Personality</label><br>
                               <select form="control" name="personality">
                                  <option>Intorvert</option>
                                  <option>Extrovert</option>
                                  <option>Ambivert</option>
                               </select>
                        </div>
                        <div class="form-group">
                            <label for="passion">Passion</label><br>
                              <input type="text"  name="passion" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="finance">Financial capacity</label><br>
                              <select form="control" name="finance">
                                  <option>Rich</option>
                                  <option>Middle</option>
                                  <option>Poor</option>
                               </select>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" name="submit" class="btn btn-primary pull-right">
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
  

