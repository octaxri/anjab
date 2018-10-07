<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Pma  history Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Db</td><td><?php echo $db; ?></td></tr>
	    <tr><td>Table</td><td><?php echo $table; ?></td></tr>
	    <tr><td>Timevalue</td><td><?php echo $timevalue; ?></td></tr>
	    <tr><td>Sqlquery</td><td><?php echo $sqlquery; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pma__history') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>