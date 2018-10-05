<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan jenjang kategori <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jabatan <?php echo form_error('id_jabatan') ?></label>
            <?php echo cmb_dinamis('id_jabatan',' jabatans','nama_jabatan','id',$id_jabatan); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jenjang <?php echo form_error('id_jenjang') ?></label>
            <input type="text" class="form-control" name="id_jenjang" id="id_jenjang" placeholder="Id Jenjang" value="<?php echo $id_jenjang; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Jenjang Kategori <?php echo form_error('id_jenjang_kategori') ?></label>
            <input type="text" class="form-control" name="id_jenjang_kategori" id="id_jenjang_kategori" placeholder="Id Jenjang Kategori" value="<?php echo $id_jenjang_kategori; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Kelas <?php echo form_error('id_kelas') ?></label>
            <input type="text" class="form-control" name="id_kelas" id="id_kelas" placeholder="Id Kelas" value="<?php echo $id_kelas; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Golongan <?php echo form_error('id_golongan') ?></label>
            <input type="text" class="form-control" name="id_golongan" id="id_golongan" placeholder="Id Golongan" value="<?php echo $id_golongan; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Ruang <?php echo form_error('id_ruang') ?></label>
            <input type="text" class="form-control" name="id_ruang" id="id_ruang" placeholder="Id Ruang" value="<?php echo $id_ruang; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="char" class="control-label">Kode Pengangkatan <?php echo form_error('kode_pengangkatan') ?></label>
            <input type="text" class="form-control" name="kode_pengangkatan" id="kode_pengangkatan" placeholder="Kode Pengangkatan" value="<?php echo $kode_pengangkatan; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_jenjang_kategori') ?>" class="btn btn-default">Cancel</a>
	

              
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