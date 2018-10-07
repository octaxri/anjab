<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan fungsional tingkat jabatan <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Tingkat <?php echo form_error('id_tingkat') ?></label>
            
<?php echo cmb_dinamis('id_tingkat',' jabatan_fungsional_judul','kata_pengantar','id',$id_tingkat); ?>
            <!-- <?php echo cmb_dinamis('id_jabatan',' jabatans','nama_jabatan','id',$id_jabatan); ?> -->
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jabatan <?php echo form_error('id_jabatan') ?></label>
           <?php echo cmb_dinamis('id_jabatan',' jabatans','nama_jabatan','id',$id_jabatan); ?>
            <!-- <?php echo cmb_dinamis('id_jabatan',' jabatans','nama_jabatan','id',$id_jabatan); ?> -->
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_fungsional_tingkat_jabatan') ?>" class="btn btn-default">Cancel</a>
	

              
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