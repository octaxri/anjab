<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Pma  column info Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Db Name</td><td><?php echo $db_name; ?></td></tr>
	    <tr><td>Table Name</td><td><?php echo $table_name; ?></td></tr>
	    <tr><td>Column Name</td><td><?php echo $column_name; ?></td></tr>
	    <tr><td>Comment</td><td><?php echo $comment; ?></td></tr>
	    <tr><td>Mimetype</td><td><?php echo $mimetype; ?></td></tr>
	    <tr><td>Transformation</td><td><?php echo $transformation; ?></td></tr>
	    <tr><td>Transformation Options</td><td><?php echo $transformation_options; ?></td></tr>
	    <tr><td>Input Transformation</td><td><?php echo $input_transformation; ?></td></tr>
	    <tr><td>Input Transformation Options</td><td><?php echo $input_transformation_options; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pma__column_info') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>