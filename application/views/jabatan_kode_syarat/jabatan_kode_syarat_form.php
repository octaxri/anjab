<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan kode syarat <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Kode Pengangkatan <?php echo form_error('id_kode_pengangkatan') ?></label>
            <?php echo cmb_dinamis('id_kode_pengangkatan',' jabatan_kode_pengangkatan','kode','id',$id_kode_pengangkatan); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="isi_syarat" class="control-label">Isi Syarat <?php echo form_error('isi_syarat') ?></label>
            <textarea class="form-control" rows="3" name="isi_syarat" id="isi_syarat" placeholder="Isi Syarat"><?php echo $isi_syarat; ?></textarea>
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_kode_syarat') ?>" class="btn btn-default">Cancel</a>
	

              
            </div>
            </div>
            <!-- /.box-body -->
            </form>
          
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<?php $this->load->view('templates/footer');?>