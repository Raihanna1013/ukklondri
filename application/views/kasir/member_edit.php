<?php include ('hi/header2.php'); ?>
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Member Edit</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Main/Data member/Member Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
                  <!--   <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div> -->
                                           
                <div class="col-lg-12">
                     <div class="card">
                       
                        <div class="card-body card-block">
                            <form action="<?php echo base_url('kasir/proses/edit_member'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                              <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Id member </label></div>

                                    <div class="col-12 col-md-9">
                        
                                        <input type="text"  value="<?php echo $member->id ?>" disabled>
                                        <input type="hidden" name="id" placeholder="" class="form-control" value="<?php echo $member->id ?>"> </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Nama Member </label></div>

                                    <div class="col-12 col-md-9">
                        
                                        <input type="text" name="nama" placeholder="Nama" class="form-control"  value="<?php echo $member->nama ?>"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Alamat </label></div>

                                    <div class="col-12 col-md-9"><input type="text" name="alamat" placeholder="Alamat" class="form-control" value= " <?php echo $member->alamat?>"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">No Telepon </label></div>

                                    <div class="col-12 col-md-9"><input type="text" name="tlp" placeholder="No Telepon" class="form-control" value = "<?php echo $member->tlp ?>"></div>
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
<?php include('hi/footer2.php'); ?><!-- 
