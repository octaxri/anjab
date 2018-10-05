<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jabatan pelaksana Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Id Kelompok</td><td><?php echo $id_kelompok; ?></td></tr>
	    <tr><td>Tugas Jabatan</td><td><?php echo $tugas_jabatan; ?></td></tr>
	    <tr><td>Id Urusan</td><td><?php echo $id_urusan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jabatan_pelaksana') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>