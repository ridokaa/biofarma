<?php
include('../config/koneksi.php');
$kode_software         = $_GET['kode_software'];
$query  = mysqli_query($koneksi, "  SELECT * FROM software WHERE kode_software='$kode_software'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
                
                    <!-- form start -->
                    <form method='GET'action="software/update_software.php">
                        <div class="card-body">
                        <input type='hidden' name="id_software"value ="<?php echo $view ['id_software'];?>" />
                        <div class="form-group row">
                            <label for="kode_software" class="col-sm-2 col-form-label">Kode Software</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_software" placeholder="kode software" name='kode_software'value ="<?php echo $view ['kode_software'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_software" class="col-sm-2 col-form-label">Nama Software</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_software" placeholder="nama software" name='nama_software'value ="<?php echo $view ['nama_software'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tahun" placeholder="tahun" name='tahun'value ="<?php echo $view ['tahun'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_vendor" class="col-sm-2 col-form-label">Vendor</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kode_vendor" required>
                                <option value="<?php echo $view ['kode_vendor'];?>" selected><?php echo $view ['kode_vendor'];?></option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "SELECT * FROM vendor";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[kode_vendor]>$data[nama_vendor]</option>";
                                    };

                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_software" class="col-sm-2 col-form-label">Jenis Software</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jenis_software" placeholder="jenis software" name='jenis_software'value ="<?php echo $view ['jenis_software'];?>">
                            </div>
                        </div>
                        </div>
                        
            <div class="modal-footer">
                <a href="index.php?page=software" class="btn btn-info">
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
      
