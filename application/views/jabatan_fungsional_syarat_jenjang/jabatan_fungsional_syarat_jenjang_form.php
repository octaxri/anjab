<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan fungsional syarat jenjang <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Syarat Kelompok <?php echo form_error('id_syarat_kelompok') ?></label>
            <input type="text" class="form-control" name="id_syarat_kelompok" id="id_syarat_kelompok" placeholder="Id Syarat Kelompok" value="<?php echo $id_syarat_kelompok; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Jenjang <?php echo form_error('id_jenjang') ?></label>
            <input type="text" class="form-control" name="id_jenjang" id="id_jenjang" placeholder="Id Jenjang" value="<?php echo $id_jenjang; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_fungsional_syarat_jenjang') ?>" class="btn btn-default">Cancel</a>
	

              
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