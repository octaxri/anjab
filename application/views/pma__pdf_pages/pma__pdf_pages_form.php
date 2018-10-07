<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  pdf pages <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Db Name <?php echo form_error('db_name') ?></label>
            <input type="text" class="form-control" name="db_name" id="db_name" placeholder="Db Name" value="<?php echo $db_name; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Page Descr <?php echo form_error('page_descr') ?></label>
            <input type="text" class="form-control" name="page_descr" id="page_descr" placeholder="Page Descr" value="<?php echo $page_descr; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="page_nr" value="<?php echo $page_nr; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__pdf_pages') ?>" class="btn btn-default">Cancel</a>
	

              
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