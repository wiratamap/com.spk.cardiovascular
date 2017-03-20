<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPK - Cardiovascular</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/vendor/morrisjs/morris.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">SPK - Cardiovascular</a>
          </div>
          <!-- /.navbar-header -->

          <ul class="nav navbar-top-links navbar-right">
              <!-- /.dropdown -->
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                      <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                      </li>
                      <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url()?>auth/logout" name="log" id="logout" onClick="return confirm('Apakah Anda Yakin Ingin Keluar?')"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                  </ul>
                  <!-- /.dropdown-user -->
              </li>
              <!-- /.dropdown -->
          </ul>
          <!-- /.navbar-top-links -->

          <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse">
                  <ul class="nav" id="side-menu">
                      <li>
                          <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="flot.html">Flot Charts</a>
                              </li>
                              <li>
                                  <a href="morris.html">Morris.js Charts</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                      </li>
                      <li>
                          <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="panels-wells.html">Panels and Wells</a>
                              </li>
                              <li>
                                  <a href="buttons.html">Buttons</a>
                              </li>
                              <li>
                                  <a href="notifications.html">Notifications</a>
                              </li>
                              <li>
                                  <a href="typography.html">Typography</a>
                              </li>
                              <li>
                                  <a href="icons.html"> Icons</a>
                              </li>
                              <li>
                                  <a href="grid.html">Grid</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="#">Second Level Item</a>
                              </li>
                              <li>
                                  <a href="#">Second Level Item</a>
                              </li>
                              <li>
                                  <a href="#">Third Level <span class="fa arrow"></span></a>
                                  <ul class="nav nav-third-level">
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                  </ul>
                                  <!-- /.nav-third-level -->
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="blank.html">Blank Page</a>
                              </li>
                              <li>
                                  <a href="login.html">Login Page</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                  </ul>
              </div>
              <!-- /.sidebar-collapse -->
          </div>
          <!-- /.navbar-static-side -->
      </nav>

      <div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Form Diagnosa</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Data Pasien
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-6">
                              <?php echo validation_errors(); ?>
                              <?php echo form_open('user/diagnosis'); ?>
                                      <div class="form-group">
                                          <label>Usia</label>
                                          <input name="usia" class="form-control" placeholder="ex: 20 ~ 80" type="number" required="true">
                                      </div>
                                      <div class="form-group">
                                          <label>Jenis Kelamin</label>
                                          <select name="kelamin" class="form-control">
                                              <option>Laki-laki</option>
                                              <option>Wanita</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Tipe Sakit Dada</label>
                                          <select name="cp" class="form-control">
                                              <option>Typical Angina</option>
                                              <option>Atypical Angina</option>
                                              <option>Non-Anginal Pain</option>
                                              <option>Asymptomatic</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Tekanan Darah</label>
                                          <input name="tekanan" class="form-control" placeholder="ex: 70 ~ 180" type="number" required="true">
                                      </div>
                                      <div class="form-group">
                                          <label>Hasil ECG</label>
                                          <select name="ecg" class="form-control">
                                              <option>Normal</option>
                                              <option>Abnormal</option>
                                              <option>Kemungkinan Hipertropi</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Detak Jantung Maksmial</label>
                                          <input name="maxrate" class="form-control" placeholder="ex: 60 ~ 200" type="number" required="true">
                                      </div>
                                      <div class="form-group">
                                          <label>Latihan Fisik Membuat Dada Sakit?</label>
                                          <select name="exang" class="form-control">
                                              <option>Ya</option>
                                              <option>Tidak</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Oldpeak</label>
                                          <input name="oldpeak" class="form-control" placeholder="ex: -3 ~ 4" type="number" required="true">
                                      </div>
                                      <div class="form-group">
                                          <label>Slope</label>
                                          <select name="slope" class="form-control">
                                              <option>Condong Ke Atas</option>
                                              <option>Datar</option>
                                              <option>Condong Ke Bawah</option>
                                          </select>
                                      </div>
                                      <button type="submit" class="btn btn-outline btn-primary">Submit Button</button>
                                      <button type="reset" class="btn btn-outline btn-primary">Reset Button</button>
                                  <?php echo form_close(); ?>
                              </div>
                          </div>
                          <!-- /.row (nested) -->
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->


    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js'); ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/vendor/raphael/raphael.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/morrisjs/morris.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/data/morris-data.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js'); ?>"></script>

</body>

</html>
