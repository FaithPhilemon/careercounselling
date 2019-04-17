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
        <h2 style="margin-top:0px">Form Read</h2>
        <table class="table">
	    <tr><td>Question</td><td><?php echo $question; ?></td></tr>
	    <tr><td>Category</td><td><?php echo $category; ?></td></tr>
	    <tr><td>Notes</td><td><?php echo $notes; ?></td></tr>
	    <tr><td>Options Id</td><td><?php echo $options_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('form') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>