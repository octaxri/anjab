<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jabatan pelaksana kelompok <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="nama_kelompok" class="control-label">Nama Kelompok <?php echo form_error('nama_kelompok') ?></label>
            <textarea class="form-control" rows="3" name="nama_kelompok" id="nama_kelompok" placeholder="Nama Kelompok"><?php echo $nama_kelompok; ?></textarea>
        </div>
	    <div class="form-group col-md-6">
            <label for="char" class="control-label">Id Kelas <?php echo form_error('id_kelas') ?></label>
            <input type="text" class="form-control" name="id_kelas" id="id_kelas" placeholder="Id Kelas" value="<?php echo $id_kelas; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jabatan_pelaksana_kelompok') ?>" class="btn btn-default">Cancel</a>
	

              
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