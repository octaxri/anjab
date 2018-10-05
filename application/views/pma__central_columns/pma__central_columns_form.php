<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  central columns <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Col Type <?php echo form_error('col_type') ?></label>
            <input type="text" class="form-control" name="col_type" id="col_type" placeholder="Col Type" value="<?php echo $col_type; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="col_length" class="control-label">Col Length <?php echo form_error('col_length') ?></label>
            <textarea class="form-control" rows="3" name="col_length" id="col_length" placeholder="Col Length"><?php echo $col_length; ?></textarea>
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Col Collation <?php echo form_error('col_collation') ?></label>
            <input type="text" class="form-control" name="col_collation" id="col_collation" placeholder="Col Collation" value="<?php echo $col_collation; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="tinyint" class="control-label">Col IsNull <?php echo form_error('col_isNull') ?></label>
            <input type="text" class="form-control" name="col_isNull" id="col_isNull" placeholder="Col IsNull" value="<?php echo $col_isNull; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Col Extra <?php echo form_error('col_extra') ?></label>
            <input type="text" class="form-control" name="col_extra" id="col_extra" placeholder="Col Extra" value="<?php echo $col_extra; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="col_default" class="control-label">Col Default <?php echo form_error('col_default') ?></label>
            <textarea class="form-control" rows="3" name="col_default" id="col_default" placeholder="Col Default"><?php echo $col_default; ?></textarea>
        </div></div><div class="box-footer">
	    <input type="hidden" name="db_name" value="<?php echo $db_name; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__central_columns') ?>" class="btn btn-default">Cancel</a>
	

              
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