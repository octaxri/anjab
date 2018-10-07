<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Pma  export templates Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Export Type</td><td><?php echo $export_type; ?></td></tr>
	    <tr><td>Template Name</td><td><?php echo $template_name; ?></td></tr>
	    <tr><td>Template Data</td><td><?php echo $template_data; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pma__export_templates') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>