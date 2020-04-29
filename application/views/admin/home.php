<?php include('hi/header.php');  ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

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
                            

                            <a class="nav-link" href="<?php echo base_url('welcome') ?>"><i class="fa fa-power-off"></i> Logout</a>
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
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pembeli</th>
                                            <th>Jenis Paket</th>
                                            <th>Berat</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <!--  <?php if(count($data)) :?>
                                            <?php $urut=0; ?>
                                            <?php 
                                            foreach ($data as $data_karyawan ) {
                                                 $urut++;
                                             ?>
                                        <tr>
                                            <td><?php echo $urut; ?></td>
                                            <td><?php echo $data_karyawan->nip; ?></td>
                                            <td><?php echo $data_karyawan->nama; ?></td>
                                            <td><?php echo $data_karyawan->alamat; ?></td>
                                            <td><?php echo $data_karyawan->tempat_lahir, $data_karyawan->tanggal_lahir; ?></td>
                                             <td><?php echo $data_karyawan->jenis_kelamin; ?></td>
                                            <td><?php echo $data_karyawan->status; ?></td>
                                            <td>                                               
                                                <a href="<?php echo base_url('main/edit_karyawan/'.$data_karyawan->id); ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('main/delete_karyawan/'.$data_karyawan->id) ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                              <!--   <a href="#" class="btn btn-xs btn-primary"><i class="fa fa-download"></i></a> -->
                                            <!-- </td>
                                        </tr>
                                        <?php } ?>
                                           <?php else: ?>
                                                <tr>
                                                        <td>No Records Found!</td>
                                                </tr>
                                            <?php endif; ?> --> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

         
            <div class="col-xl-6">
         
    <!-- Right Panel -->
<?php include("hi/footer.php"); ?>