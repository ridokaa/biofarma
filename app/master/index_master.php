<!-- Content Header (Page header) -->
<!-- Main content -->
<?php 
    include('data_index_master.php');
?>



            <div class="card">
                    <div class="card-header bg-info">
                        <h1 class="card-title">Laporan Master</h1>
                    </div>
                        <!-- <br></br> -->

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="container-fluid">
                                <form method='GET'action="laporan_master/tambah_data_laporan_master.php">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info">
                                            <i class="nav-icon  fas  fa-plus ml-2"></i>Tambah Data
                                        </button>
                                    </div>
                                    <br></br>
                                <div class="row">
                                    <div class="col-6">
                                        
                                    <!-- <div class="form-group row">
                                        <label for="no_laporan" class="col-sm-2 col-form-label">No Laporan</label>
                                        <div class="col-sm-10">
                                        <?php echo $user ['no_laporan'];?>
                                        <?php var_dump($user);?>
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <label for="no_laporan" class="col-sm-2 col-form-label">No laporan</label>
                                         <div class="col-sm-10">
                                            <input type="text" class="form-control" id="no_laporan" placeholder="no laporan" name="no_laporan"required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kode_departemen" class="col-sm-2 col-form-label">Departemen</label>
                                        <div class="col-sm-10">
                                            <select class="form-control selectpicker" name="kode_departemen" required>
                                            <option value="">-Pilih Departemen-</option>
                                            <?php
                                            include('../config/koneksi.php');
                                            //ambil kode direktorate dari tabel direktorat
                                                $SQL3 = "select * from departemen";
                                                $Q3 =mysqli_query($koneksi,$SQL3);
                                                While($data=mysqli_fetch_array($Q3)){
                                                echo "<option value=$data[kode_departemen]>$data[nama_departemen]</option>";
                                                };

                                                ?>
                                            </select>
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
                                                echo "<option value=$data[kode_direktorat]>$data[nama_direktorat]</option>";
                                                };

                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    </div>
                                    <div class="col-6">

                                    <div class="form-group row">
                                        <label for="id_personel" class="col-sm-2 col-form-label">Personel</label>
                                        <div class="col-sm-10">
                                            <select class="form-control selectpicker" name="id_personel" required>
                                            <option value="">-Pilih Personel-</option>
                                            <?php
                                            include('../config/koneksi.php');
                                            //ambil kode direktorate dari tabel direktorat
                                                $SQL3 = "select * from personel";
                                                $Q3 =mysqli_query($koneksi,$SQL3);
                                                While($data=mysqli_fetch_array($Q3)){
                                                echo "<option value=$data[id_personel]>$data[nama_personel]</option>";
                                                };

                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tanggal_laporan" class="col-sm-2 col-form-label">Tanggal</label>
                                         <div class="col-sm-10">
                                            <input type="date" >
                                        </div>
                                    </div>

                                    </div>
                                </div>
                                     

                            </form>
                            </div>
                            
                            
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
                            <div class="text-right">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                                    <i class="nav-icon  fas  fa-plus ml-2"></i>Tambah Data
                                </button>
                            </div>
                             <div class="form-group row float-right">
                                        <label for="tanggal_laporan" class="col-sm-2 col-form-label">No Laporan</label>
                                        <div class="col-sm-10">
                                        <!-- <?php echo $user ['tanggal_laporan'];?> -->
                                        </div>
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
            
 
