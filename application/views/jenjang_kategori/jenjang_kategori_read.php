<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jenjang kategori Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Nama Kategori</td><td><?php echo $nama_kategori; ?></td></tr>
	    <tr><td>Id Kelas</td><td><?php echo $id_kelas; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jenjang_kategori') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>