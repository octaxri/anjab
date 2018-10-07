<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Pma  central columns Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Col Type</td><td><?php echo $col_type; ?></td></tr>
	    <tr><td>Col Length</td><td><?php echo $col_length; ?></td></tr>
	    <tr><td>Col Collation</td><td><?php echo $col_collation; ?></td></tr>
	    <tr><td>Col IsNull</td><td><?php echo $col_isNull; ?></td></tr>
	    <tr><td>Col Extra</td><td><?php echo $col_extra; ?></td></tr>
	    <tr><td>Col Default</td><td><?php echo $col_default; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pma__central_columns') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>