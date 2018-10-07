<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Opds <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Jenis Opd <?php echo form_error('id_jenis_opd') ?></label>
            <?php echo cmb_dinamis('id_jenis_opd',' jenis_opd','nama_jenis','id',$id_jenis_opd); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Nama Opd <?php echo form_error('nama_opd') ?></label>
            <input type="text" class="form-control" name="nama_opd" id="nama_opd" placeholder="Nama Opd" value="<?php echo $nama_opd; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="alamat" class="control-label">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('opds') ?>" class="btn btn-default">Cancel</a>
	

              
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