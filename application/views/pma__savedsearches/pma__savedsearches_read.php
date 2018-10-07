<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Pma  savedsearches Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Db Name</td><td><?php echo $db_name; ?></td></tr>
	    <tr><td>Search Name</td><td><?php echo $search_name; ?></td></tr>
	    <tr><td>Search Data</td><td><?php echo $search_data; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pma__savedsearches') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>