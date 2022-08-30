<?php
include('../config/koneksi.php');
// $id_user = '1';
$id_kota         = $_GET['id_kota'];
$query  = mysqli_query($koneksi, "  SELECT * FROM kota WHERE id_kota='$id_kota'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
<section class="content">
    <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Edit Data Kota</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="kota/update_kota.php">
                            <div class="card-body">
                            <input type='hidden' name="id_kota"value ="<?php echo $view ['id_kota'];?>" />
                            <div class="form-group row">
                                <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="kota" placeholder="kota" name='kota'value ="<?php echo $view ['kota'];?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="propinsi" class="col-sm-2 col-form-label">Propinsi</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="propinsi" placeholder="propinsi" name='propinsi'value ="<?php echo $view ['propinsi'];?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="negara" class="col-sm-2 col-form-label">Negara</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="negara" placeholder="negara" name='negara'value ="<?php echo $view ['negara'];?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="kode_pos" placeholder="kode pos" name='kode_pos'value ="<?php echo $view ['kode_pos'];?>">
                                </div>
                            </div>
                        </div>

                        
            <div class="modal-footer">
                <a href="index.php?page=kota" class="btn btn-info">
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