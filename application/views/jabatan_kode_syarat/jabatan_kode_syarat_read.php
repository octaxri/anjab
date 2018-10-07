<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jabatan kode syarat Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Id Kode Pengangkatan</td><td><?php echo $id_kode_pengangkatan; ?></td></tr>
	    <tr><td>Isi Syarat</td><td><?php echo $isi_syarat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jabatan_kode_syarat') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>