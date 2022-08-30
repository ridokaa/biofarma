    <!-- Content Header (Page header) -->
        <!-- Main content -->
        <?php 
    include('data_index_divisi.php');
    //include('tambah_data.php');
?>                   
<!-- <form action="departemen/store.php" method="post">
 -->    <div class="card">
        <div class="card-header bg-info">
            <h1 class="card-title">Data Divisi di Bio Farma</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- /.tombol + -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
            <i class="nav-icon  fas  fa-plus ml-2"></i>Tambah Data
            </button>
            <br></br>
            <table id="example1" class="table table-bordered table-white table-hover">
                <thead >
                    <tr class="bg-info">
                        <th>#</th>
                        <th>Kode Divisi</th>
                        <th>Nama Divisi</th>
                        <th>Kode Direktorat</th>
                        <th>Aksi</th>
                    </tr>

                    <tbody>
                        <?php foreach ($data_user as $user) : ?>
                            <tr>
                                <td><?php echo $Urut++ ?></td><!-- no urut -->
                                <td><?php echo $user['kode_divisi'] ?></td>
                                <td><?php echo $user['nama_divisi'] ?></td>
                                <td><?php echo $user['kode_direktorat'] ?></td>
                                <td>
                                    <!-- Single button -->
                                    <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-info btn-xs dropdown-toggle "  data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret" >Pilih Aksi</span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu" bg-dark>
                                        <li>
                                        <a href="index.php?page=divisi_detail&& kode_divisi=<?php echo $user['kode_divisi']; ?>">
                                        <i class="nav-icon  fas fa-folder-open"></i> Detail</a>
                                        </li>

                                        <li class="divider"></li>
                                        <li>
                                        <a href="index.php?page=divisi_edit&& kode_divisi=<?php echo $user['kode_divisi']; ?>"> 
                                        <i class="nav-icon fas fa-edit"></i> Ubah</a>
                                        </li>

                                        <li class="divider"></li>
                                        <li>
                                        <!-- <a href="departemen/delete.php?kode_departemen=<?php echo $user['kode_departemen'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                                        <i class="nav-icon  fas  fa-remove"></i> Hapus</a> -->
                                        <a href="#" onClick="confirm_modal('equipment/delete_equipment.php?&kode_equipment=<?php echo  $user['kode_equipment'] ?>');">
                                              <i class="nav-icon  fas  fa-remove"></i> Hapus
                                        </a>
                                        </li>
                                    </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>                       
                    </tbody>
                </thead>
            </table>                   
        </div>
    </div>
</form> 
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h4 class="modal-title">Input Data Divisi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" method="get" action="divisi/tambah_data_divisi.php">
            <div class="modal-body">
                    <!-- Horizontal Form -->
                    
                    <!-- form start -->
                    
                        <div class="card-body">
                        <div class="form-group row">
                            <label for="kode_divisi" class="col-sm-2 col-form-label">Kode Divisi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_divisi" placeholder="kode divisi" name="kode_divisi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_divisi" class="col-sm-2 col-form-label">Nama Divisi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_divisi" placeholder="nama divisi" name="nama_divisi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_direktorat" class="col-sm-2 col-form-label">Direktorat</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kode_direktorat" required>
                                <option value="">-Pilih Direktorat-</option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "select * from direktorat";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[kode_direktorat]>$data[kode_direktorat]</option>";
                                    };

                                    ?>
                                </select>
                            </div>
                        </div>
                        

                        </div>
                      
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">
               <i class="nav-icon fas   fa-times-circle "></i>Tutup
               </button>

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

<!-- edit -->
      <!-- <script>
        
                $('#modaledit').on('show.bs.modal', function (event) {
                    // event.relatedtarget menampilkan elemen mana yang digunakan saat diklik.
                    var button              = $(event.relatedTarget)
        
                    // data-data yang disimpan pada tombol edit dimasukkan ke dalam variabelnya masing-masing 
                    var nama_barang         = button.data('nama_barang')
                    var deskripsi_barang    = button.data('deskripsi_barang')
                    var jenis_barang        = button.data('jenis_barang')
                    var harga_barang        = button.data('harga_barang')
                    var modal = $(this)
        
                    //variabel di atas dimasukkan ke dalam element yang sesuai dengan idnya masing-masing
                    modal.find('#nama_barang').val(nama_barang)
                    modal.find('#deskripsi_barang').val(deskripsi_barang)
                    modal.find('#jenis_barang').val(jenis_barang)
                    modal.find('#harga_barang').val(harga_barang)
                })
        </script> -->
  <!-- Popup modal Delete-->
  <div class="modal fade" id="modal_delete">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                <h1 class="modal-title"><i class="nav-icon fas   fa-times-circle"></i>Perhatian!!</h1>
            </div>
            <div class="modal-body">
            <h4 class="modal-title"><i class="nav-icon fas   fa-times-circle"></i>Anda yakin akan menghapus data ini.. ?</h4>
            </div>
                <div class="modal-footer">
                    <a href="equipment/delete_equipment.php?&no_gedung=<?php echo  $user['kode_equipment'] ?>">
                    <a href="#" class="btn btn-danger " id="delete_link"><i class="nav-icon fas   fa-times-circle"></i>Hapus</a>
                    <button type="button" class="btn btn-info" data-dismiss="modal"><i class="nav-icon fas   fa-times-circle"></i>Batal</button>
                    
                </div>
            
            </div>
        </div>
</div>
                
<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
   function confirm_modal(delete_url)
    {
     $('#modal_delete').modal('show', {backdrop: 'static'});
     document.getElementById('delete_link').setAttribute('href', delete_url);
     }
</script> 

  