<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer utilisateur</title>
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
                <h2 align="center" class="mt-4" style="font-size: 1.5em;">MODIFICATION D'UTILISATEUR</h2>
                <div class="row">
                    <div class="col-sm-4" style="margin-left: 200px;">
                        
                        <form method="post" action="<?php echo base_url()?>users/updateUser/<?php echo $unUser->user_id;?>" style="margin-top: 20px;">
                        <div class="form-group">
                            <label>Login</label>
                            <input type="text" name="log" class="form-control" value="<?php echo set_value('log',$unUser->login);?>">
                            <span class="text-danger"><?php echo form_error("log");?></span>
                        </div>

                        <div class="form-group">
                            <label>Sexe</label>
                            <select name="sex"class="form-control">
                                <option value="<?php echo $unUser->sexe;?>"><?php echo $unUser->sexe;?></option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" value="<?php echo set_value('pass',$unUser->password);?>">
                            <span class="text-danger"><?php echo form_error("pass");?></span>
                        </div>

                        <button type="submit" class="btn btn-success"><i class="fas fa-edit"></i> Modifier</button>
                        <a href="<?php echo base_url()?>users/affichageUser" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Retour</a>
                        </form>
                    </div>
                </div>
            </div>
        <!-- end Page Content -->
    </div>
    <?php include("partials/footer.php");?>
</body>
</html>