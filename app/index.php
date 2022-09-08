<!DOCTYPE html>
<html lang="en">
    
<?php 
session_start();
if(!$_SESSION['nama']){
    header('location:../index.php?session=expired');//masuk ke form login
}



include('header.php')?>;

<!-- Sambungkan ke Database -->
<?php 
  include('../config/koneksi.php');
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php')?>;

  <!-- Navbar -->
  <?php 
  //include('navbar.php')
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php')?>;

    <!-- Sidebar -->
    <?php include('sidebar.php')?>;
    <!-- /.sidebar -->

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <?php include('content_header.php')?>
    <!-- /.content-header -->

    <!-- Main content -->
     <?php
     //include('dashboard.php');
     //include('../app/departemen/index.php');
    if (isset($_GET['page'])){
         //Jika halaman page = Dasboard
        if($_GET['page']=='dashboardb'){
          include('dashboard.php');
       }
      if($_GET['page']=='dashboard'){
        include('dashboard/index_dashboard.php');
      }
        //Jika halamam page = data departemen
       elseif($_GET['page']=='departemen'){
       include('departemen/index.php');
       }
        elseif($_GET['page']=='edit'){
       include('departemen/edit.php');
       }
        elseif($_GET['page']=='user'){
       include('user/index_user.php');
       }
       elseif($_GET['page']=='user_edit'){
        include('user/edit_user.php');
      }
       elseif($_GET['page']=='user_detail'){
       include('user/show_user.php');
       }
       elseif($_GET['page']=='departemen_detail'){
        include('departemen/show.php');
      }
      elseif($_GET['page']=='direktorat'){
        include('direktorat/index_direktorat.php');
      }
      elseif($_GET['page']=='edit_direktorat'){
        include('direktorat/edit_direktorat.php');
      }
      elseif($_GET['page']=='direktorat_detail'){
        include('direktorat/show_direktorat.php');
      }
      elseif($_GET['page']=='divisi'){
        include('divisi/index_divisi.php');
      }
      elseif($_GET['page']=='divisi_detail'){
        include('divisi/show_divisi.php');
      }
      elseif($_GET['page']=='divisi_edit'){
        include('divisi/edit_divisi.php');
      }
      elseif($_GET['page']=='software'){
        include('software/index_software.php');
      }
      elseif($_GET['page']=='software_detail'){
        include('software/show_software.php');
      }
      elseif($_GET['page']=='software_edit'){
        include('software/edit_software.php');
      }
      elseif($_GET['page']=='equipment'){
        include('equipment/index_equipment.php');
      }
      elseif($_GET['page']=='equipment_detail'){
        include('equipment/show_equipment.php');
      }
      elseif($_GET['page']=='equipment_edit'){
        include('equipment/edit_equipment.php');
      }
      elseif($_GET['page']=='gedung'){
        include('gedung/index_gedung.php');
      }
      elseif($_GET['page']=='gedung_detail'){
        include('gedung/show_gedung.php');
      }
      elseif($_GET['page']=='gedung_edit'){
        include('gedung/edit_gedung.php');
      }
      elseif($_GET['page']=='kota'){
        include('kota/index_kota.php');
      }
      elseif($_GET['page']=='kota_detail'){
        include('kota/show_kota.php');
      }
      elseif($_GET['page']=='kota_edit'){
        include('kota/edit_kota.php');
      }
      elseif($_GET['page']=='kontak'){
        include('kontak/index_kontak.php');
      }
      elseif($_GET['page']=='kontak_tambah'){
        include('kontak/tmbh_kontak.php');
      }
      elseif($_GET['page']=='kontak_detail'){
        include('kontak/show_kontak.php');
      }
      elseif($_GET['page']=='kontak_edit'){
        include('kontak/edit_kontak.php');
      }
      elseif($_GET['page']=='ruangan'){
        include('ruangan/index_ruangan.php');
      }
      elseif($_GET['page']=='ruangan_detail'){
        include('ruangan/show_ruangan.php');
      }
      elseif($_GET['page']=='ruangan_edit'){
        include('ruangan/edit_ruangan.php');
      }
      elseif($_GET['page']=='personel'){
        include('personel/index_personel.php');
      }
      elseif($_GET['page']=='personel_detail'){
        include('personel/show_personel.php');
      }
      elseif($_GET['page']=='personel_edit'){
        include('personel/edit_personel.php');
      }
      elseif($_GET['page']=='supplier'){
        include('supplier/index_supplier.php');
      }
      elseif($_GET['page']=='supplier_tambah'){
        include('supplier/tmbh_supplier.php');
      }
      elseif($_GET['page']=='supplier_detail'){
        include('supplier/show_supplier.php');
      }
      elseif($_GET['page']=='supplier_edit'){
        include('supplier/edit_supplier.php');
      }
      elseif($_GET['page']=='vendor'){
        include('vendor/index_vendor.php');
      }
      elseif($_GET['page']=='vendor_tambah'){
        include('vendor/tmbh_vendor.php');
      }
      elseif($_GET['page']=='vendor_detail'){
        include('vendor/show_vendor.php');
      }
      elseif($_GET['page']=='vendor_edit'){
        include('vendor/edit_vendor.php');
      }
      elseif($_GET['page']=='master'){
        include('master/index_master.php');
      }
      elseif($_GET['page']=='detail_tambah'){
        include('master/tmbh_detail.php');
      }
      else{
      include('dashboard.php'); 
      //include('../app/departemen/index.php');
      }
  }
    ?>; 
    
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php')?>;
  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
