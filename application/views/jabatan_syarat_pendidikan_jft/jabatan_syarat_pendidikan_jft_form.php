<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan syarat pendidikan jft <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jabatan <?php echo form_error('id_jabatan') ?></label>
            <?php echo cmb_dinamis('id_jabatan',' jabatans','nama_jabatan','id',$id_jabatan); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jpendidikan <?php echo form_error('jpendidikan_id') ?></label>
            <?php echo cmb_dinamis('jpendidikan_id','jpendidikans','nama','id',$jpendidikan_id); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Bidang <?php echo form_error('bidang_id') ?></label>
            <?php echo cmb_dinamis('bidang_id','jurusan_bidang','nama_bidang','id',$bidang_id); ?>
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_syarat_pendidikan_jft') ?>" class="btn btn-default">Cancel</a>
	

              
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