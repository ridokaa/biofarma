                 <!-- Horizontal Form -->
             
                 <div class="modal-header bg-info">
              <h4 class="modal-title">Input Data Vendor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" method="get" action="vendor/tambah_data_vendor.php">
            <div class="modal-body">
                    <!-- Horizontal Form -->
                    
                    <!-- form start -->
                    
                        <div class="form-group row">
                                <label for="kode_vendor" class="col-sm-2 col-form-label">Kode Vendor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kode_vendor" placeholder="kode vendor" name="kode_vendor"required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_vendor" class="col-sm-2 col-form-label">Nama Vendor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_vendor" placeholder="nama vendor" name="nama_vendor"required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat" required>
                                </div>
                            </div>
                              <div class="form-group row">
                                <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kota" placeholder="kota" name="kota"required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="telepon" placeholder="telepon" name="telepon"required>
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="kode_kontak" class="col-sm-2 col-form-label">Kontak</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kode_kontak" required>
                                <option value="">-Pilih Kontak-</option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "select * from kontak";
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
                                    <input type="text" class="form-control" id="catatan" placeholder="catatan" name="catatan"required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label"> Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" placeholder="email" name="email"required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="web" class="col-sm-2 col-form-label">Web</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="web" placeholder="web" name="web" required>
                                </div>
                            </div>
                      
                      
                
            </div>
               <div class="modal-footer">
                <a href="index.php?page=vendor" class="btn btn-info">
                 <i class="nav-icon fas   fa-times-circle "></i>Tutup</a>

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

