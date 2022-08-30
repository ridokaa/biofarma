    <!-- Content Header (Page header) -->
        <!-- Main content -->
<?php 
    include('data-index.php');
    //include('tambah_data.php');
?>                   
<!-- <form action="departemen/store.php" method="post">
 -->    <div class="card">
        <div class="card-header bg-info">
            <h1 class="card-title">Data Departemen di Bio Farma</h1>
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
                        <th>Kode Departemen</th>
                        <th>Nama Departemen</th>
                        <th>Divisi</th>
                        <th>Aksi</th>
                    </tr>

                    <tbody>
                        <?php foreach ($data_user as $user) : ?>
                            <tr>
                                <td><?php echo $Urut++ ?></td><!-- no urut -->
                                <td><?php echo $user['kode_departemen'] ?></td>
                                <td><?php echo $user['nama_departemen'] ?></td>
                                <td><?php echo $user['nama_divisi'] ?></td>
                                <td>
                                    <!-- Single button -->
                                    <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-info btn-xs dropdown-toggle "  data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret" >Pilih Aksi</span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu" bg-dark>
                                        <li>
                                        <a href="index.php?page=departemen_detail&& kode_departemen=<?php echo $user['kode_departemen']; ?>">
                                        <i class="nav-icon  fas fa-folder-open"></i> Detail</a>
                                        </li>

                                        <li class="divider"></li>
                                        <li>
                                        <a href="index.php?page=edit&& kode_departemen=<?php echo $user['kode_departemen']; ?>"> <i class="nav-icon fas fa-edit"></i> Ubah</a>
                                        </li>

                                        <li class="divider"></li>
                                        <li>
                                        <!-- <a href="departemen/delete.php?kode_departemen=<?php echo $user['kode_departemen'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                                        <i class="nav-icon  fas  fa-remove"></i> Hapus</a> -->
                                        <a href="#" onClick="confirm_modal('departemen/delete.php?&kode_departemen=<?php echo  $user['kode_departemen'] ?>');">
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
              <h4 class="modal-title">Input Data Departemen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" method="get" action="departemen/tambah_data.php">
            <div class="modal-body">
                    <!-- Horizontal Form -->
                    
                    <!-- form start -->
                    
                        <div class="card-body">
                        <div class="form-group row">
                            <label for="kode_departemen" class="col-sm-2 col-form-label">Kode</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_departemen" placeholder="kode departemen" name="kode_departemen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_departemen" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_departemen" placeholder="nama departemen" name="nama_departemen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_divisi" class="col-sm-2 col-form-label">Divisi</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kode_divisi" required>
                                <option value="">-Pilih Divisi-</option>
                                <?php
                                include('../config/koneksi.php');
                                //ambil kode direktorate dari tabel direktorat
                                    $SQL3 = "select * from divisi";
                                    $Q3 =mysqli_query($koneksi,$SQL3);
                                    While($data=mysqli_fetch_array($Q3)){
                                    echo "<option value=$data[kode_divisi]>$data[nama_divisi]</option>";
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
                    <a href="departemen/delete.php?&kode_departemen=<?php echo  $user['kode_departemen'] ?>">
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