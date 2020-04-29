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
          <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?=base_url('admin/Dashboard/tambah_outlet');?>" class="btn btn-primary "><i class="fa fa-plus"></i>  Tambah Outlet </a> 
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr align="center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <!-- <th>Status</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody align ="center">
                                      <?php if(count($outlet)) :?>
                                            <?php $urut=0; ?>
                                            <?php 
                                            foreach ($outlet as $data_outlet ) {
                                                 $urut++;
                                             ?>
                                        <tr >
                                            <td><?php echo $urut; ?></td>
                                            <td><?php echo $data_outlet->nama; ?></td>
                                            <td><?php echo $data_outlet->alamat; ?></td>
                                            <td><?php echo $data_outlet->tlp; ?></td>
                                          
                                            <td>                                               
                                                <a href="<?php echo base_url('admin/dashboard/edit_outlet/'.$data_outlet->id); ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('main/delete_karyawan/') ?>"onclick="return confirm('anda yakin akan menghapus data ini');"  class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i>
                                              <!--   <a href="#" class="btn btn-xs btn-primary"><i class="fa fa-download"></i></a> -->
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