
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>e-Loundry</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url('aset/vendors/bootstrap/dist/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('aset/vendors/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('aset/vendors/themify-icons/css/themify-icons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('aset/vendors/flag-icon-css/css/flag-icon.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('aset/vendors/selectFX/css/cs-skin-elastic.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('aset/vendors/jqvmap/dist/jqvmap.min.css');?>"> 

     <link rel="stylesheet" href="<?php echo base_url('aset/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css');?>">
     <link rel="stylesheet" href="<?php echo base_url('aset/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css');?>">

       <link rel="stylesheet" href="<?php echo base_url('aset/assets/css/style.css');?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
  <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><!-- img src="<?php echo base_url('aset/images/logo1.png');?>" alt="Logo" > -->
                    <h1>eLoundry</h1>
                   </a>
                <a class="navbar-brand hidden" href="./"><!-- <img src="<?php echo base_url('aset/images/logo1.png');?>" alt="Logo">--><h1>eL</h1></a> 
            </div>

             <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url('admin/Dashboard');?>"> <i class="menu-icon fa fa-home"></i>home </a>
                    </li>
               
                    <li>
                        <a href="<?php echo base_url('admin/dashboard/transaksi');?>"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Laporan</a>
                    
                    </li>
                </ul> 
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url('aset/images/avatar/user.png');?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>



                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <?php if ($message = $this->session->flashdata('message')): ?>
            <div class="col-sm-12">
                 <?php if($message =='sukses'){?>
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Selamat datang <?php $this->session->userdata('role'); ?> </span> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php }else{?>
                            <?php echo $message;?>
          <?php }?>
                </div>
            </div>
             <?php endif;?>




            <!--/.col-->

  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                              <!--   <a href="<?=base_url('Main_Dashboard/tambah_karyawan');?>" class="btn btn-primary "> Tambah Transaksi </a>  -->
                            </div>
                            <div class="card-body">
                                <H1>Laporan Outlet</H1>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

         
            <div class="col-xl-6">
         
    <!-- Right Panel -->

    <script src="<?php echo base_url('aset/vendors/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('aset/vendors/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?php echo base_url('aset/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('aset/assets/js/main.js')?>"></script>


    <script src="<?php echo base_url('aset/vendors/chart.js/dist/Chart.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('aset/assets/js/dashboard.js')?>"></script>
    <script src="<?php echo base_url('aset/assets/js/widgets.js')?>"></script>
    <script src="<?php echo base_url('aset/vendors/jqvmap/dist/jquery.vmap.min.js')?>"></script>
      <script src="<?php echo base_url('aset/vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('aset/vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
    <script src="<?php echo base_url('aset/vendors/datatables.net-buttons/js/buttons.colVis.min.js');?>"></script>
    <script src="<?php echo base_url('aset/assets/js/init-scripts/data-table/datatables-init.js');?>"></script>

    <script src="<?php echo base_url('aset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')?>"></script>
    <script src="<?php echo base_url('aset/vendors/jqvmap/dist/maps/jquery.vmap.world.js')?>"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
