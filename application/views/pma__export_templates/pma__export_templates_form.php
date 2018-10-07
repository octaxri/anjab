<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  export templates <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Export Type <?php echo form_error('export_type') ?></label>
            <input type="text" class="form-control" name="export_type" id="export_type" placeholder="Export Type" value="<?php echo $export_type; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Template Name <?php echo form_error('template_name') ?></label>
            <input type="text" class="form-control" name="template_name" id="template_name" placeholder="Template Name" value="<?php echo $template_name; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="template_data" class="control-label">Template Data <?php echo form_error('template_data') ?></label>
            <textarea class="form-control" rows="3" name="template_data" id="template_data" placeholder="Template Data"><?php echo $template_data; ?></textarea>
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__export_templates') ?>" class="btn btn-default">Cancel</a>
	

              
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