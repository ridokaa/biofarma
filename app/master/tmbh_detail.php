                 <!-- Horizontal Form -->
             
                 <div class="modal-header bg-info">
              <h4 class="modal-title">Laporan Detail</h4>
            </div>
            <form class="form-horizontal" method="post" action="master/tambah_data_laporan_master.php" enctype="multipart/form-data">
            <div class="modal-body">
                    <!-- Horizontal Form -->
                    
                    <!-- form start -->

                            <div class="form-group row">
                                <label for="id_transaksi" class="col-sm-2 col-form-label">ID Transsaksi</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="id_transaksi" placeholder="id transaksi" name="id_transaksi">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_equipment" class="col-sm-2 col-form-label">Nama Alat</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nama_equipment" placeholder="nama equipment" name="nama_equipment">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kode_equipment" class="col-sm-2 col-form-label">ID Alat</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="kode_equipment" placeholder="ID alat" name="kode_equipment">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_software" class="col-sm-2 col-form-label">Software</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nama_software" placeholder="software" name="nama_software" >
                                </div>
                            </div>
                              <div class="form-group row">
                                <label for="nama_supplier" class="col-sm-2 col-form-label">Supplier</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nama_supplier" placeholder="supplier" name="nama_supplier">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_vendor" class="col-sm-2 col-form-label">Vendor</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nama_vendor" placeholder="vendor" name="nama_vendor">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="val_plan" class="col-sm-2 col-form-label">Val. Plan</label>
                                <input type="radio" id="val_plan" name="val_plan">
                                <label for="val_plan" class="col-sm-2 col-form-label">Ada</label>
                                <input type="radio" id="val_plan" name="val_plan">
                                <label for="val_plan" class="col-sm-2 col-form-label">Tidak Ada</label>
                            
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="file-val_plan">
                                        <label class="custom-file-label" for="customFile">Pilih file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="urs" class="col-sm-2 col-form-label">URS</label>
                                <input type="radio" id="urs" name="urs">
                                <label for="urs" class="col-sm-2 col-form-label">Ada</label>
                                <input type="radio" id="urs" name="urs">
                                <label for="urs" class="col-sm-2 col-form-label">Tidak Ada</label>
                            
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="file-urs">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="protokol" class="col-sm-2 col-form-label">Protokol</label>
                                <input type="radio" id="protokol" name="protokol">
                                <label for="protokol" class="col-sm-2 col-form-label">Ada</label>
                                <input type="radio" id="protokol" name="protokol">
                                <label for="protokol" class="col-sm-2 col-form-label">Tidak Ada</label>
                            
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="file-protokol">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="iq" class="col-sm-2 col-form-label">IQ</label>
                                <input type="radio" id="iq" name="iq">
                                <label for="iq" class="col-sm-2 col-form-label">Ada</label>
                                <input type="radio" id="iq" name="iq">
                                <label for="iq" class="col-sm-2 col-form-label">Tidak Ada</label>
                            
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="file-iq">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="oq" class="col-sm-2 col-form-label">OQ</label>
                                <input type="radio" id="oq" name="oq">
                                <label for="oq" class="col-sm-2 col-form-label">Ada</label>
                                <input type="radio" id="oq" name="oq">
                                <label for="oq" class="col-sm-2 col-form-label">Tidak Ada</label>
                            
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="file-oq">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pq" class="col-sm-2 col-form-label">PQ</label>
                                <input type="radio" id="pq" name="pq">
                                <label for="pq" class="col-sm-2 col-form-label">Ada</label>
                                <input type="radio" id="pq" name="pq">
                                <label for="pq" class="col-sm-2 col-form-label">Tidak Ada</label>
                            
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="file-pq">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="val_report" class="col-sm-2 col-form-label">Val. Report</label>
                                <input type="radio" id="val_report" name="val_report">
                                <label for="val_report" class="col-sm-2 col-form-label">Ada</label>
                                <input type="radio" id="val_report" name="val_report">
                                <label for="val_report" class="col-sm-2 col-form-label">Tidak Ada</label>
                            
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="val_report">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="change_kontrol" class="col-sm-2 col-form-label">Change kontrol</label>
                                <input type="radio" id="change_kontrol" name="change_kontrol">
                                <label for="change_kontrol" class="col-sm-2 col-form-label">Ada</label>
                                <input type="radio" id="change_kontrol" name="change_kontrol">
                                <label for="change_kontrol" class="col-sm-2 col-form-label">Tidak Ada</label>
                            
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="file-change_kontrol">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sop" class="col-sm-2 col-form-label">SOP</label>
                                <input type="radio" id="sop" name="sop">
                                <label for="sop" class="col-sm-2 col-form-label">Ada</label>
                                <input type="radio" id="sop" name="sop">
                                <label for="sop" class="col-sm-2 col-form-label">Tidak Ada</label>
                            
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="sop">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fda21_cprpart11_comly" class="col-sm-2 col-form-label">FDA CFR Part 11 Comply</label>
                                <input type="radio" id="fda21_cprpart11_comly" name="fda21_cprpart11_comly">
                                <label for="fda21_cprpart11_comly" class="col-sm-2 col-form-label">Ada</label>
                                <input type="radio" id="fda21_cprpart11_comly" name="fda21_cprpart11_comly">
                                <label for="fda21_cprpart11_comly" class="col-sm-2 col-form-label">Tidak Ada</label>
                            
                                <div class="form-group row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="fda21_cprpart11_comly">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="keterangan" placeholder="keterangan" name="keterangan">
                                </div>
                            </div>


                      
                
            </div>
               <div class="modal-footer">
                <a href="index.php?page=master" class="btn btn-info">
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

      <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>