<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan fungsional jenjang tingkat <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Jenjang <?php echo form_error('id_jenjang') ?></label>
            <input type="text" class="form-control" name="id_jenjang" id="id_jenjang" placeholder="Id Jenjang" value="<?php echo $id_jenjang; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Tingkat Jabatan <?php echo form_error('id_tingkat_jabatan') ?></label>
            <input type="text" class="form-control" name="id_tingkat_jabatan" id="id_tingkat_jabatan" placeholder="Id Tingkat Jabatan" value="<?php echo $id_tingkat_jabatan; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Batas Usia <?php echo form_error('id_batas_usia') ?></label>
            <input type="text" class="form-control" name="id_batas_usia" id="id_batas_usia" placeholder="Id Batas Usia" value="<?php echo $id_batas_usia; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Tunjangan <?php echo form_error('id_tunjangan') ?></label>
            <input type="text" class="form-control" name="id_tunjangan" id="id_tunjangan" placeholder="Id Tunjangan" value="<?php echo $id_tunjangan; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Kategori <?php echo form_error('id_kategori') ?></label>
            <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Id Kategori" value="<?php echo $id_kategori; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Jabatan <?php echo form_error('id_jabatan') ?></label>
            <input type="text" class="form-control" name="id_jabatan" id="id_jabatan" placeholder="Id Jabatan" value="<?php echo $id_jabatan; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_fungsional_jenjang_tingkat') ?>" class="btn btn-default">Cancel</a>
	

              
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