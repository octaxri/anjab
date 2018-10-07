<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jabatan fungsional syarat jenjang Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Id Syarat Kelompok</td><td><?php echo $id_syarat_kelompok; ?></td></tr>
	    <tr><td>Id Jenjang</td><td><?php echo $id_jenjang; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jabatan_fungsional_syarat_jenjang') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>