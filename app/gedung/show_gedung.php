<?php
include('../config/koneksi.php');

$no_gedung        = $_GET['no_gedung'];
$query  = mysqli_query($koneksi, "  SELECT * FROM gedung WHERE no_gedung='$no_gedung'");
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
                    <form method='GET'action="gedung/showbaru_gedung.php">
                       <table class="table table-striped">
                        <tr>
                        <div class="card-body">
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Data Gedung</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_gedung" class="col-sm-2 col-form-label">No Gedung</label>
                            <div class="col-sm-10">
                            <?php echo $view ['no_gedung'];?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_gedung" class="col-sm-2 col-form-label">Nama Gedung</label>
                            <div class="col-sm-10">
                            <?php echo $view ['nama_gedung'];?>
                            </div>
                        </div>
                        <div class="form-group row bg-info">
                            <label for="no_gedung" class="col-sm-2 col-form-label"><h4>Riwayat Input User</h4></label>
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
                            <a href="index.php?page=gedung" class="btn btn-info">
                                <i class="nav-icon fas   fa-times-circle "></i>Tutup
                            </a>
                        </div>
                    </form>
                    </div>
             <!-- </div>
        </div>
</section> -->
                