<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Pma  table uiprefs Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Prefs</td><td><?php echo $prefs; ?></td></tr>
	    <tr><td>Last Update</td><td><?php echo $last_update; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pma__table_uiprefs') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>