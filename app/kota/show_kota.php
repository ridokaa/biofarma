<?php
include('../config/koneksi.php');

$id_kota        = $_GET['id_kota'];
$query  = mysqli_query($koneksi, "  SELECT * FROM kota WHERE id_kota='$id_kota'");
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
                    <form method='GET'action="kota/showbaru_kota.php">
                       <table class="table table-striped">
                        <tr>
                        <div class="card-body">
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Data Kota</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kota'];?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="propinsi" class="col-sm-2 col-form-label">Propinsi</label>
                            <div class="col-sm-10">
                            <?php echo $view ['propinsi'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="negara" class="col-sm-2 col-form-label">Negara</label>
                            <div class="col-sm-10">
                                <?php echo $view ['negara'];?>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kode_pos'];?>
                            </div>
                        </div>
                       
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Riwayat Input User</h4></label>
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
                            <a href="index.php?page=kota" class="btn btn-info">
                                <i class="nav-icon fas   fa-times-circle "></i>Tutup
                            </a>
                        </div>
                    </form>
                    </div>
             <!-- </div>
        </div>
</section> -->
                