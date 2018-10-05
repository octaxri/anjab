<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jabatan fungsional syarat kelompok Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Id Judul</td><td><?php echo $id_judul; ?></td></tr>
	    <tr><td>Id Syarat</td><td><?php echo $id_syarat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jabatan_fungsional_syarat_kelompok') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>