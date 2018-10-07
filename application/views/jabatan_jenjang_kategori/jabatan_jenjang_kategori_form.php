<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
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
            <?php echo cmb_dinamis('id_jenjang',' jenjang','nama','id',$id_jenjang); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jenjang Kategori <?php echo form_error('id_jenjang_kategori') ?></label>
            <?php echo cmb_dinamis('id_jenjang_kategori',' jenjang_kategori','nama_kategori','id',$id_jenjang_kategori); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Kelas <?php echo form_error('id_kelas') ?></label>
           <?php echo cmb_dinamis('id_kelas',' kelas','kelas','id',$id_kelas); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Golongan <?php echo form_error('id_golongan') ?></label>
            <?php echo cmb_dinamis('id_golongan',' golongans','nama_gol','id',$id_golongan); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Ruang <?php echo form_error('id_ruang') ?></label>
           <?php echo cmb_dinamis('id_ruang',' ruangs','nama_ruang','id',$id_ruang); ?>
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