

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Anjab</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.min.css'); ?>">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="margin-bottom: 5px;">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                          <i class="text-red"> Selamat  Siang !!</i><p> mahruszain</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online | 
              <span id="clock" class="text-yellow" title="12:52:30">12:52:30</span></a>
            </div>
          </div>
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
     
  <!--Pendidikan -->
          <li class="treeview">
              <a href="#">
                <i class="fa fa-graduation-cap text-red"></i>
                <span>Master Semua</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" id="id_sid">
                <?php echo '   <li>
    <a href="'.site_url('golongans').'"><i class="fa fa-circle-o text-yellow"></i> Golongans</a>
  </li><li>
    <a href="'.site_url('homes').'"><i class="fa fa-circle-o text-yellow"></i> Homes</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_angka_kredit').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional angka kredit</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_angka_kredit_minimal').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional angka kredit minimal</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_batas_usia').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional batas usia</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_jenjang').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional jenjang</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_jenjang_golongan_kredit').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional jenjang golongan kredit</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_jenjang_tingkat').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional jenjang tingkat</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_judul').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional judul</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_kategori').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional kategori</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_kategori_jabatan').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional kategori jabatan</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_kelompok').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional kelompok</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_syarat_jenjang').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional syarat jenjang</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_syarat_kelompok').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional syarat kelompok</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_syarat_pengangkatan').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional syarat pengangkatan</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_tingkat').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional tingkat</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_tingkat_jabatan').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional tingkat jabatan</a>
  </li><li>
    <a href="'.site_url('jabatan_fungsional_tunjangan').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan fungsional tunjangan</a>
  </li><li>
    <a href="'.site_url('jabatan_jenjang_kategori').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan jenjang kategori</a>
  </li><li>
    <a href="'.site_url('jabatan_kode_pengangkatan').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan kode pengangkatan</a>
  </li><li>
    <a href="'.site_url('jabatan_kode_syarat').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan kode syarat</a>
  </li><li>
    <a href="'.site_url('jabatan_level').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan level</a>
  </li><li>
    <a href="'.site_url('jabatan_level_opd').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan level opd</a>
  </li><li>
    <a href="'.site_url('jabatan_opd').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan opd</a>
  </li><li>
    <a href="'.site_url('jabatan_pelaksana').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan pelaksana</a>
  </li><li>
    <a href="'.site_url('jabatan_pelaksana_kelompok').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan pelaksana kelompok</a>
  </li><li>
    <a href="'.site_url('jabatan_pelaksana_kualifikasi').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan pelaksana kualifikasi</a>
  </li><li>
    <a href="'.site_url('jabatan_pelaksana_urusan').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan pelaksana urusan</a>
  </li><li>
    <a href="'.site_url('jabatan_rumpunpelaksana').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan rumpunpelaksana</a>
  </li><li>
    <a href="'.site_url('jabatan_syarat_jurusans').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan syarat jurusans</a>
  </li><li>
    <a href="'.site_url('jabatan_syarat_pendidikan_jft').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan syarat pendidikan jft</a>
  </li><li>
    <a href="'.site_url('jabatan_syarat_pendidikans').'"><i class="fa fa-circle-o text-yellow"></i> Jabatan syarat pendidikans</a>
  </li><li>
    <a href="'.site_url('jabatans').'"><i class="fa fa-circle-o text-yellow"></i> Jabatans</a>
  </li><li>
    <a href="'.site_url('jenis_opd').'"><i class="fa fa-circle-o text-yellow"></i> Jenis opd</a>
  </li><li>
    <a href="'.site_url('jenjang').'"><i class="fa fa-circle-o text-yellow"></i> Jenjang</a>
  </li><li>
    <a href="'.site_url('jenjang_kategori').'"><i class="fa fa-circle-o text-yellow"></i> Jenjang kategori</a>
  </li><li>
    <a href="'.site_url('jenjang_kategori_golongan').'"><i class="fa fa-circle-o text-yellow"></i> Jenjang kategori golongan</a>
  </li><li>
    <a href="'.site_url('jenjang_kategori_jf_tertentu').'"><i class="fa fa-circle-o text-yellow"></i> Jenjang kategori jf tertentu</a>
  </li><li>
    <a href="'.site_url('jpendidikans').'"><i class="fa fa-circle-o text-yellow"></i> Jpendidikans</a>
  </li><li>
    <a href="'.site_url('jurusan_bidang').'"><i class="fa fa-circle-o text-yellow"></i> Jurusan bidang</a>
  </li><li>
    <a href="'.site_url('jurusans').'"><i class="fa fa-circle-o text-yellow"></i> Jurusans</a>
  </li><li>
    <a href="'.site_url('kelas').'"><i class="fa fa-circle-o text-yellow"></i> Kelas</a>
  </li><li>
    <a href="'.site_url('migrations').'"><i class="fa fa-circle-o text-yellow"></i> Migrations</a>
  </li><li>
    <a href="'.site_url('opds').'"><i class="fa fa-circle-o text-yellow"></i> Opds</a>
  </li><li>
    <a href="'.site_url('pangkats').'"><i class="fa fa-circle-o text-yellow"></i> Pangkats</a>
  </li><li>
    <a href="'.site_url('password_resets').'"><i class="fa fa-circle-o text-yellow"></i> Password resets</a>
  </li><li>
    <a href="'.site_url('pegawai_pendidikans').'"><i class="fa fa-circle-o text-yellow"></i> Pegawai pendidikans</a>
  </li><li>
    <a href="'.site_url('pegawais').'"><i class="fa fa-circle-o text-yellow"></i> Pegawais</a>
  </li><li>
    <a href="'.site_url('pendidikan_pangkats').'"><i class="fa fa-circle-o text-yellow"></i> Pendidikan pangkats</a>
  </li><li>
    <a href="'.site_url('pma__bookmark').'"><i class="fa fa-circle-o text-yellow"></i> Pma  bookmark</a>
  </li><li>
    <a href="'.site_url('pma__central_columns').'"><i class="fa fa-circle-o text-yellow"></i> Pma  central columns</a>
  </li><li>
    <a href="'.site_url('pma__column_info').'"><i class="fa fa-circle-o text-yellow"></i> Pma  column info</a>
  </li><li>
    <a href="'.site_url('pma__designer_settings').'"><i class="fa fa-circle-o text-yellow"></i> Pma  designer settings</a>
  </li><li>
    <a href="'.site_url('pma__export_templates').'"><i class="fa fa-circle-o text-yellow"></i> Pma  export templates</a>
  </li><li>
    <a href="'.site_url('pma__favorite').'"><i class="fa fa-circle-o text-yellow"></i> Pma  favorite</a>
  </li><li>
    <a href="'.site_url('pma__history').'"><i class="fa fa-circle-o text-yellow"></i> Pma  history</a>
  </li><li>
    <a href="'.site_url('pma__navigationhiding').'"><i class="fa fa-circle-o text-yellow"></i> Pma  navigationhiding</a>
  </li><li>
    <a href="'.site_url('pma__pdf_pages').'"><i class="fa fa-circle-o text-yellow"></i> Pma  pdf pages</a>
  </li><li>
    <a href="'.site_url('pma__recent').'"><i class="fa fa-circle-o text-yellow"></i> Pma  recent</a>
  </li><li>
    <a href="'.site_url('pma__relation').'"><i class="fa fa-circle-o text-yellow"></i> Pma  relation</a>
  </li><li>
    <a href="'.site_url('pma__savedsearches').'"><i class="fa fa-circle-o text-yellow"></i> Pma  savedsearches</a>
  </li><li>
    <a href="'.site_url('pma__table_coords').'"><i class="fa fa-circle-o text-yellow"></i> Pma  table coords</a>
  </li><li>
    <a href="'.site_url('pma__table_info').'"><i class="fa fa-circle-o text-yellow"></i> Pma  table info</a>
  </li><li>
    <a href="'.site_url('pma__table_uiprefs').'"><i class="fa fa-circle-o text-yellow"></i> Pma  table uiprefs</a>
  </li><li>
    <a href="'.site_url('pma__tracking').'"><i class="fa fa-circle-o text-yellow"></i> Pma  tracking</a>
  </li><li>
    <a href="'.site_url('pma__userconfig').'"><i class="fa fa-circle-o text-yellow"></i> Pma  userconfig</a>
  </li><li>
    <a href="'.site_url('pma__usergroups').'"><i class="fa fa-circle-o text-yellow"></i> Pma  usergroups</a>
  </li><li>
    <a href="'.site_url('pma__users').'"><i class="fa fa-circle-o text-yellow"></i> Pma  users</a>
  </li><li>
    <a href="'.site_url('ruangs').'"><i class="fa fa-circle-o text-yellow"></i> Ruangs</a>
  </li><li>
    <a href="'.site_url('rumpun_jabatan').'"><i class="fa fa-circle-o text-yellow"></i> Rumpun jabatan</a>
  </li><li>
    <a href="'.site_url('urusan').'"><i class="fa fa-circle-o text-yellow"></i> Urusan</a>
  </li><li>
    <a href="'.site_url('users').'"><i class="fa fa-circle-o text-yellow"></i> Users</a>
  </li>'; ?>
              </ul>
          </li>
        <!--Pendidikan -->
          <li class="treeview">
              <a href="#">
                <i class="fa fa-graduation-cap text-red"></i>
                <span>Master Pendidikan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" id="id_sid">
                <li><a href="<?php echo base_url(); ?>jpendidikans"><i class="fa fa-circle-o text-red"></i>Data Jenjang Pendidikan</a></li>
                <li><a href="<?php echo base_url(); ?>jurusans"><i class="fa fa-circle-o text-blue"></i>Data Bidang Pendidikan</a></li>
                <li><a href="<?php echo base_url(); ?>jurusan_bidang"><i class="fa fa-circle-o text-yellow"></i>Data Jurusan Pendidikan</a></li>
              </ul>
          </li>
       
