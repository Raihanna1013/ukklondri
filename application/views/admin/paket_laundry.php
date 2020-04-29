<?php include("hi/header_table.php") ?>
         <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Paket Laundry</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Paket Laundry</li>
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
                                <a href="<?=base_url('admin/Dashboard/tambah_paket');?>" class="btn btn-primary "><i class="fa fa-plus"></i> Tambah paket </a> 
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                           <th>Paket Laundry</th>
                                           <th>Harga Paket</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php if(count($paket)) :?>
                                            <?php $urut=0; ?>
                                            <?php 
                                            foreach ($paket as $data_paket ) {
                                                 $urut++;
                                             ?>
                                        <tr>
                                            <td><?php echo $urut; ?></td>
                                            <td><?php echo $data_paket->jenis; ?></td>
                                            <td><?php echo $data_paket->harga; ?></td>                                            <td>                                               
                                                <a href="<?php echo base_url('admin/dashboard/edit_paket/'.$data_paket->id_paket); ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('main/delete_karyawan/') ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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