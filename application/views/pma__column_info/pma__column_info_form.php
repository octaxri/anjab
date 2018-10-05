<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  column info <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Db Name <?php echo form_error('db_name') ?></label>
            <input type="text" class="form-control" name="db_name" id="db_name" placeholder="Db Name" value="<?php echo $db_name; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Table Name <?php echo form_error('table_name') ?></label>
            <input type="text" class="form-control" name="table_name" id="table_name" placeholder="Table Name" value="<?php echo $table_name; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Column Name <?php echo form_error('column_name') ?></label>
            <input type="text" class="form-control" name="column_name" id="column_name" placeholder="Column Name" value="<?php echo $column_name; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Comment <?php echo form_error('comment') ?></label>
            <input type="text" class="form-control" name="comment" id="comment" placeholder="Comment" value="<?php echo $comment; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Mimetype <?php echo form_error('mimetype') ?></label>
            <input type="text" class="form-control" name="mimetype" id="mimetype" placeholder="Mimetype" value="<?php echo $mimetype; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Transformation <?php echo form_error('transformation') ?></label>
            <input type="text" class="form-control" name="transformation" id="transformation" placeholder="Transformation" value="<?php echo $transformation; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Transformation Options <?php echo form_error('transformation_options') ?></label>
            <input type="text" class="form-control" name="transformation_options" id="transformation_options" placeholder="Transformation Options" value="<?php echo $transformation_options; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Input Transformation <?php echo form_error('input_transformation') ?></label>
            <input type="text" class="form-control" name="input_transformation" id="input_transformation" placeholder="Input Transformation" value="<?php echo $input_transformation; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Input Transformation Options <?php echo form_error('input_transformation_options') ?></label>
            <input type="text" class="form-control" name="input_transformation_options" id="input_transformation_options" placeholder="Input Transformation Options" value="<?php echo $input_transformation_options; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__column_info') ?>" class="btn btn-default">Cancel</a>
	

              
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