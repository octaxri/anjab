<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pegawai pendidikans <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Pegawai Id <?php echo form_error('pegawai_id') ?></label>
            <input type="text" class="form-control" name="pegawai_id" id="pegawai_id" placeholder="Pegawai Id" value="<?php echo $pegawai_id; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Jpendidikan Id <?php echo form_error('jpendidikan_id') ?></label>
            <input type="text" class="form-control" name="jpendidikan_id" id="jpendidikan_id" placeholder="Jpendidikan Id" value="<?php echo $jpendidikan_id; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Jurusan Id <?php echo form_error('jurusan_id') ?></label>
            <input type="text" class="form-control" name="jurusan_id" id="jurusan_id" placeholder="Jurusan Id" value="<?php echo $jurusan_id; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pegawai_pendidikans') ?>" class="btn btn-default">Cancel</a>
	

              
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