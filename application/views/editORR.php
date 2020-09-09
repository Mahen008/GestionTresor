<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer Orr</title>
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
                <h2 align="center" class="mt-4" style="font-size: 1.5em;">MODIFICATION DE ORR</h2>
                        
                    <form method="post" action="<?php echo base_url()?>ORR/update/<?php echo $unORR->id;?>" style="margin-top: 20px;">

                        <div class="row">
                            <div class="col-sm-4">
                                <label>Numéro de compte</label>
                                <input type="text" name="numcpt" class="form-control" value="<?php echo set_value('numcpt',$unORR->numcpt);?>">
                                <span class="text-danger"><?php echo form_error("numcpt");?></span>
                            </div>
                            <div class="col-sm-4">
                                <label>Numéro OR</label>
                                <input type="number" name="numor" class="form-control" value="<?php echo set_value('numor',$unORR->numor);?>">
                                <span class="text-danger"><?php echo form_error("numor");?></span>
                            </div>
                        </div>  

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label>Numéro OT</label>
                                <input type="number" name="numot_or" class="form-control" value="<?php echo set_value('numot_or',$unORR->numot_or);?>">
                                <span class="text-danger"><?php echo form_error("numot_or");?></span>
                            </div>
                            <div class="col-sm-4">
                                <label>Exercice</label>
                                <input type="number" name="exercice" class="form-control" value="<?php echo set_value('exercice',$unORR->exercice);?>">
                                <span class="text-danger"><?php echo form_error("exercice");?></span>
                            </div>
                        </div>    

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label>Montant devise</label>
                                <input type="text" name="mtordev" class="form-control" value="<?php echo set_value('mtordev',$unORR->mtordev);?>">
                                <span class="text-danger"><?php echo form_error("mtordev");?></span>
                            </div>
                            <div class="col-sm-4">
                                <label>Taux devise</label>
                                <input type="number" name="tauxdevar" class="form-control" value="<?php echo set_value('tauxdevar',$unORR->tauxdevar);?>">
                                <span class="text-danger"><?php echo form_error("tauxdevar");?></span>
                            </div>
                        </div>  

                        <div class="row mt-3 mb-2">
                            <div class="col-sm-4">
                                <label>Mode de paiement</label>
                                <input type="text" name="modepmt" class="form-control" value="<?php echo set_value('modepmt',$unORR->modepmt);?>">
                                <span class="text-danger"><?php echo form_error("modepmt");?></span>
                            </div>
                        </div>    

                        <button type="submit" class="btn btn-success"><i class="fas fa-edit"></i> Modifier</button>
                        <a href="<?php echo base_url()?>ORR/indexOR" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Retour</a>
                    </form>
            </div>
        <!-- end Page Content -->
    </div>
    <?php include("partials/footer.php");?>
</body>
</html>