<?php
include('../config/koneksi.php');
// $id_user = '1';
$id_ruangan         = $_GET['id_ruangan'];
$query  = mysqli_query($koneksi, "  SELECT * FROM ruangan WHERE id_ruangan='$id_ruangan'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
<section class="content">
    <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Edit Data Ruangan</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="ruangan/update_ruangan.php">
                        <div class="card-body">
                        <input type='hidden' name="id_ruangan"value ="<?php echo $view ['id_ruangan'];?>" />
                        <div class="form-group row">
                            <label for="no_ruangan" class="col-sm-2 col-form-label">No Ruangan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_ruangan" placeholder="no ruangan" name='no_ruangan'value ="<?php echo $view ['no_ruangan'];?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_ruangan" class="col-sm-2 col-form-label">Nama Ruangan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ruangan" placeholder="nama ruangan" name='nama_ruangan'value ="<?php echo $view ['nama_ruangan'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_gedung" class="col-sm-2 col-form-label">Gedung</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="no_gedung" required>
                                <option value="<?php echo $view ['no_gedung'];?>" selected><?php echo $view ['no_gedung'];?></option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "SELECT * FROM gedung";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[no_gedung]>$data[nama_gedung]</option>";
                                    };

                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_lantai" class="col-sm-2 col-form-label">Lantai</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_lantai" placeholder="Lantai" name='no_lantai'value ="<?php echo $view ['no_lantai'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="catatan" placeholder="catatan" name='catatan'value ="<?php echo $view ['catatan'];?>">
                            </div>
                        </div>


                        </div>
                        
            <div class="modal-footer">
                <a href="index.php?page=ruangan" class="btn btn-info">
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