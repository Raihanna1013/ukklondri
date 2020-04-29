<?php include ('hi/header2.php'); ?>
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Transaksi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Main/Data Admin/Tambah Transaksi</li>
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
                            <form action="<?php echo base_url('admin/proses/tambah_transaksi'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                              <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">No Invoice  </label></div>

                                    <div class="col-12 col-md-9"><input type="text" name="kode_invoice" placeholder="Kode Invoice" class="form-control"></div>
                                </div> 
                                <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Outlet</label></div>
                                      <div class="col-12 col-md-9">
                                         <select name="id_outlet" id="select" class="form-control">                             
                                            <option value="0">Pilih outlet </option>
                                        <?php 
                                                foreach ($hasil as $values) {
                                        echo "<option value ='$values->id'>$values->nama</option>";
                                                }
                                              ?>    
                                                                                 
                                           </select>                                                   
                                       </div>                                
                                       </div>                                     
                                                                                                                      
                                 <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Member</label></div>
                                      <div class="col-12 col-md-9">
                                         <select name="id_member" id="select" class="form-control">                             
                                            <option value="0">Pilih member </option>
                                             <?php 
                                                foreach ($member as $values) {
                                        echo "<option value ='$values->id'>$values->nama</option>";
                                                }
                                              ?>    
                                                                                                    
                                           </select>                                                   
                                       </div>                                
                                    </div>
                             
                               	<div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Tanggal Masuk  </label></div>

                                    <div class="col-12 col-md-9">
                                      <input type="text" class="form-control" value="<?php echo date("d-m-Y"); ?>" disabled>
                                        <input type="hidden" value="<?php echo date("Y-m-d"); ?>" name="tgl"></div>
                                </div>
                                    <div class="row form-group">
                                    <div class="col col-md-2"><label  class=" form-control-label">Batas waktu </label></div>

                                    <div class="col-12 col-md-9"><input type="date" name="batas_waktu" placeholder="Nama outlet" class="form-control"></div>
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