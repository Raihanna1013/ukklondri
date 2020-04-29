<?php include ('hi/header2.php'); ?>
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Paket</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Main/Data Paket/Edit Paket</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
                 
                                           
                <div class="col-lg-12">
                     <div class="card">
                       
                        <div class="card-body card-block">
                            <form action="<?php echo base_url('admin/proses/edit_paket'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                              <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Id Paket </label></div>

                                    <div class="col-12 col-md-9">
                        
                                        <input type="text"  value="<?php echo $paket->id_paket ?>" disabled>
                                        <input type="hidden" name="id_paket" placeholder="" class="form-control" value="<?php echo $paket->id_paket ?>"> </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Jenis Paket </label></div>

                                    <div class="col-12 col-md-9">
                        
                                        <input type="text" name="jenis" placeholder="Jenis" class="form-control"  value="<?php echo $paket->jenis ?>"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Harga </label></div>

                                    <div class="col-12 col-md-9"><input type="text" name="harga" placeholder="harga" class="form-control" value= " <?php echo $paket->harga?>"></div>
                                </div>

                
                                     <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                </form>
                            </div>
                                                    <div class="box-footer">
                                                       
                                                    </div>
                                                </div>
                                              
                                            </div>

      </div>
<?php include('hi/footer2.php'); ?> 
