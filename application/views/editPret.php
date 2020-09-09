<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer PRET</title>
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
                <h2 align="center" class="mt-4" style="font-size: 1.5em;">MODIFICATION DE PRET</h2>
                        
                    <form method="post" action="<?php echo base_url()?>PRET/update/<?php echo $unPRET->id;?>" style="margin-top: 20px;">

                        <div class="row">
                            <div class="col-sm-4">
                                <label>Numéro de compte</label>
                                <input type="text" name="numcpt" class="form-control" value="<?php echo set_value('numcpt',$unPRET->numcpt);?>">
                                <span class="text-danger"><?php echo form_error("numcpt");?></span>
                            </div>
                            <div class="col-sm-4">
                                <label>Réference Prêt</label>
                                <input type="text" name="ref" class="form-control" value="<?php echo set_value('ref',$unPRET->ref);?>">
                                <span class="text-danger"><?php echo form_error("ref");?></span>
                            </div>
                        </div>  

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label>Libellé Prêt</label>
                                <input type="text" name="libpret" class="form-control" value="<?php echo set_value('libpret',$unPRET->libpret);?>">
                                <span class="text-danger"><?php echo form_error("libpret");?></span>
                            </div>
                            <div class="col-sm-4">
                                <label>Date du prêt</label>
                                <input type="date" name="datpret" class="form-control" value="<?php echo set_value('datpret',$unPRET->datpret);?>">
                                <span class="text-danger"><?php echo form_error("exercice");?></span>
                            </div>
                        </div>    

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label>Bailleur de fond</label>
                                <input type="text" name="bailleur" class="form-control" value="<?php echo set_value('bailleur',$unPRET->bailleur);?>">
                                <span class="text-danger"><?php echo form_error("bailleur");?></span>
                            </div>
                            <div class="col-sm-4">
                                <label>Id</label>
                                <input type="text" name="id" class="form-control" value="<?php echo set_value('id',$unPRET->id);?>">
                                <span class="text-danger"><?php echo form_error("id");?></span>
                            </div>
                        </div>  

                        <button type="submit" class="btn btn-success"><i class="fas fa-edit"></i> Modifier</button>
                        <a href="<?php echo base_url()?>Pret/indexPr" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Retour</a>
                    </form>
            </div>
        <!-- end Page Content -->
    </div>
    <?php include("partials/footer.php");?>
</body>
</html>