<?php
include('../config/koneksi.php');
$kode_departemen         = $_GET['kode_departemen'];
$query  = mysqli_query($koneksi, "  SELECT * FROM departemen WHERE kode_departemen='$kode_departemen'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
                
                    <!-- form start -->
                    <form method='GET'action="departemen/update.php">
                        <div class="card-body">
                        <input type='hidden' name="id_departemen"value ="<?php echo $view ['id_departemen'];?>" />
                        <div class="form-group row">
                            <label for="kode_departemen" class="col-sm-2 col-form-label">Kode</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_departemen" placeholder="kode departemen" name='kode_departemen'value ="<?php echo $view ['kode_departemen'];?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_departemen" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_departemen" placeholder="nama departemen" name='nama_departemen'value ="<?php echo $view ['nama_departemen'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_divisi" class="col-sm-2 col-form-label">Divisi</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kode_divisi" required>
                                <option value="<?php echo $view ['kode_divisi'];?>" selected><?php echo $view ['kode_divisi'];?></option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "SELECT * FROM divisi";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[kode_divisi]>$data[nama_divisi]</option>";
                                    };

                                    ?>
                                </select>
                            </div>
                        </div>
                        </div>
                        
            <div class="modal-footer">
                <a href="index.php?page=departemen" class="btn btn-info">
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
      
