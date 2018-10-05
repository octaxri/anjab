<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pendidikan pangkats <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Jpendidikan Id <?php echo form_error('jpendidikan_id') ?></label>
            <input type="text" class="form-control" name="jpendidikan_id" id="jpendidikan_id" placeholder="Jpendidikan Id" value="<?php echo $jpendidikan_id; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Golongan Id <?php echo form_error('golongan_id') ?></label>
            <input type="text" class="form-control" name="golongan_id" id="golongan_id" placeholder="Golongan Id" value="<?php echo $golongan_id; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Ruang Id <?php echo form_error('ruang_id') ?></label>
            <input type="text" class="form-control" name="ruang_id" id="ruang_id" placeholder="Ruang Id" value="<?php echo $ruang_id; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Pangkat Id <?php echo form_error('pangkat_id') ?></label>
            <input type="text" class="form-control" name="pangkat_id" id="pangkat_id" placeholder="Pangkat Id" value="<?php echo $pangkat_id; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pendidikan_pangkats') ?>" class="btn btn-default">Cancel</a>
	

              
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