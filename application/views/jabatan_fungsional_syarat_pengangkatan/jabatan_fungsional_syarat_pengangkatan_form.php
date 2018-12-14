<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan fungsional syarat pengangkatan <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jabatan Fungsional Tambahan Keterangan <?php echo form_error('id_jabatan_fungsional_tambahan_keterangan') ?></label>
           <?php echo cmb_dinamis('id_jabatan_fungsional_tambahan_keterangan',' jabatan_fungsional_tambahan_keterangan','nama','id_jabatan_fungsional_tambahan_keterangan',$id_jabatan_fungsional_tambahan_keterangan); ?>

        </div>
        <div class="col-md-6"></div>
	    <div class="form-group col-md-12">
            <label for="syarat" class="control-label">Syarat <?php echo form_error('syarat') ?></label>
            <textarea class="form-control" rows="3" name="syarat" id="syarat" placeholder="Syarat"><?php echo $syarat; ?></textarea>
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Kode Syarat <?php echo form_error('kode_syarat') ?></label>
            <input type="text" class="form-control" name="kode_syarat" id="kode_syarat" placeholder="Kode Syarat" value="<?php echo $kode_syarat; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_fungsional_syarat_pengangkatan') ?>" class="btn btn-default">Cancel</a>
	

              
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
<script>
  $(function () {
    // Replace the <textarea id='editor1'> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('syarat')
    //bootstrap WYSIHTML5 - text editor
  })
</script>