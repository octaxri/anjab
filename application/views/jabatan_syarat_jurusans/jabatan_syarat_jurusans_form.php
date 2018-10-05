<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan syarat jurusans <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jabatan Id <?php echo form_error('jabatan_id') ?></label>
            <input type="text" class="form-control" name="jabatan_id" id="jabatan_id" placeholder="Jabatan Id" value="<?php echo $jabatan_id; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Bidang Id <?php echo form_error('bidang_id') ?></label>
            <input type="text" class="form-control" name="bidang_id" id="bidang_id" placeholder="Bidang Id" value="<?php echo $bidang_id; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_syarat_jurusans') ?>" class="btn btn-default">Cancel</a>
	

              
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