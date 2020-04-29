<?php include ('hi/header2.php'); ?>
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Outlet</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Main/Data Outlet/Tambah Outlet</li>
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
                            <form action="<?php echo base_url('admin/proses/tambah_outlet'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Nama </label></div>

                                    <div class="col-12 col-md-9"><input type="text" name="nama" placeholder="Nama" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Alamat </label></div>

                                    <div class="col-12 col-md-9"><input type="text" name="alamat" placeholder="Alamat" class="form-control"></div>
                                </div>

                               	<div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">No Telepon </label></div>

                                    <div class="col-12 col-md-9"><input type="text" name="tlp" placeholder="No Telepon" class="form-control"></div>
                                </div>
                               <!--  <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Outlet </label></div>

                                    <div class="col-12 col-md-9"><input type="text" name="id_outlet" placeholder="Nama outlet" class="form-control"></div>
                                </div> -->

<!-- 
                                  <div class="row form-group">
                                    <div class="col col-md-2"><label for="password-input" class=" form-control-label"> Role</label></div>
                                    
                                    <div class="col-12 col-md-9"><input type="text"  name="admin" placeholder="Role" class="form-control"></div>
                                </div> -->

                               <!--  <div class="row form-group">
                                    <div class="col col-md-2"><label for="password-input" class=" form-control-label">Tempat Lahir</label></div>
                                    
                                    <div class="col-12 col-md-9"><input type="text"  name="tempat_lahir" placeholder="Tempat Lahir" class="form-control"></div>
                                </div> --> 

                               <!--  <div class="row form-group">
                                    <div class="col col-md-2"><label for="password-input" class=" form-control-label">Tanggal Lahir</label></div>
                                    
                                    <div class="col-12 col-md-9"><input type="date" id="input"  name="tanggal_lahir"class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Jenis Kelamin</label></div>

                                    <div class="col-12 col-md-9">
                                        <select name="jenis_kelamin" id="select" class="form-control">
                                            <option value="#">Pilih kategori</option>
                                            <option value="P">Perempuan</option>
                                            <option value="L">Laki-laki</option>
                                           
                                        </select>
                                    </div>
                                </div>        -->

                           <!--       <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Status</label></div>

                                    <div class="col-12 col-md-9">
                                        <select name="status" id="select" class="form-control">
                                            <option value="#">Pilih kategori</option>
                                            <option value="PNS">PNS</option>
                                            <option value="Honorer">Honorer</option>
                                           
                                        </select>
                                    </div>
                                </div>       
 -->
                                <!-- <div class="row form-group">
                                    <div class="col col-md-2"><label class=" form-control-label">Jenis Kelamin</label></div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">laki-laki
                                            </label>

                                            <label for="inline-radio2" class="form-check-label ">
                                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Perempuan
                                            </label>
                                                                           
    
                                        </div>
                                    </div>
                                </div> -->
                             <!--  <div class="row form-group">
                                    
                                    <div class="col col-md-2"><label for="textarea-input" class=" form-control-label">Telepon</label></div>
                                    
                                    <div class="col-12 col-md-9"><input name="telepon" id="input" rows="9" placeholder="Nomor telepon" class="form-control"></div>
                                </div> -->

                               
           
<!--                             <div class="row form-group">
                            <div class="col col-md-2"><label for="password-input" class=" form-control-label">Password</label></div>
                                    
                                    <div class="col-12 col-md-3">
                                        <input type="Text" id="password-input" name="password"  placeholder="Password" class="form-control">  
                                    </div>
                                
                            </div> -->
<!--                              <div class="row form-group">
                                    <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Tanggal surat</label></div>
                                    <div class="col-12 col-md-3"><input type="date" id="input" name="Tanggal_Surat" class="form-control"></div>
                                </div> -->
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