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
        <h2 style="margin-top:0px">Form <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Question <?php echo form_error('question') ?></label>
            <input type="text" class="form-control" name="question" id="question" placeholder="Question" value="<?php echo $question; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Category <?php echo form_error('category') ?></label>
            <input type="text" class="form-control" name="category" id="category" placeholder="Category" value="<?php echo $category; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Notes <?php echo form_error('notes') ?></label>
            <input type="text" class="form-control" name="notes" id="notes" placeholder="Notes" value="<?php echo $notes; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Options Id <?php echo form_error('options_id') ?></label>
            <input type="text" class="form-control" name="options_id" id="options_id" placeholder="Options Id" value="<?php echo $options_id; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('form') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>