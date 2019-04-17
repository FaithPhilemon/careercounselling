<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Strength <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Subject <?php echo form_error('subject') ?></label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="<?php echo $subject; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Courses <?php echo form_error('courses') ?></label>
            <input type="text" class="form-control" name="courses" id="courses" placeholder="Courses" value="<?php echo $courses; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Careers <?php echo form_error('careers') ?></label>
            <input type="text" class="form-control" name="careers" id="careers" placeholder="Careers" value="<?php echo $careers; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Advice <?php echo form_error('advice') ?></label>
            <input type="text" class="form-control" name="advice" id="advice" placeholder="Advice" value="<?php echo $advice; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Descipline <?php echo form_error('descipline') ?></label>
            <input type="text" class="form-control" name="descipline" id="descipline" placeholder="Descipline" value="<?php echo $descipline; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('strength') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>