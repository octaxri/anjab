<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  table uiprefs <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="prefs" class="control-label">Prefs <?php echo form_error('prefs') ?></label>
            <textarea class="form-control" rows="3" name="prefs" id="prefs" placeholder="Prefs"><?php echo $prefs; ?></textarea>
        </div>
	    <div class="form-group col-md-6">
            <label for="timestamp" class="control-label">Last Update <?php echo form_error('last_update') ?></label>
            <input type="text" class="form-control" name="last_update" id="last_update" placeholder="Last Update" value="<?php echo $last_update; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="username" value="<?php echo $username; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__table_uiprefs') ?>" class="btn btn-default">Cancel</a>
	

              
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