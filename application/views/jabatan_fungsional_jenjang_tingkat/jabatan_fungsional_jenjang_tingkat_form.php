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
            <label for="int" class="control-label">Jenjang <?php echo form_error('id_jenjang') ?></label>
            <?php echo cmb_dinamis('id_jenjang',' jenjang','nama','id',$id_jenjang); ?>
            <!-- <input type="text" class="form-control" name="id_jenjang" id="id_jenjang" placeholder="Id Jenjang" value="<?php echo $id_jenjang; ?>" /> -->
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Tingkat Jabatan <?php echo form_error('id_tingkat_jabatan') ?></label>
            <?php echo cmb_dinamis('id_tingkat_jabatan',' jabatan_fungsional_tingkat_jabatan','id_tingkat','id',$id_tingkat_jabatan); ?>
            <!-- <input type="text" class="form-control" name="id_tingkat_jabatan" id="id_tingkat_jabatan" placeholder="Id Tingkat Jabatan" value="<?php echo $id_tingkat_jabatan; ?>" /> -->
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Batas Usia <?php echo form_error('id_batas_usia') ?></label>
            <?php echo cmb_dinamis('id_batas_usia',' jabatan_fungsional_batas_usia','usia','id',$id_batas_usia); ?>
            <!-- <input type="text" class="form-control" name="id_batas_usia" id="id_batas_usia" placeholder="Id Batas Usia" value="<?php echo $id_batas_usia; ?>" /> -->
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Tunjangan <?php echo form_error('id_tunjangan') ?></label>
            <?php echo cmb_dinamis('id_tunjangan',' jabatan_fungsional_tunjangan','tunjangan','id',$id_tunjangan); ?>
            <!-- <input type="text" class="form-control" name="id_tunjangan" id="id_tunjangan" placeholder="Id Tunjangan" value="<?php echo $id_tunjangan; ?>" /> -->
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Kategori <?php echo form_error('id_kategori') ?></label>
            <?php echo cmb_dinamis('id_kategori',' jenjang_kategori','nama_kategori','id',$id_kategori); ?>
            <!-- <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Id Kategori" value="<?php echo $id_kategori; ?>" /> -->
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jabatan <?php echo form_error('id_jabatan') ?></label>
            <?php echo cmb_dinamis('id_jabatan',' jabatans','nama_jabatan','id',$id_jabatan); ?>
            <!-- <input type="text" class="form-control" name="id_jabatan" id="id_jabatan" placeholder="Id Jabatan" value="<?php echo $id_jabatan; ?>" /> -->
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