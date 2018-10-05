<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  savedsearches <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Db Name <?php echo form_error('db_name') ?></label>
            <input type="text" class="form-control" name="db_name" id="db_name" placeholder="Db Name" value="<?php echo $db_name; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Search Name <?php echo form_error('search_name') ?></label>
            <input type="text" class="form-control" name="search_name" id="search_name" placeholder="Search Name" value="<?php echo $search_name; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="search_data" class="control-label">Search Data <?php echo form_error('search_data') ?></label>
            <textarea class="form-control" rows="3" name="search_data" id="search_data" placeholder="Search Data"><?php echo $search_data; ?></textarea>
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__savedsearches') ?>" class="btn btn-default">Cancel</a>
	

              
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