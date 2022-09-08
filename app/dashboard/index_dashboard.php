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
                        <?php echo $jumlah_software['total'] ?>
                    </h3>

                    <p>Software</p>
                </div>
                <div class="icon">
                    <i class="ion ion-folder"></i>
                </div>
                <a href="index.php?page=software" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>
                        <?php echo $jumlah_equipment['total'] ?>
                    </h3>

                    <p>Equipment</p>
                </div>
                <div class="icon">
                    <i class="ion ion-laptop"></i>
                </div>
                <a href="index.php?page=equipment" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>



        </div>
    </div>
</selection>