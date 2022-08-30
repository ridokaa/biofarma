<?php
include('../config/koneksi.php');
// $id_user = '1';
$id_personel         = $_GET['id_personel'];
$query  = mysqli_query($koneksi, "  SELECT * FROM personel WHERE id_personel='$id_personel'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
<section class="content">
    <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Edit Data Personel</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="personel/update_personel.php">
                        <div class="card-body">
                        <input type='hidden' name="id_personel"value ="<?php echo $view ['id_personel'];?>" />
                        <div class="form-group row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" placeholder="nik" name='nik'value ="<?php echo $view ['nik'];?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_personel" class="col-sm-2 col-form-label">Nama Personel</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_personel" placeholder="nama personel" name='nama_personel'value ="<?php echo $view ['nama_personel'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_departemen" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kode_departemen" required>
                                <option value="<?php echo $view ['kode_departemen'];?>" selected><?php echo $view ['kode_departemen'];?></option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "SELECT * FROM departemen";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[kode_departemen]>$data[nama_departemen]</option>";
                                    };

                                    ?>
                                </select>
                            </div>
                        </div>


                        </div>
                        
            <div class="modal-footer">
                <a href="index.php?page=personel" class="btn btn-info">
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