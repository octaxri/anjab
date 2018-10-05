<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  relation <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Foreign Db <?php echo form_error('foreign_db') ?></label>
            <input type="text" class="form-control" name="foreign_db" id="foreign_db" placeholder="Foreign Db" value="<?php echo $foreign_db; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Foreign Table <?php echo form_error('foreign_table') ?></label>
            <input type="text" class="form-control" name="foreign_table" id="foreign_table" placeholder="Foreign Table" value="<?php echo $foreign_table; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Foreign Field <?php echo form_error('foreign_field') ?></label>
            <input type="text" class="form-control" name="foreign_field" id="foreign_field" placeholder="Foreign Field" value="<?php echo $foreign_field; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="master_db" value="<?php echo $master_db; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__relation') ?>" class="btn btn-default">Cancel</a>
	

              
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