<?php
include('../config/koneksi.php');
// $id_user = '1';
$kode_supplier         = $_GET['kode_supplier'];
$query  = mysqli_query($koneksi, "  SELECT * FROM supplier WHERE kode_supplier='$kode_supplier'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
<section class="content">
    <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Edit Data Supplier</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="supplier/update_supplier.php">
                        <div class="card-body">
                        <input type='hidden' name="kode_supplier"value ="<?php echo $view ['kode_supplier'];?>" />
                        <div class="form-group row">
                            <label for="nama_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_supplier" placeholder="nama supplier" name='nama_supplier'value ="<?php echo $view ['nama_supplier'];?>">
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
                            <label for="kode_kontak" class="col-sm-2 col-form-label">Kontak</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kode_kontak" required>
                                <option value="<?php echo $view ['kode_kontak'];?>" selected><?php echo $view ['kode_kontak'];?></option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "SELECT * FROM kontak";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[kode_kontak]>$data[nama_kontak]</option>";
                                    };

                                    ?>
                                </select>
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
                <a href="index.php?page=supplier" class="btn btn-info">
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