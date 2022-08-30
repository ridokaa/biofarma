<!-- Content Header (Page header) -->
<!-- Main content -->
<?php 
    include('data_index_gedung.php');
?>

<section class="content">
  <div class="container-fluid">  
        <div class="card">
            <!-- /.card-header -->
            <div class="card-header bg-info">
                <h1 class="card-title">Data Gedung di Biofarma</h1>
            </div>
            
            <div class="card-body">

                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-user">
                    <i class="nav-icon  fas   fa-plus-square "></i>Tambah Data</button>
               
                <br></br>

                <table id="example1" class="table table-bordered table-white ">
                    <thead >
                        <tr class="bg-info">
                            <th>#</th>
                            <th>No Gedung</th>
                            <th>Nama Gedung</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php foreach ($data_user as $user) : ?>
                                <tr>
                                    <td><?php echo $Urut++ ?></td><!-- no urut -->
                                    <td><?php echo $user['no_gedung'] ?></td>
                                    <td><?php echo $user['nama_gedung'] ?></td>
                                    <td>
                                        <!-- Single button -->
                                        <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-info btn-xs dropdown-toggle "  data-toggle="dropdown" aria-expanded="true">
                                        <span class="caret" >Pilih Aksi</span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu" bg-dark>
                                            <li>
                                            <a href="index.php?page=gedung_detail&&no_gedung=<?php echo $user['no_gedung'] ?>">
                                            <i class="nav-icon  fas fa-folder-open"></i> Detail</a>
                                             </li>

                                            <li class="divider"></li>
                                            <li>
                                            <a href="index.php?page=gedung_edit&&no_gedung=<?php echo $user['no_gedung'] ?>">
                                            <i class="nav-icon  fas  fa-edit"></i> Ubah</a>
                                            </li>

                                            <li class="divider"></li>
                                            <li>
                                            <!-- <a href="delete.php?id_user=<?php echo $user['id_user'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                                            <i class="nav-icon  fas  fa-remove"></i> Hapus
                                            </a> -->
                                            <a href="#" onClick="confirm_modal('gedung/delete_gedung.php?&no_gedung=<?php echo  $user['no_gedung'] ?>');">
                                              <i class="nav-icon  fas  fa-remove"></i> Hapus
                                            </a>
                                            </li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>                       
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>       
</section>

    <!--Modal Tambah Data-->
<div class="modal fade" id="modal-user">
        <div class="modal-dialog modal-user">
            <div class="modal-content">
                <div class="modal-header bg-info">
                <h4 class="modal-title">Input Data Gedung</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <!-- Horizontal Form -->
                <form class="form-horizontal" method="get" action="gedung/tambah_data_gedung.php">
                    <div class="modal-body">            
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="no_gedung" class="col-sm-2 col-form-label">No Gedung</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_gedung" placeholder="Nomor Gedung" name="no_gedung"required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_gedung" class="col-sm-2 col-form-label">Nama Gedung</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_gedung" placeholder="Nama Gedung" name="nama_gedung"required>
                                </div>
                            </div>

                        </div>     
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="nav-icon fas   fa-times-circle"></i>Tutup</button>
                            <button type="submit" class="btn btn-info"><i class="nav-icon fas  a-life-saver"></i> Simpan </button>
                        </div>
                    </div>
                </form>
             <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal-fade -->
</div>

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
                    <a href="gedung/delete_gedung.php?&no_gedung=<?php echo  $user['no_gedung'] ?>">
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
  
     