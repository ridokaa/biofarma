<?php
include('../config/koneksi.php');

$kode_software         = $_GET['kode_software'];
$query  = mysqli_query($koneksi, "  SELECT * FROM software WHERE kode_software='$kode_software'");
$view        = mysqli_fetch_assoc($query);
?>                    <!-- Horizontal Form -->
<!-- <section class="content">
  <div class="container-fluid">  
        <div class="card">
            /.card-header -->
            <!-- <div class="card-header bg-info">
                <h1 class="card-title">Detail Software</h1>
            </div>                   --> 
                    <!-- form start -->
                    <form method='GET'action="software/showbaru_software.php">
                       <table class="table table-striped">
                        <tr>
                        <div class="card-body">
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Data Software</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_software" class="col-sm-2 col-form-label">ID Software</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kode_software'];?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_software" class="col-sm-2 col-form-label">Nama Software</label>
                            <div class="col-sm-10">
                            <?php echo $view ['nama_software'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_vendor" class="col-sm-2 col-form-label">Vendor</label>
                            <div class="col-sm-10">
                                <?php echo $view ['kode_vendor'];?>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_software" class="col-sm-2 col-form-label">Jenis Software</label>
                            <div class="col-sm-10">
                                <?php echo $view ['jenis_software'];?>
                                </div>
                        </div>
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Riwayat Input User</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nama_software" class="col-sm-2 col-form-label">Diinput</label>
                            <div class="col-sm-10">
                            <?php echo $view ['created_at'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_software" class="col-sm-2 col-form-label">Diperbaharui</label>
                            <div class="col-sm-10">
                            <?php echo $view ['updated_at'];?>
                            </div>
                        </div>
                        </tr>
                       </table>

                          
                        
                        
                         <div class="modal-footer">
                            <a href="index.php?page=departemen" class="btn btn-info">
                                <i class="nav-icon fas   fa-times-circle "></i>Tutup
                            </a>
                        </div>
                    </form>
                <!-- </div>
        </div>
</section> -->
           