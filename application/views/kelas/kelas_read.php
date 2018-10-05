<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Kelas Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Kelas</td><td><?php echo $kelas; ?></td></tr>
	    <tr><td>Nilai Bawah</td><td><?php echo $nilai_bawah; ?></td></tr>
	    <tr><td>Nilai Atas</td><td><?php echo $nilai_atas; ?></td></tr>
	    <tr><td>Id Rumpun</td><td><?php echo $id_rumpun; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kelas') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>