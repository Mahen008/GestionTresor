<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <style>
        .info-box{
            border : 1px solid #f2f2f2;
        }
    </style>
</head>
<body class="body">
    <?php include("partials/header.php");?>
    <div class="d-flex" id="wrapper">
        <?php include("partials/sidebar.php");?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php include("partials/navbar.php");?>
            <div class="container-fluid">
                <h2 align="center" class="mt-4" style="font-size: 1.5em;">TABLEAU DE BORD</h2>
                <!-- Info boxes -->
                <div class="row mt-5">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-primary text-white"><i class="fas fa-user"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Utilisateurs</span>
                                <?php foreach($countUser as $count):?>
                                    <span class="info-box-number"><?php echo $count->countUser; ?></span>
                                <?php endforeach; ?> 
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-secondary text-white"><i class="fas fa-folder"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Prêt</span>
                                <?php foreach($countPret as $count):?>
                                    <span class="info-box-number"><?php echo $count->countPret; ?></span>
                                <?php endforeach; ?> 
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green text-white"><i class="fas fa-folder"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Devises</span>
                                <?php foreach($countDevise as $count):?>
                                    <span class="info-box-number"><?php echo $count->countDevise; ?></span>
                                <?php endforeach; ?> 
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-dark text-white"><i class="fas fa-folder"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">ORR</span>
                                <?php foreach($countORR as $count):?>
                                    <span class="info-box-number"><?php echo $count->countORR; ?></span>
                                <?php endforeach; ?> 
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- end Page Content -->
    </div>
    <?php include("partials/footer.php");?>
    
</body>
</html>