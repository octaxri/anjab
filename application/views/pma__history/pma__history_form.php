<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  history <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Db <?php echo form_error('db') ?></label>
            <input type="text" class="form-control" name="db" id="db" placeholder="Db" value="<?php echo $db; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Table <?php echo form_error('table') ?></label>
            <input type="text" class="form-control" name="table" id="table" placeholder="Table" value="<?php echo $table; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="timestamp" class="control-label">Timevalue <?php echo form_error('timevalue') ?></label>
            <input type="text" class="form-control" name="timevalue" id="timevalue" placeholder="Timevalue" value="<?php echo $timevalue; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="sqlquery" class="control-label">Sqlquery <?php echo form_error('sqlquery') ?></label>
            <textarea class="form-control" rows="3" name="sqlquery" id="sqlquery" placeholder="Sqlquery"><?php echo $sqlquery; ?></textarea>
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__history') ?>" class="btn btn-default">Cancel</a>
	

              
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