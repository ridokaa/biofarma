<!-- Content Header (Page header) -->
<!-- Main content -->
<?php 
    include('data_index_master.php');
?>



            <div class="card">
                    <div class="card-header bg-info">
                        <h1 class="card-title">Laporan Master</h1>
                    </div>
                        <br></br>
                        <div class="text-right">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                                <i class="nav-icon  fas  fa-plus ml-2"></i>Tambah Data
                            </button>
                        </div>
                        <!-- <br></br> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            <form method='GET'action="kontak/showbaru_kontak.php">
                                <table class="table table-striped">
                                    <tr>
                                    <div class="form-group row">
                                        <label for="no_laporan" class="col-sm-2 col-form-label">No Laporan</label>
                                        <div class="col-sm-10">
                                        <!-- <?php echo $user ['no_laporan'];?>
                                        <?php var_dump($user);?> -->
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kode_departemen" class="col-sm-2 col-form-label">Departemen</label>
                                        <div class="col-sm-10">
                                        <!-- <?php echo $user ['kode_departemen'];?> -->
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="id_personel" class="col-sm-2 col-form-label">Personel</label>
                                        <div class="col-sm-10">
                                        <!-- <?php echo $view ['id_personel'];?> -->
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tanggal_laporan" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                        <!-- <?php echo $user ['tanggal_laporan'];?> -->
                                        </div>
                                    </div>

                                    </tr>
                                </table>
                            </form>
                        </div>
            </div>
                       

                          
                        
                    <!--                         
                                            <div class="modal-footer">
                                                <a href="index.php?page=direktorat" class="btn btn-info">
                                                    <i class="nav-icon fas   fa-times-circle "></i>Tutup
                                                </a>
                                            </div> -->

                                            <!-- <div class="card-header bg-info"> -->

                    <table id="example1" class="table table-bordered table-white table-hover">
                    <div class="card-header bg-info">
                                <h1 class="card-title">Laporan Detail</h1>
                                </div>
                                <br></br>
                                    <thead >
                                        <tr class="bg-info">
                                            <th>#</th>
                                            <th>Nama Alat</th>
                                            <th>ID Alat</th>
                                            <th>Software</th>
                                            <th>Supplier</th>
                                            <th>Vendor</th>
                                            <th>Val. Plan</th>
                                            <th>URS</th>
                                            <th>Protokol</th>
                                            <th>IQ</th>
                                            <th>OQ</th>
                                            <th>PQ</th>
                                            <th>Val. Report</th>
                                            <th>Change Kontrol</th>
                                            <th>SOP</th>
                                            <th>FDA CFR Part 11 Comply</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>

                                        <tbody>
                                            <?php foreach ($data_user as $user) : ?>
                                                <tr>
                                                    <td><?php echo $Urut++ ?></td><!-- no urut -->
                                                    <!-- <td><?php echo $user['kode_direktorat'] ?></td>
                                                    <td><?php echo $user['nama_direktorat'] ?></td> -->
                                            
                                                        <!-- Single button -->
                                                        <div class="btn-group pull-right">
                                                        <button type="button" class="btn btn-info btn-xs dropdown-toggle "  data-toggle="dropdown" aria-expanded="true">
                                                        <span class="caret" >Pilih Aksi</span>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu" bg-dark>
                                                            <li>
                                                            <a href="index.php?page=direktorat_detail&& kode_direktorat=<?php echo $user['kode_direktorat']; ?>">
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
                                                            <a href="#" onClick="confirm_modal('direktorat/delete_direktorat.php?&kode_direktorat=<?php echo  $user['kode_direktorat'] ?>');">
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
            
 
