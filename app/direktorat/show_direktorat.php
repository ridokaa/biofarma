<?php
include('../config/koneksi.php');

$kode_direktorat         = $_GET['kode_direktorat'];
$query  = mysqli_query($koneksi, "  SELECT * FROM direktorat WHERE kode_direktorat='$kode_direktorat'");
$view        = mysqli_fetch_assoc($query);
?>                    <!-- Horizontal Form -->
                    <div class="card">
        <div class="card-header bg-info">
            <h1 class="card-title">Data Detail Direktorat</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                    <!-- form start -->
                    <form method='GET'action="direktorat/showbaru_direktorat.php">
                       <table class="table table-striped">
                        <tr>
                        <div class="card-body">
                        <div class="form-group row">
                            <label for="kode_direktorat" class="col-sm-2 col-form-label">Kode Direktorat</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kode_direktorat'];?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_direktorat" class="col-sm-2 col-form-label">Nama Direktorat</label>
                            <div class="col-sm-10">
                            <?php echo $view ['nama_direktorat'];?>
                            </div>
                        </div>
                        
                        
                        <div class="card">
        <div class="card-header bg-info">
            <h1 class="card-title">Master</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
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
                            <a href="index.php?page=direktorat" class="btn btn-info">
                                <i class="nav-icon fas   fa-times-circle "></i>Tutup
                            </a>
                        </div>

                        <div class="card-header bg-info">
            <h1 class="card-title"> Detail</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
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
                            <a href="index.php?page=direktorat" class="btn btn-info">
                                <i class="nav-icon fas   fa-times-circle "></i>Tutup
                            </a>
                        </div>
                    </form>
                        