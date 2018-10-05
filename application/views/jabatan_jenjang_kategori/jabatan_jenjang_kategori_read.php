<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jabatan jenjang kategori Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Id Jabatan</td><td><?php echo $id_jabatan; ?></td></tr>
	    <tr><td>Id Jenjang</td><td><?php echo $id_jenjang; ?></td></tr>
	    <tr><td>Id Jenjang Kategori</td><td><?php echo $id_jenjang_kategori; ?></td></tr>
	    <tr><td>Id Kelas</td><td><?php echo $id_kelas; ?></td></tr>
	    <tr><td>Id Golongan</td><td><?php echo $id_golongan; ?></td></tr>
	    <tr><td>Id Ruang</td><td><?php echo $id_ruang; ?></td></tr>
	    <tr><td>Kode Pengangkatan</td><td><?php echo $kode_pengangkatan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jabatan_jenjang_kategori') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>