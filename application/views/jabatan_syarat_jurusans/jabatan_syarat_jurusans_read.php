<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jabatan syarat jurusans Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Jabatan Id</td><td><?php echo $jabatan_id; ?></td></tr>
	    <tr><td>Bidang Id</td><td><?php echo $bidang_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jabatan_syarat_jurusans') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>