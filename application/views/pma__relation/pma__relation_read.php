<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Pma  relation Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Foreign Db</td><td><?php echo $foreign_db; ?></td></tr>
	    <tr><td>Foreign Table</td><td><?php echo $foreign_table; ?></td></tr>
	    <tr><td>Foreign Field</td><td><?php echo $foreign_field; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pma__relation') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>