<?php 
    include('data_index_dashboard.php');
?>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat Box)-->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>
                        <?php echo $jumlah_departemen['total'] ?>
                    </h3>

                    <p>Departemen</p>
                </div>
                <div class="icon">
                    <i class="ion ion-briefcase"></i>
                </div>
                <a href="index.php?page=departemen" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>
                        <?php echo $jumlah_divisi['total'] ?>
                    </h3>

                    <p>Divisi</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="index.php?page=divisi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <h3>
                        <?php echo $jumlah_direktorat['total'] ?>
                    </h3>

                    <p>Direktorat</p>
                </div>
                <div class="icon">
                    <i class="ion ion-laptop"></i>
                </div>
                <a href="index.php?page=direktorat" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>


        </div>
    </div>
</selection>