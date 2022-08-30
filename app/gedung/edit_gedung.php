<?php
include('../config/koneksi.php');
// $id_user = '1';
$no_gedung         = $_GET['no_gedung'];
$query  = mysqli_query($koneksi, "  SELECT * FROM gedung WHERE no_gedung='$no_gedung'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
<section class="content">
    <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Edit Data Gedung</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="gedung/update_gedung.php">
                        <div class="card-body">
                        <input type='hidden' name="id_gedung"value ="<?php echo $view ['id_gedung'];?>" />
                        <div class="form-group row">
                            <label for="no_gedung" class="col-sm-2 col-form-label">No Gedung</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_gedung" placeholder="No Gedung" name='no_gedung'value ="<?php echo $view ['no_gedung'];?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_gedung" class="col-sm-2 col-form-label">Nama Gedung</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_gedung" placeholder="Nama Gedung" name='nama_gedung'value ="<?php echo $view ['nama_gedung'];?>">
                            </div>
                        </div>
                        </div>
                        
            <div class="modal-footer">
                <a href="index.php?page=gedung" class="btn btn-info">
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