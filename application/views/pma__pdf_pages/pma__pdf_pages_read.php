<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Pma  pdf pages Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Db Name</td><td><?php echo $db_name; ?></td></tr>
	    <tr><td>Page Descr</td><td><?php echo $page_descr; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pma__pdf_pages') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>