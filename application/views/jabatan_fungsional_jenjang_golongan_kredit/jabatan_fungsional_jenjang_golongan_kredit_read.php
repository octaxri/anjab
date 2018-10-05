<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jabatan fungsional jenjang golongan kredit Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Id Golongan</td><td><?php echo $id_golongan; ?></td></tr>
	    <tr><td>Id Ruang</td><td><?php echo $id_ruang; ?></td></tr>
	    <tr><td>Id Angka Kredit</td><td><?php echo $id_angka_kredit; ?></td></tr>
	    <tr><td>Id Jenjang Tingkat</td><td><?php echo $id_jenjang_tingkat; ?></td></tr>
	    <tr><td>Id Angka Kredit Minimal</td><td><?php echo $id_angka_kredit_minimal; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jabatan_fungsional_jenjang_golongan_kredit') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>