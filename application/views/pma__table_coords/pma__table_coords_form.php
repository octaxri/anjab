<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  table coords <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="float" class="control-label">X <?php echo form_error('x') ?></label>
            <input type="text" class="form-control" name="x" id="x" placeholder="X" value="<?php echo $x; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="float" class="control-label">Y <?php echo form_error('y') ?></label>
            <input type="text" class="form-control" name="y" id="y" placeholder="Y" value="<?php echo $y; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="db_name" value="<?php echo $db_name; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__table_coords') ?>" class="btn btn-default">Cancel</a>
	

              
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