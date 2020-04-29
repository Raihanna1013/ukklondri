<?php include("hi/header_table.php") ?>
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
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($message = $this->session->flashdata('message')): ?>
         <div class="content mt-3">
            
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
          <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?=base_url('admin/Dashboard/tambah_admin');?>" class="btn btn-primary "> Tambah Admin </a> 
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr align="center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <!-- <th>TTL</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Status</th>-->
                                            <th>Action</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php if(count($admin)) :?>
                                            <?php $urut=0; ?>
                                            <?php 
                                            foreach ($admin as $data_admin ) {
                                                 $urut++;
                                             ?>
                                        <tr align="center">
                                            <td><?php echo $urut; ?></td>
                                            <td><?php echo $data_admin->nama; ?></td>
                                            <td><?php echo $data_admin->username; ?></td>
                                          <!--   <td><?php echo $data_karyawan->alamat; ?></td>
                                            <td><?php echo $data_karyawan->tempat_lahir, $data_karyawan->tanggal_lahir; ?></td>
                                             <td><?php echo $data_karyawan->jenis_kelamin; ?></td>
                                            <td><?php echo $data_karyawan->status; ?></td> -->
                                            <td align="center">                                               
                                                <a href="<?php echo base_url('admin/dashboard/edit_admin/'.$data_admin->id); ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>

                                               <a href="<?php echo base_url('main/delete_karyawan/') ?>"onclick="return confirm('anda yakin akan menghapus data ini');"  class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i>
                                              
                                            </td>
                                        </tr>
                                        <?php } ?>
                                           <?php else: ?>
                                                <tr>
                                                        <td>No Records Found!</td>
                                                </tr>
                                            <?php endif; ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


      </div>
       </div>
 <?php include('hi/footer_table.php'); ?>