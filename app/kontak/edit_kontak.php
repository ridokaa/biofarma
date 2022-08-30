<?php
include('../config/koneksi.php');
// $id_user = '1';
$kode_kontak         = $_GET['kode_kontak'];
$query  = mysqli_query($koneksi, "  SELECT * FROM kontak WHERE kode_kontak='$kode_kontak'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
<section class="content">
    <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Edit Data Kontak</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="kontak/update_kontak.php">
                        <div class="card-body">
                        <input type='hidden' name="kode_kontak"value ="<?php echo $view ['kode_kontak'];?>" />
                        <div class="form-group row">
                            <label for="nama_kontak" class="col-sm-2 col-form-label">Nama Kontak</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_kontak" placeholder="nama kontak" name='nama_kontak'value ="<?php echo $view ['nama_kontak'];?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat" name='alamat'value ="<?php echo $view ['alamat'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kota" required>
                                <option value="<?php echo $view ['kota'];?>" selected><?php echo $view ['kota'];?></option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "SELECT * FROM kota";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[kota]>$data[kota]</option>";
                                    };

                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="telepon" placeholder="telepon" name='telepon'value ="<?php echo $view ['telepon'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hp" class="col-sm-2 col-form-label">HP</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="hp" placeholder="hp" name='hp'value ="<?php echo $view ['hp'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="catatan" placeholder="catatan" name='catatan'value ="<?php echo $view ['catatan'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="email" name='email'value ="<?php echo $view ['email'];?>">
                            </div>
                        </div>


                        </div>
                        
            <div class="modal-footer">
                <a href="index.php?page=kontak" class="btn btn-info">
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