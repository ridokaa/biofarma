<?php
include('../config/koneksi.php');

$id_ruangan        = $_GET['id_ruangan'];
$query  = mysqli_query($koneksi, "  SELECT * FROM ruangan WHERE id_ruangan='$id_ruangan'");
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
                    <form method='GET'action="ruangan/showbaru_ruangan.php">
                       <table class="table table-striped">
                        <tr>
                        <div class="card-body">
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Data Ruangan</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_ruangan" class="col-sm-2 col-form-label">No Ruangan</label>
                            <div class="col-sm-10">
                            <?php echo $view ['no_ruangan'];?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="no_gedung" class="col-sm-2 col-form-label">Gedung</label>
                            <div class="col-sm-10">
                            <?php echo $view ['no_gedung'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_lantai" class="col-sm-2 col-form-label">Lantai</label>
                            <div class="col-sm-10">
                            <?php echo $view ['no_lantai'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                            <div class="col-sm-10">
                            <?php echo $view ['catatan'];?>
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
                            <a href="index.php?page=ruangan" class="btn btn-info">
                                <i class="nav-icon fas   fa-times-circle "></i>Tutup
                            </a>
                        </div>
                    </form>
                    </div>
             <!-- </div>
        </div>
</section> -->
                