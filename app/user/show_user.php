<?php
include('../config/koneksi.php');

$id_user        = $_GET['id_user'];
$query  = mysqli_query($koneksi, "  SELECT * FROM user WHERE id_user='$id_user'");
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
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Data User</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <?php echo $view ['nama_user'];?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="username_user" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                            <?php echo $view ['username_user'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password_user" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <?php echo $view ['password_user'];?>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan_user" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                            <?php echo $view ['keterangan_user'];?>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="level_user" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                            <?php echo $view ['level_user'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_departemen" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kode_departemen'];?>
                            </div>
                        </div>
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Riwayat Input User</h4></label>
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
                        </tr>
                       </table>

                          
                        
                        
                         <div class="modal-footer">
                            <a href="index.php?page=user" class="btn btn-info">
                                <i class="nav-icon fas   fa-times-circle "></i>Tutup
                            </a>
                        </div>
                    </form>
                    </div>
             <!-- </div>
        </div>
</section> -->
                