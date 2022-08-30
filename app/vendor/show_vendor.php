<?php
include('../config/koneksi.php');

$kode_vendor        = $_GET['kode_vendor'];
$query  = mysqli_query($koneksi, "  SELECT * FROM vendor WHERE kode_vendor='$kode_vendor'");
$view        = mysqli_fetch_assoc($query);
?>                    <!-- Horizontal Form -->
<!-- <section class="content">
  <div class="container-fluid">  
        <div class="card">
            /.card-header
            <div class="card-header bg-info">
                <h1 class="card-title">Detail User</h1>
            </div> -->
            
            <div class="card-body">                 
                    <!-- form start -->
                    <form method='GET'action="vendor/showbaru_vendor.php">
                       <table class="table table-striped">
                        <tr>
                        <div class="card-body">
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Data Vendor</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_vendor" class="col-sm-2 col-form-label">Nama Vendor</label>
                            <div class="col-sm-10">
                            <?php echo $view ['nama_vendor'];?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <?php echo $view ['alamat'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kota'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-10">
                            <?php echo $view ['telepon'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_kontak" class="col-sm-2 col-form-label">Kontak</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kode_kontak'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                            <div class="col-sm-10">
                            <?php echo $view ['catatan'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <?php echo $view ['email'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="web" class="col-sm-2 col-form-label">Web</label>
                            <div class="col-sm-10">
                            <?php echo $view ['web'];?>
                            </div>
                        </div>

                        <div class="form-group row bg-info">
                            <label for="kode_kontak" class="col-sm-2 col-form-label"><h4>Riwayat Input User</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="created_at" class="col-sm-2 col-form-label">Diinput</label>
                            <div class="col-sm-10">
                            <?php echo $view ['created_at'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="updated_at" class="col-sm-2 col-form-label">Diperbaharui</label>
                            <div class="col-sm-10">
                            <?php echo $view ['updated_at'];?>
                            </div>
                        </div>
                        </tr>
                       </table>

                          
                        
                        
                         <div class="modal-footer">
                            <a href="index.php?page=vendor" class="btn btn-info">
                                <i class="nav-icon fas   fa-times-circle "></i>Tutup
                            </a>
                        </div>
                    </form>
                    </div>
             <!-- </div>
        </div>
</section> -->
                