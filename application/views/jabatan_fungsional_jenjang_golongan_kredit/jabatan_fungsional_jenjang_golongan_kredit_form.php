<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan fungsional jenjang golongan kredit <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Golongan <?php echo form_error('id_golongan') ?></label>
             <?php echo cmb_dinamis('id_golongan',' golongans','nama_gol','id',$id_golongan); ?>
           <!--  <input type="text" class="form-control" name="id_golongan" id="id_golongan" placeholder="Id Golongan" value="<?php echo $id_golongan; ?>" /> -->
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Ruang <?php echo form_error('id_ruang') ?></label>
            <?php echo cmb_dinamis('id_ruang',' ruangs','nama_ruang','id',$id_ruang); ?>
            <!-- <input type="text" class="form-control" name="id_ruang" id="id_ruang" placeholder="Id Ruang" value="<?php echo $id_ruang; ?>" /> -->
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Angka Kredit <?php echo form_error('id_angka_kredit') ?></label>
            <?php echo cmb_dinamis('id_angka_kredit',' jabatan_fungsional_angka_kredit','angka','id',$id_angka_kredit); ?>
            <!-- <input type="text" class="form-control" name="id_angka_kredit" id="id_angka_kredit" placeholder="Id Angka Kredit" value="<?php echo $id_angka_kredit; ?>" /> -->
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jenjang Tingkat <?php echo form_error('id_jenjang_tingkat') ?></label>
            <?php echo cmb_dinamis('id_jenjang_tingkat',' jabatan_fungsional_jenjang_tingkat','id_jenjang','id',$id_jenjang_tingkat); ?>
            <!-- <input type="text" class="form-control" name="id_jenjang_tingkat" id="id_jenjang_tingkat" placeholder="Id Jenjang Tingkat" value="<?php echo $id_jenjang_tingkat; ?>" /> -->
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Angka Kredit Minimal <?php echo form_error('id_angka_kredit_minimal') ?></label>
           <?php echo cmb_dinamis('id_angka_kredit_minimal',' jabatan_fungsional_angka_kredit_minimal','angka_minimal','id',$id_angka_kredit_minimal); ?>
            <!-- <input type="text" class="form-control" name="id_angka_kredit_minimal" id="id_angka_kredit_minimal" placeholder="Id Angka Kredit Minimal" value="<?php echo $id_angka_kredit_minimal; ?>" /> -->
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_fungsional_jenjang_golongan_kredit') ?>" class="btn btn-default">Cancel</a>
	

              
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