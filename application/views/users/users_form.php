<?php $this->load->view('templates/header');?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Users <?php echo $button ?></h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">
              <div class="row">
              
              
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="char" class="control-label">No Hp <?php echo form_error('no_hp') ?></label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="char" class="control-label">Id Opd <?php echo form_error('id_opd') ?></label>
            <?php echo cmb_dinamis('id_opd',' opds','nama_opd','id',$id_opd); ?>
        </div>
	    <div class="form-group col-md-6">
            <label for="char" class="control-label">Akses <?php echo form_error('akses') ?></label>
            <input type="text" class="form-control" name="akses" id="akses" placeholder="Akses" value="<?php echo $akses; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group col-md-6">
            <label for="varchar" class="control-label">Remember Token <?php echo form_error('remember_token') ?></label>
            <input type="text" class="form-control" name="remember_token" id="remember_token" placeholder="Remember Token" value="<?php echo $remember_token; ?>" />
        </div></div><div class="box-footer">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a>
	

              
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