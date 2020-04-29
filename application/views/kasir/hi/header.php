
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
                        <a href="<?php echo base_url('kasir/Dashboard');?>"> <i class="menu-icon fa fa-home"></i>home </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url('kasir/dashboard/transaksi');?>"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Transaksi</a>
                    
                    </li>
                      
                <li>
                        <a href="<?php echo base_url('kasir/Dashboard/data_member');?>"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Data Member</a>
                    
                 
                    <li>
                        <a href="<?php echo base_url('kasir/dashboard/paket_laundry');?>"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-shopping-cart"></i>Paket Laundry</a>
                    
                    </li>
                  
                    <h3 class="menu-title">Data </h3> <!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url('kasir/dashboard/data_outlet');?>"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>Data Outlet</a>
                    
                    </li>
                    <li>
                        <a href="<?php echo base_url('kasir/dashboard/transaksi');?>"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Laporan</a>
                    
                    </li>
                </ul> 
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    