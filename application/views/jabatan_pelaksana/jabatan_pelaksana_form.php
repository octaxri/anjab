<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan pelaksana <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="nama" class="control-label">Nama <?php echo form_error('nama') ?></label>
            <textarea class="form-control" rows="3" name="nama" id="nama" placeholder="Nama"><?php echo $nama; ?></textarea>
        </div>
	    <div class="form-group col-md-6">
            <label for="char" class="control-label">Id Kelompok <?php echo form_error('id_kelompok') ?></label>
            <input type="text" class="form-control" name="id_kelompok" id="id_kelompok" placeholder="Id Kelompok" value="<?php echo $id_kelompok; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="tugas_jabatan" class="control-label">Tugas Jabatan <?php echo form_error('tugas_jabatan') ?></label>
            <textarea class="form-control" rows="3" name="tugas_jabatan" id="tugas_jabatan" placeholder="Tugas Jabatan"><?php echo $tugas_jabatan; ?></textarea>
        </div>
	    <div class="form-group col-md-6">
            <label for="char" class="control-label">Id Urusan <?php echo form_error('id_urusan') ?></label>
            <input type="text" class="form-control" name="id_urusan" id="id_urusan" placeholder="Id Urusan" value="<?php echo $id_urusan; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_pelaksana') ?>" class="btn btn-default">Cancel</a>
	

              
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