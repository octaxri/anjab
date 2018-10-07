<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Pendidikan pangkats Read</h2>
            </div>
            <div class="col-md-8 text-center">
                <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        </div>
        <table class="table">
	    <tr><td>Jpendidikan Id</td><td><?php echo $jpendidikan_id; ?></td></tr>
	    <tr><td>Golongan Id</td><td><?php echo $golongan_id; ?></td></tr>
	    <tr><td>Ruang Id</td><td><?php echo $ruang_id; ?></td></tr>
	    <tr><td>Pangkat Id</td><td><?php echo $pangkat_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pendidikan_pangkats') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table><?php $this->load->view('templates/footer');?>