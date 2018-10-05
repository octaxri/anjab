<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pma  tracking <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="datetime" class="control-label">Date Created <?php echo form_error('date_created') ?></label>
            <input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo $date_created; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="datetime" class="control-label">Date Updated <?php echo form_error('date_updated') ?></label>
            <input type="text" class="form-control" name="date_updated" id="date_updated" placeholder="Date Updated" value="<?php echo $date_updated; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="schema_snapshot" class="control-label">Schema Snapshot <?php echo form_error('schema_snapshot') ?></label>
            <textarea class="form-control" rows="3" name="schema_snapshot" id="schema_snapshot" placeholder="Schema Snapshot"><?php echo $schema_snapshot; ?></textarea>
        </div>
	    <div class="form-group col-md-6">
            <label for="schema_sql" class="control-label">Schema Sql <?php echo form_error('schema_sql') ?></label>
            <textarea class="form-control" rows="3" name="schema_sql" id="schema_sql" placeholder="Schema Sql"><?php echo $schema_sql; ?></textarea>
        </div>
	    <div class="form-group col-md-6">
            <label for="longtext" class="control-label">Data Sql <?php echo form_error('data_sql') ?></label>
            <input type="text" class="form-control" name="data_sql" id="data_sql" placeholder="Data Sql" value="<?php echo $data_sql; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="set" class="control-label">Tracking <?php echo form_error('tracking') ?></label>
            <input type="text" class="form-control" name="tracking" id="tracking" placeholder="Tracking" value="<?php echo $tracking; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="int" class="control-label">Tracking Active <?php echo form_error('tracking_active') ?></label>
            <input type="text" class="form-control" name="tracking_active" id="tracking_active" placeholder="Tracking Active" value="<?php echo $tracking_active; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="db_name" value="<?php echo $db_name; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pma__tracking') ?>" class="btn btn-default">Cancel</a>
	

              
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