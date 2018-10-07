<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Pma  tracking Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Date Created</td><td><?php echo $date_created; ?></td></tr>
	    <tr><td>Date Updated</td><td><?php echo $date_updated; ?></td></tr>
	    <tr><td>Schema Snapshot</td><td><?php echo $schema_snapshot; ?></td></tr>
	    <tr><td>Schema Sql</td><td><?php echo $schema_sql; ?></td></tr>
	    <tr><td>Data Sql</td><td><?php echo $data_sql; ?></td></tr>
	    <tr><td>Tracking</td><td><?php echo $tracking; ?></td></tr>
	    <tr><td>Tracking Active</td><td><?php echo $tracking_active; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pma__tracking') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>