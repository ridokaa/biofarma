<?php
include('../config/koneksi.php');
// $id_user = '1';
$kode_direktorat         = $_GET['kode_direktorat'];
$query  = mysqli_query($koneksi, "  SELECT * FROM direktorat WHERE kode_direktorat='$kode_direktorat'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
<section class="content">
    <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Edit Data Direktorat</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="direktorat/update_direktorat.php">
                        <div class="card-body">
                        <input type='hidden' name="id_direktorat"value ="<?php echo $view ['id_direktorat'];?>" />
                        <div class="form-group row">
                            <label for="kode_direktorat" class="col-sm-2 col-form-label">Kode Direktorat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_direktorat" placeholder="kode direktorat" name='kode_direktorat'value ="<?php echo $view ['kode_direktorat'];?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_direktorat" class="col-sm-2 col-form-label">Nama Direktorat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_direktorat" placeholder="nama direktorat" name='nama_direktorat'value ="<?php echo $view ['nama_direktorat'];?>">
                            </div>
                        </div>
                        
            <div class="modal-footer">
                <a href="index.php?page=direktorat" class="btn btn-info">
                <i class="nav-icon fas   fa-times-circle "></i>Tutup
                </a>

              <button type="submit" class="btn btn-info"> 
                <i class="nav-icon fas  a-life-saver  "></i> Simpan
              </button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
    </div>       
</section>