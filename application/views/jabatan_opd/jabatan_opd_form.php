<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan opd <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jabatan <?php echo form_error('id_jabatan') ?></label>
            <?php echo cmb_dinamis('id_jabatan',' jabatans','nama_jabatan','id',$id_jabatan); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Jabatan Atas <?php echo form_error('id_jabatan_atas') ?></label>
            <input type="text" class="form-control" name="id_jabatan_atas" id="id_jabatan_atas" placeholder="Id Jabatan Atas" value="<?php echo $id_jabatan_atas; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Opd <?php echo form_error('id_opd') ?></label>
            <?php echo cmb_dinamis('id_opd',' opds','nama_opd','id',$id_opd); ?>
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_opd') ?>" class="btn btn-default">Cancel</a>
	

              
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