<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jabatans Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Id Urusan</td><td><?php echo $id_urusan; ?></td></tr>
	    <tr><td>Id Jabatan Level</td><td><?php echo $id_jabatan_level; ?></td></tr>
	    <tr><td>Kode Jabatan</td><td><?php echo $kode_jabatan; ?></td></tr>
	    <tr><td>Nama Jabatan</td><td><?php echo $nama_jabatan; ?></td></tr>
	    <tr><td>Jenis</td><td><?php echo $jenis; ?></td></tr>
	    <tr><td>Tugas Jabatan</td><td><?php echo $tugas_jabatan; ?></td></tr>
	    <tr><td>Id Rumpun</td><td><?php echo $id_rumpun; ?></td></tr>
	    <tr><td>Id Jenjang</td><td><?php echo $id_jenjang; ?></td></tr>
	    <tr><td>Opd Id</td><td><?php echo $opd_id; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Kode Pengangkatan</td><td><?php echo $kode_pengangkatan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jabatans') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>