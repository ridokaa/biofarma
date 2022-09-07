<?php
include('../config/koneksi.php');

$kode_departemen         = $_GET['kode_departemen'];
$query  = mysqli_query($koneksi, "  SELECT * FROM departemen WHERE kode_departemen='$kode_departemen'");
$view        = mysqli_fetch_assoc($query);
?>         
<!-- Horizontal Form -->
<section class="content">
  <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Detail Departemen</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="departemen/showbaru.php">
                       <table class="table table-striped">
                        <tr>
                        <div class="card-body">
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Data Departemen</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_departemen" class="col-sm-2 col-form-label">Kode</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kode_departemen'];?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_departemen" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                            <?php echo $view ['nama_departemen'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_divisi" class="col-sm-2 col-form-label">Divisi</label>
                            <div class="col-sm-10">
                                <?php echo $view ['kode_divisi'];?>
                                </div>
                        </div>
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Riwayat Input User</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nama_departemen" class="col-sm-2 col-form-label">Diinput</label>
                            <div class="col-sm-10">
                            <?php echo $view ['created_at'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_departemen" class="col-sm-2 col-form-label">Diperbaharui</label>
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
                </div>
        </div>
</section>
           