<!--Detil Kenaikan Jabatan -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-sitemap text-blue"></i>
                <span>Master Jabatan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" id="id_sid">
                <li><a href="<?php echo base_url(); ?>pangkats"><i class="fa fa-circle-o text-red"></i>Data Pangkat</a></li>
                
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o text-green"></i>Data Jabatan<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a href="<?php echo base_url(); ?>jabatanStruktural"><i class="fa fa-circle-o text-red"></i> Struktural</a></li>
                      <li><a href="<?php echo base_url(); ?>jabatan_f_tertentu"><i class="fa fa-circle-o text-yellow"></i> Fungsional Tertentu</a></li>
                      <li class="treeview"><a href="#"><i class="fa fa-circle-o text-green"></i> Pelaksana <i class="fa fa-angle-left pull-right"></i></a>
                         <ul class="treeview-menu">
                            <li><a href="<?php echo base_url(); ?>jabatan"><i class="fa fa-circle-o text-red"></i> Urusan Pemerintahan</a></li>
                            <li><a href="<?php echo base_url(); ?>jabatan_fu_rumpun_jabatan"><i class="fa fa-circle-o text-yellow"></i> Pelaksana Umum</a></li>
                        </ul>
                    </li>
               <li><a href="<?php echo base_url(); ?>jabatan_kelompok"><i class="fa fa-circle-o text-red"></i> Kelompok Jabatan</a></li>

                  </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>jabatan_kode_syarat"><i class="fa fa-circle-o text-yellow"></i>Data KSP</a></li>
                <li><a href="<?php echo base_url(); ?>pendidikan_pangkats"><i class="fa fa-circle-o text-yellow"></i>Data Pangkat Pendidikan</a></li>
                <li><a href="<?php echo base_url(); ?>jabatan_level_opd"><i class="fa fa-circle-o text-purple"></i>Data Jabatan Level OPD</a></li>
                <li><a href="<?php echo base_url(); ?>urusan"><i class="fa fa-circle-o text-yellow"></i>Data Urusan Pemerintahan</a></li>
                <li><a href="<?php echo base_url(); ?>kelas"><i class="fa fa-circle-o text-blue"></i>Data Kelas Jabatan</a></li>
                <li><a href="<?php echo base_url(); ?>rumpunjabatan"><i class="fa fa-circle-o text-yellow"></i>Data Nama Pelaksana</a></li>

              </ul>
            </li>

