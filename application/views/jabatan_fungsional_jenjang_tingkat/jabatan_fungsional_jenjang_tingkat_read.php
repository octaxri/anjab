<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jabatan fungsional jenjang tingkat Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Id Jenjang</td><td><?php echo $id_jenjang; ?></td></tr>
	    <tr><td>Id Tingkat Jabatan</td><td><?php echo $id_tingkat_jabatan; ?></td></tr>
	    <tr><td>Id Batas Usia</td><td><?php echo $id_batas_usia; ?></td></tr>
	    <tr><td>Id Tunjangan</td><td><?php echo $id_tunjangan; ?></td></tr>
	    <tr><td>Id Kategori</td><td><?php echo $id_kategori; ?></td></tr>
	    <tr><td>Id Jabatan</td><td><?php echo $id_jabatan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jabatan_fungsional_jenjang_tingkat') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>