                 <!-- Horizontal Form -->
                    
            <div class="modal-header bg-info">
              <h4 class="modal-title">Input Data Supplier</h4>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
            <form class="form-horizontal" method="get" action="supplier/tambah_data.php">
            <div class="modal-body">
                    <!-- Horizontal Form -->
                    
                    <!-- form start -->
                    
                        <div class="card-body">
                          <div class="form-group row">
                                <label for="kode_supplier" class="col-sm-2 col-form-label">Kode Supplier</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kode_supplier" placeholder="kode supplier" name="kode_supplier"required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_supplier" placeholder="nama supplier" name="nama_supplier"required>
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
                                <select class="form-control selectpicker" name="kota" required>
                                <option value="">-Pilih Kota-</option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "select * from kota";
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

                            </div>
                      
                
            </div>
           <div class="modal-footer">
                <a href="index.php?page=supplier" class="btn btn-info">
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

