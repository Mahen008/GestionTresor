<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title>
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
                <h2 align="center" class="mt-4" style="font-size: 1.5em;">EDITION OR</h2>

                <!-- EDITION  -->
                <table class="table table-striped table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Numéro de compte</th>
                            <th>Numéro OR</th>
                            <th>Numéro OT</th>
                            <th>Bailleur</th>
                            <th>Libellé Prêt</th>
                            <th>Exercice</th>
                            <th>Devise</th>
                            <th>Montant devise</th>
                            <th>Taux devise</th>
                            <th>Numéro Informatique</th>
                            <th>Mode de paiement</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($affiche as $pe):?>
                            <tr>
                                <td><?php echo $pe->numcpt ;?></td>
                                <td><?php echo $pe->numor ;?></td>
                                <td><?php echo $pe->numot_or ;?></td>
                                <td><?php echo $pe->bailleur ;?></td>
                                <td><?php echo $pe->libpret ;?></td>
                                <td><?php echo $pe->exercice ;?></td>
                                <td><?php echo $pe->devise ;?></td>
                                <td><?php echo $pe->mtordev ;?></td>
                                <td><?php echo $pe->tauxdevar ;?></td>
                                <td><?php echo $pe->ninf ;?></td>
                                <td><?php echo $pe->modepmt ;?></td>

                                <td>
                                    <!-- <div class="dropdown"> -->
                                        <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1em;"><i class="fas fa-eye"></i>
                                            Action
                                        </button> -->
                                        <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> -->
                                                <a href="<?php echo base_url("ORR/EditionOR/");?><?php echo $pe->id;?>" class="btn btn-outline-dark" role="button" style="font-size: 1em;"><i class="fas fa-print"></i> Edition OR</a>
                                                <a href="<?php echo base_url()?>ORR/EditionOT/<?php echo $pe->numcpt; ?>" class="btn btn-outline-dark" role="button" style="font-size: 1em;"><i class="fas fa-print"></i> Edition OT</a>
                                        <!-- </div> -->
                                    <!-- </div> -->
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>   
                <!-- end EDITION  -->
            </div>
        </div>
        <!-- end Page Content -->
    </div>
    <?php include("partials/footer.php");?>
</body>
</html>