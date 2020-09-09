<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer devise</title>
    <style>
    </style>
</head>
<body>
    <?php include("partials/header.php");?>
    <div class="d-flex" id="wrapper">
        <?php include("partials/sidebar.php");?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php include("partials/navbar.php");?>
            <div class="container-fluid">
                <h2 align="center" class="mt-4" style="font-size: 1.5em;">MODIFICATION DE DEVISE</h2>
                <div class="row">
                    <div class="col-sm-4" style="margin-left: 200px;">
                        
                        <form method="post" action="<?php echo base_url()?>devise/update/<?php echo $unDevise->id;?>" style="margin-top: 20px;">

                            <div class="form-group">
                                <label>Numéro de compte</label>
                                <input type="text" name="numcpt" class="form-control" value="<?php echo set_value('numcpt',$unDevise->numcpt);?>">
                                <span class="text-danger"><?php echo form_error("numcpt");?></span>
                            </div>

                            <div class="form-group">
                                <label>Devise</label>
                                <input type="text" name="devise" class="form-control" value="<?php echo set_value('devise',$unDevise->devise
                            );?>">
                                <span class="text-danger"><?php echo form_error("devise");?></span>
                            </div>

                            <div class="form-group">
                                <label>Numéro informatique</label>
                                <input type="text" name="ninf" class="form-control" value="<?php echo set_value('ninf',$unDevise->ninf);?>">
                                <span class="text-danger"><?php echo form_error("ninf");?></span>
                            </div>


                            <button type="submit" class="btn btn-success"><i class="fas fa-edit"></i> Modifier</button>
                            <a href="<?php echo base_url()?>Devise/indexDev" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Retour</a>
                        </form>
                    </div>
                </div>
            </div>
        <!-- end Page Content -->
    </div>
    <?php include("partials/footer.php");?>
</body>
</html>