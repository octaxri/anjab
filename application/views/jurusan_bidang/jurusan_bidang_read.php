<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Jurusan bidang Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Jurusan Id</td><td><?php echo $jurusan_id; ?></td></tr>
	    <tr><td>Nama Bidang</td><td><?php echo $nama_bidang; ?></td></tr>
	    <tr><td>Jpendidikan Id</td><td><?php echo $jpendidikan_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jurusan_bidang') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>