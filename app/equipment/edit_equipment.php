<?php
include('../config/koneksi.php');
// $id_user = '1';
$kode_equipment         = $_GET['kode_equipment'];
$query  = mysqli_query($koneksi, "  SELECT * FROM equipment WHERE kode_equipment='$kode_equipment'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
<section class="content">
    <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Edit Data Equipment</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="equipment/update_equipment.php">
                        <div class="card-body">
                        <input type='hidden' name="id_equipment"value ="<?php echo $view ['id_equipment'];?>" />
                        <div class="form-group row">
                            <label for="kode_equipment" class="col-sm-2 col-form-label">Kode Equipment</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_equipment" placeholder="kode equipment" name='kode_equipment'value ="<?php echo $view ['kode_equipment'];?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_equipment" class="col-sm-2 col-form-label">Nama Equipment</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_equipment" placeholder="nama equipment" name='nama_equipment'value ="<?php echo $view ['nama_equipment'];?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kode_software" class="col-sm-2 col-form-label">Software</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kode_software" required>
                                <option value="<?php echo $view ['kode_software'];?>" selected><?php echo $view ['kode_software'];?></option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "SELECT * FROM software";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[kode_software]>$data[nama_software]</option>";
                                    };

                                    ?>
                                </select>
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

                        <div class="form-group row">
                            <label for="id_ruangan" class="col-sm-2 col-form-label">Ruagnan</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="id_ruangan" required>
                                <option value="<?php echo $view ['id_ruangan'];?>" selected><?php echo $view ['id_ruangan'];?></option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "SELECT * FROM ruangan";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[id_ruangan]>$data[nama_ruangan]</option>";
                                    };

                                    ?>
                                </select>
                            </div>
                        </div>



                        </div>
                        
            <div class="modal-footer">
                <a href="index.php?page=equipment" class="btn btn-info">
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