<?php include ('hi/header2.php'); ?>
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Detail Transaksi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Main/Data Admin/Tambah Detail Transaksi</li>
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
                <!-- <div class="col-lg-6">
                     <div class="card">
                       
                        <div class="card-body card-block">
                            <form action="<?php echo base_url(); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                              <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">No Invoice  </label   ></div>
                                    <?php 
                                        $invoice = $this->session->userdata('invoice');
                                        $outlet = $this->session->userdata('outlet');
                                        $member = $this->session->userdata('member');
                                        $masuk = $this->session->userdata('masuk');
                                        $batas = $this->session->userdata('batas')

                                     ?>
                                     <div class="col-12 col-md-9">
                                      <input type="text" class="form-control" value="<?php echo $invoice; ?>" disabled>
                                     <input type="hidden" value="<?php echo $invoice; ?>" name="kode_invoice">
                                  </div>
                                </div> 
                                <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Outlet</label></div>
                                      <div class="col-12 col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $outlet; ?>" disabled>
                                     <input type="hidden" value="<?php echo $outlet; ?>" name="id_outlet">                                            
                                       </div>                                
                                       </div>                                     
                                                                                                                      
                                 <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Member</label></div>
                                      <div class="col-12 col-md-9">
                                                                      
                                    <input type="text" class="form-control" value="<?php echo $member; ?>" disabled>
                                     <input type="hidden" value="<?php echo $member; ?>" name="id_member">
                                                                                                    
                                                                                        
                                       </div>                                
                                    </div>
                             
                               	<div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Tanggal Masuk  </label></div>

                                    <div class="col-12 col-md-9"> <input type="text" class="form-control" value="<?php echo $masuk; ?>" disabled>
                                     <input type="hidden" value="<?php echo $masuk; ?>" name="tgl"></div>
                                </div>

                                    <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Batas waktu </label></div>

                                    <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" value="<?php echo $batas; ?>" disabled>
                                     <input type="hidden" value="<?php echo $batas; ?>" name="batas_waktu">
                                        </div>
                                </div>


                                     
                                </form>
                            </div>
                                                    <div class="box-footer">
                                                       
                                                    </div>
                                                </div>
                                              
                                            </div> -->

                <div class="col-lg-6">
                     <div class="card">
                       
                        <div class="card-body card-block">
                            <form action="<?php echo base_url('admin/proses/tambah_detail'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                                <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Paket Loundry</label></div>
                                      <div class="col-12 col-md-9">
                                         <select name="id" id="select" class="form-control">                             
                                            <option value="0">Pilih paket </option>
                                        <?php 
                                                foreach ($hasil as $values) {
                                        echo "<option value ='$values->id_paket'>$values->jenis</option>";
                                                }
                                              ?>    
                                                                                 
                                           </select>                                                   
                                       </div>                                
                                       </div>                                     
                                                                                                                      
                               
                             
                                <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label"> Berat </label></div>

                                    <div class="col-12 col-md-9"><input type="double" name="qyt" placeholder="Berat" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Harga </label></div>

                                    <div class="col-12 col-md-9"><input type="double" name="harga" placeholder="Harga" class="form-control"></div>
                                </div>

                                 <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Keterangan </label></div>

                                    <div class="col-12 col-md-9"><input type="text" name="keterangan" placeholder="Keterangan" class="form-control"></div>
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
<script>
    $("#outlet").change(function(){
        var id_kendaraan = $("#outlet").val();

        $.ajax({
            url : "<?php echo base_url();?>/admin/proses/tambah_transaksi",
            method : "POST",
            data : {id : id_outlet},
            data2 : {id : id_member},
            async : false,

            Success : function($data){
                var html = '';
                var i; 

                for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].id +'>'+data[i].nama+'</option>';
                }
            }
            
        });
    });
    //   $("#member").change(function(){
    //     var id_kenda = $("#member").val();

    //     $.ajax({
    //         url : "<?php echo base_url();?>/admin/proses/tambah_transaksi",
    //         method : "POST",
    //         data : {id : id_member},
    //         async : false,

    //         Success : function($data){
    //             var html = '';
    //             var i; 

    //             for(i=0; i<data.length; i++){
    //                 html += '<option value='+ data[i].id + '>' + data[i].nama+'</option>';
    //             }
    //         }
            
    //     });
    // });
</script>