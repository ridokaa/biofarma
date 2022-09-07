<?php
include('../config/koneksi.php');
// $id_user = '1';
$kode_divisi         = $_GET['kode_divisi'];
$query  = mysqli_query($koneksi, "SELECT * FROM divisi WHERE kode_divisi=$kode_divisi");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
<section class="content">
    <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Edit Data Divisi</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="divisi/update_divisi.php">
                        <div class="card-body">
                        <input type='hidden' name="id_divisi"value ="<?php echo $view ['id_divisi'];?>" />
                        <div class="form-group row">
                            <label for="kode_divisi" class="col-sm-2 col-form-label">Kode Divisi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_divisi" placeholder="kode divisi" name='kode_divisi'value ="<?php echo $view ['kode_divisi'];?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_divisi" class="col-sm-2 col-form-label">Nama Divisi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_divisi" placeholder="nama divisi" name='nama_divisi'value ="<?php echo $view ['nama_divisi'];?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kode_direktorat" class="col-sm-2 col-form-label">Direktorat</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kode_direktorat" required>
                                <option value="<?php echo $view ['kode_direktorat'];?>" selected><?php echo $view ['kode_direktorat'];?></option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "SELECT * FROM direktorat";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[kode_direktorat]>$data[nama_direktorat]</option>";
                                    };

                                    ?>
                                </select>
                            </div>
                        </div>


            </div>
                        
            <div class="modal-footer">
                <a href="index.php?page=divisi" class="btn btn-info">
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