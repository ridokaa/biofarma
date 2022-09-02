<!-- Content Header (Page header) -->
<!-- Main content -->
<?php
include('data_index_master.php');
$no_laporan_existing = isset($_GET['no_laporan']);
?>



<div class="card">
    <div class="card-header bg-info">
        <h1 class="card-title">Laporan Master</h1>
    </div>
    <!-- <br></br> -->

    <!-- /.card-header -->
    <div class="card-body">
        <div class="container-fluid">
            <form method='POST' action="master/tambah_data_laporan_master.php">
                <div class="row">
                    <div class="col-6">

                        <!-- <div class="form-group row">
                                        <label for="no_laporan" class="col-sm-2 col-form-label">No Laporan</label>
                                        <div class="col-sm-10">
                                        <?php echo $user['no_laporan']; ?>
                                        <?php var_dump($user); ?>
                                        </div>
                                    </div> -->

                        <div class="form-group row">
                            <label for="no_laporan" class="col-sm-2 col-form-label">No laporan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_laporan" placeholder="no laporan" name="no_laporan" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kode_departemen" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                                <select class="form-control selectpicker" name="kode_departemen" required>
                                    <option value="">-Pilih Departemen-</option>
                                    <?php   
                          $query = mysqli_query($con, "select * from departemen order by kode_departemen esc");  
                          $result = mysqli_query($con, "SELECT kode_departemen, nama_departemen, divisi.nama_divisi, direktorat.nama_direktorat FROM departemen, divisi, direktorat WHERE departemen.kode_divisi=divisi.kode_divisi and divisi.kode_direktorat=direktorat.kode_direktorat");  
                          $a          = "var kode_divisi = new Array();\n;";    
                          while ($row = mysqli_fetch_array($result)) {  
                               echo '<option name="kode_departemen" value="'.$row['kode_departemen'] . '">' . $row['nama_departemen'] . '</option>';   
                          $a .= "kode_divisi['" . $row['kode_departemen'] . "'] = {kode_divisi:'" . addslashes($row['kode_divisi'])."'};\n";  
                          }  
                                            ?>  
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kode_divisi" class="col-sm-2 col-form-label">Divisi</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control selectpicker" id="kode_divisi" name="kode_divisi" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kode_direktorat" class="col-sm-2 col-form-label">Direktorat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control selectpicker" id="kode_direktorat" name="kode_direktorat" readonly>
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
                                    $Q3 = mysqli_query($koneksi, $SQL3);
                                    while ($data = mysqli_fetch_array($Q3)) {
                                        echo "<option value=$data[id_personel]>$data[nama_personel]</option>";
                                    };

                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal_laporan" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_laporan" placeholder="no laporan" name="tanggal_laporan" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-info">
                        <i class="nav-icon  fas  fa-plus ml-2"></i>Tambah Data
                    </button>
                </div>

            </form>
        </div>


    </div>
</div>



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
    <div class="d-flex justify-content-end border p-2 mt-3">
        <h5 for="tanggal_laporan" class="my-3 font-weight-bold">No Laporan: </h5>
        <div class="my-3 mr-5">
            <?php
            if (isset($no_laporan_existing)) {
                echo '<h5>' . $_GET['no_laporan'] . '</h5>';
            } else {
                // 
            } ?>
            <!-- <?php echo $user['tanggal_laporan']; ?> -->
        </div>
    </div>
    <br></br>
    <thead>
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
                    <button type="button" class="btn btn-info btn-xs dropdown-toggle " data-toggle="dropdown" aria-expanded="true">
                        <span class="caret">Pilih Aksi</span>
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