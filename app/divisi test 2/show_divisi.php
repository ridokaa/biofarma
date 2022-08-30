<?php
include('../config/koneksi.php');

$kode_divisi        = $_GET['kode_divisi'];
$query  = mysqli_query($koneksi, "  SELECT * FROM divisi WHERE kode_divisi='$kode_divisi'");
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
                    <form method='GET'action="divisi/showbaru_divisi.php">
                       <table class="table table-striped">
                        <tr>
                        <div class="card-body">
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Data Divisi</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_divisi" class="col-sm-2 col-form-label">Kode Divisi</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kode_divisi'];?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_divisi" class="col-sm-2 col-form-label">Nama Divisi</label>
                            <div class="col-sm-10">
                            <?php echo $view ['nama_divisi'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_direktorat" class="col-sm-2 col-form-label">Direktorat</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kode_direktorat'];?>
                            </div>
                        </div>
                        
                        <div class="form-group row bg-info">
                            <label for="kode_divisi" class="col-sm-2 col-form-label"><h4>Riwayat Input User</h4></label>
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
                            <a href="index.php?page=divisi" class="btn btn-info">
                                <i class="nav-icon fas   fa-times-circle "></i>Tutup
                            </a>
                        </div>
                    </form>
                    </div>
             <!-- </div>
        </div>
</section> -->
                