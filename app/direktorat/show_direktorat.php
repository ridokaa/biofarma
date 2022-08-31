<?php
include('../config/koneksi.php');

$kode_direktorat        = $_GET['kode_direktorat'];
$query  = mysqli_query($koneksi, "  SELECT * FROM direktorat WHERE kode_direktorat='$kode_direktorat'");
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
                    <form method='GET'action="user/showbaru_user.php">
                       <table class="table table-striped">
                        <tr>
                        <div class="card-body">
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Data Direktorat</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
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
                        
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Riwayat Input Direktorat</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="nama_user" class="col-sm-2 col-form-label">Diinput</label>
                            <div class="col-sm-10">
                            <?php echo $view ['created_at'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_user" class="col-sm-2 col-form-label">Diperbaharui</label>
                            <div class="col-sm-10">
                            <?php echo $view ['updated_at'];?>
                            </div>
                        </div>
                        </div>
                            <div class="form-group row">
                            <label for="nama_user" class="col-sm-2 col-form-label">User Insert</label>
                            <div class="col-sm-10">
                             <?php echo $view ['user_insert'];?>
                            </div>
                        </div>
                        </div>
                            <div class="form-group row">
                            <label for="nama_user" class="col-sm-2 col-form-label">User Edit</label>
                            <div class="col-sm-10">
                             <?php echo $view ['user_edit'];?>
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
                    </div>
             <!-- </div>
        </div>
</section> -->
                