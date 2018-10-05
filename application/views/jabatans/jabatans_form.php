<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatans <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Urusan <?php echo form_error('id_urusan') ?></label>
             <?php echo cmb_dinamis('id_urusan','urusan','nama_urusan','id',$id_urusan); ?>
            
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jabatan Level <?php echo form_error('id_jabatan_level') ?></label>
            <?php echo cmb_dinamis('id_jabatan_level','jabatans','nama_jabatan','id',$id_jabatan_level); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="char" class="control-label">Kode Jabatan <?php echo form_error('kode_jabatan') ?></label>
            <input type="text" class="form-control" name="kode_jabatan" id="kode_jabatan" placeholder="Kode Jabatan" value="<?php echo $kode_jabatan; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Nama Jabatan <?php echo form_error('nama_jabatan') ?></label>
            <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan" placeholder="Nama Jabatan" value="<?php echo $nama_jabatan; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jenis <?php echo form_error('jenis') ?></label>
            <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis" value="<?php echo $jenis; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="tugas_jabatan" class="control-label">Tugas Jabatan <?php echo form_error('tugas_jabatan') ?></label>
            <textarea class="form-control" rows="3" name="tugas_jabatan" id="tugas_jabatan" placeholder="Tugas Jabatan"><?php echo $tugas_jabatan; ?></textarea>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Rumpun <?php echo form_error('id_rumpun') ?></label>
            <?php echo cmb_dinamis('id_rumpun','rumpun_jabatan','nama_rumpun','id',$id_rumpun); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jenjang <?php echo form_error('id_jenjang') ?></label>
            <?php echo cmb_dinamis('id_jenjang','jenjang','nama','id',$id_jenjang); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Opd <?php echo form_error('opd_id') ?></label>
            <?php echo cmb_dinamis('opd_id','opds','nama_opd','id',$opd_id); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="char" class="control-label">Kode Pengangkatan <?php echo form_error('kode_pengangkatan') ?></label>
            <input type="text" class="form-control" name="kode_pengangkatan" id="kode_pengangkatan" placeholder="Kode Pengangkatan" value="<?php echo $kode_pengangkatan; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatans') ?>" class="btn btn-default">Cancel</a>
	

              
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