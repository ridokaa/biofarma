<?php
include('../config/koneksi.php');
// $id_user = '1';
$id_user         = $_GET['id_user'];
$query  = mysqli_query($koneksi, "  SELECT * FROM user WHERE id_user='$id_user'");
$view        = mysqli_fetch_array($query);
?>                    <!-- Horizontal Form -->
<section class="content">
    <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Edit Data User</h1>
            </div>                  
                    <!-- form start -->
                    <form method='GET'action="user/update_user.php">
                        <div class="card-body">
                        <input type='hidden' name="id_user"value ="<?php echo $view ['id_user'];?>" />
                        <div class="form-group row">
                            <label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_user" placeholder="nama user" name='nama_user'value ="<?php echo $view ['nama_user'];?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="username_user" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="username_user" placeholder="username user" name='username_user'value ="<?php echo $view ['username_user'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password_user" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="password_user" placeholder="password user" name='password_user'value ="<?php echo $view ['password_user'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan_user" class="col-sm-2 col-form-label">Keterangan </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="keterangan_user" placeholder="keterangan user" name='keterangan_user'value ="<?php echo $view ['keterangan_user'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan_user" class="col-sm-2 col-form-label">Status </label>
                            <div class="col-sm-10">
                            <select class="form-control selectpicker" name="level_user" required>
                                        <option value="Super Admin">Super Admin</option>
                                        <option value="Admin User">Admin User</option>
                                        <option value="Operator">Operator</option>
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
                                    $SQL3 = "select * from departemen";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[kode_departemen]>$data[nama_departemen]</optiom>";
                                    };

                                    ?>
                                </select>
                            </div>
                        </div>
                        </div>
                        
            <div class="modal-footer">
                <a href="index.php?page=user" class="btn btn-info">
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