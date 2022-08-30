<?php
include('../config/koneksi.php');

$id_personel        = $_GET['id_personel'];
$query  = mysqli_query($koneksi, "  SELECT * FROM personel WHERE id_personel='$id_personel'");
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
                    <form method='GET'action="personel/showbaru_personel.php">
                       <table class="table table-striped">
                        <tr>
                        <div class="card-body">
                        <div class="form-group row bg-info">
                            <label for="level_user" class="col-sm-2 col-form-label"><h4>Data Personel</h4></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                            <?php echo $view ['nik'];?>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_personel" class="col-sm-2 col-form-label">Nama Personel</label>
                            <div class="col-sm-10">
                            <?php echo $view ['nama_personel'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_departemen" class="col-sm-2 col-form-label">Kode Departemen</label>
                            <div class="col-sm-10">
                            <?php echo $view ['kode_departemen'];?>
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
                