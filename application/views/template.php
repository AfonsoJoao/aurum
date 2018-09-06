<!DOCTYPE html>
<html>
  <head>

  <script < src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aurum Soft</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="skin-blue fixed sidebar-mini sidebar-mini-expand-feature">
      <div class="wrapper">
        <header class="main-header">
          <!-- Logo -->
          <a class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>UR</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>AURUM</b></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Para editar barra de menu de cima colocar algo aqui -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                  <li>
                    <a href="<?php echo base_url();?>"><i class=" fa fa-close"></i></a>
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
            <div class="user-panel">
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree" class = "collapse">
              <li class="header">MENU</li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-plus"></i>
                  <span>Cadastrar</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
              <li><a href="<?php echo base_url().'revendedora/adicionar/';?>"><i class="fa fa-circle-o"></i>Revendedora</a></li>
                  <li><a href="<?php echo base_url().'campanha/adicionar/';?>"><i class="fa fa-circle-o"></i>Campanha</a></li>
                  <li><a href="<?php echo base_url().'produto/adicionar/';?>"><i class="fa fa-circle-o"></i>Produto</a></li>
                  <li><a href="<?php echo base_url().'kit/adicionar/';?>"><i class="fa fa-circle-o"></i>Kit</a></li>
                  <li><a href="<?php echo base_url().'praca/adicionar/';?>"><i class="fa fa-circle-o"></i>Praça</a></li>
                  <li><a href="<?php echo base_url().'vendedor/adicionar/';?>"><i class="fa fa-circle-o"></i>Vendedor</a></li>
                  <li><a href="<?php echo base_url().'admin/adicionar/';?>"><i class="fa fa-circle-o"></i>Administrador</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-th-list"></i>
                  <span>Campanha</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="campanha/listarAbertas"><i class="fa fa-circle-o"></i>Em aberto</a></li>
                  <li><a href="campanha/listarConcluidas"><i class="fa fa-circle-o"></i>Concluídas</a></li>
                </ul>
              </li>
              <li>
                <a href="pages/mailbox/mailbox.html">
                  <i class="fa fa-th-list"></i> <span>Pedidos</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-yellow"></small>
                    <small class="label pull-right bg-green"></small>
                    <small class="label pull-right bg-red"></small>
                  </span>
                </a>
              </li>        
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
         			<?php echo $contents; ?>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Versão</b> 1.0.1
          </div>
          <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Aurum Software</a>.</strong> Todos os direitos reservados.
        </footer>
      <div class="control-sidebar-bg"></div>
      </div>
      <!-- jQuery 3 -->
      <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button);
      </script>
      <!-- Bootstrap 3.3.7 -->
      <script src="><?php echo base_url();?>assets/js/bootstrap.min.js"></script>
      <!-- Morris.js charts -->
      <script src="<?php echo base_url();?>assets/js/raphael.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/morris.min.js"></script>
      <!-- Sparkline -->
      <script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
      <!-- jvectormap -->
      <script src="<?php echo base_url();?>assets/js/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/jquery-jvectormap-world-mill-en.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="<?php echo base_url();?>assets/js/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
      <!-- datepicker -->
      <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="<?php echo base_url();?>assets/js/bootstrap3-wysihtml5.all.min.js"></script>
      <!-- Slimscroll -->
      <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url();?>assets/js/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url();?>assets/js/adminlte.min.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo base_url();?>assets/js/demo.js"></script>
  </body>
</html>
