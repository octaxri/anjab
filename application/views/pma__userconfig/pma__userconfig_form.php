<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  userconfig <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="timestamp" class="control-label">Timevalue <?php echo form_error('timevalue') ?></label>
            <input type="text" class="form-control" name="timevalue" id="timevalue" placeholder="Timevalue" value="<?php echo $timevalue; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="config_data" class="control-label">Config Data <?php echo form_error('config_data') ?></label>
            <textarea class="form-control" rows="3" name="config_data" id="config_data" placeholder="Config Data"><?php echo $config_data; ?></textarea>
        </div></div><div class="box-footer">
	    <input type="hidden" name="username" value="<?php echo $username; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__userconfig') ?>" class="btn btn-default">Cancel</a>
	

              
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