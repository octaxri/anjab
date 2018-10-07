<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kelas <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Kelas <?php echo form_error('kelas') ?></label>
            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="double" class="control-label">Nilai Bawah <?php echo form_error('nilai_bawah') ?></label>
            <input type="text" class="form-control" name="nilai_bawah" id="nilai_bawah" placeholder="Nilai Bawah" value="<?php echo $nilai_bawah; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="double" class="control-label">Nilai Atas <?php echo form_error('nilai_atas') ?></label>
            <input type="text" class="form-control" name="nilai_atas" id="nilai_atas" placeholder="Nilai Atas" value="<?php echo $nilai_atas; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Id Rumpun <?php echo form_error('id_rumpun') ?></label>
            <?php echo cmb_dinamis('id_rumpun','rumpun_jabatan','nama_rumpun','id',$id_rumpun); ?>
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kelas') ?>" class="btn btn-default">Cancel</a>
	

              
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