<!--Daftar OPD -->  

            <li class="treeview">
              <a href="#">
                <i class="fa fa-group text-orange"></i>
                <span>Master Data OPD</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" id="id_sid">
                <li><a href="<?php echo base_url(); ?>jenis_opd"><i class="fa fa-circle-o text-green"></i>Data Jenis OPD</a></li>
                <li><a href="<?php echo base_url(); ?>opds"><i class="fa fa-circle-o text-orange"></i>Data Daftar OPD</a></li>
                <li><a href="<?php echo base_url(); ?>jabatan_opd"><i class="fa fa-circle-o text-purple"></i>Data Jabatan OPD</a></li>

              </ul>
            </li>
<!--Pegawai -->
            <li>
              <a href="<?php echo base_url(); ?>pegawai">
                <i class="fa fa-group text-green"></i>
                <span>Master Pegawai</span>
              </a>
            </li>
<!--Daftar Users -->  
            <li>
              <a href="<?php echo base_url(); ?>user">
                <i class="fa  fa-users text-green"></i> <span> Master Pengguna</span> 
              </a>
            </li>

 <li class="header">  MENU ANJAB</li>
<!--Pendidikan -->
          <li class="treeview">
              <a href="#">
                <i class="fa fa-edit text-yellow"></i>
                <span>ANJAB</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
          </li> 
         <li class="treeview">
              <a href="#">
                <i class="fa fa-edit text-red"></i>
                <span>ABK</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
          </li>
          <li class="header"> MENU EVJAB</li>
         <li class="treeview">
              <a href="#">
                <i class="fa fa-edit text-purple"></i>
                <span>EVJAB</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
          </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  

