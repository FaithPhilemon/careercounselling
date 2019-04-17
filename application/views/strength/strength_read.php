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
        <h2 style="margin-top:0px">Strength Read</h2>
        <table class="table">
	    <tr><td>Subject</td><td><?php echo $subject; ?></td></tr>
	    <tr><td>Courses</td><td><?php echo $courses; ?></td></tr>
	    <tr><td>Careers</td><td><?php echo $careers; ?></td></tr>
	    <tr><td>Advice</td><td><?php echo $advice; ?></td></tr>
	    <tr><td>Descipline</td><td><?php echo $descipline; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('strength') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>