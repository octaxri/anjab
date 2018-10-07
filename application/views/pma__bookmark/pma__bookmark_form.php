<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  bookmark <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Dbase <?php echo form_error('dbase') ?></label>
            <input type="text" class="form-control" name="dbase" id="dbase" placeholder="Dbase" value="<?php echo $dbase; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">User <?php echo form_error('user') ?></label>
            <input type="text" class="form-control" name="user" id="user" placeholder="User" value="<?php echo $user; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Label <?php echo form_error('label') ?></label>
            <input type="text" class="form-control" name="label" id="label" placeholder="Label" value="<?php echo $label; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="query" class="control-label">Query <?php echo form_error('query') ?></label>
            <textarea class="form-control" rows="3" name="query" id="query" placeholder="Query"><?php echo $query; ?></textarea>
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__bookmark') ?>" class="btn btn-default">Cancel</a>
	

              
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