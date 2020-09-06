<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Utilisateur</title>

</head>

<body>

  <?php include("partials/header.php"); ?>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php include("partials/sidebar.php");?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php include("partials/navbar.php");?>

    <!-- start container -->
        <div class="container-fluid">
       <!-- debut card-->
         <div class="card">
          <div class="card-header" style="height: 65px;">
            <h2 align="center" style="font-size: 1.5em;">LISTE UTILISATEUR</h2>
        </div>
  <br>
  <div class="card-body">
    <div class="container-fluid">

    <button class="btn btn-primary active" data-toggle="modal" data-target="#exampleModalLong" style="margin-bottom: 7px;"><span class="fas fa-user-plus"></span> Nouveau utilisateur</button>


<!-- Modal ajout utilisateur -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document"><br>
    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle" >Ajouter un utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <form method="post" action="<?php base_url()?>creeUser" role="form">

                  <div class="modal-body">

                    <div class="row">

                       <div class="col-md-6 mb-3">
                            <label>Login</label>
                            <input type="text"name="log" class="form-control">
                            <span class="text-danger"><?php echo form_error("log");?></span>
                        </div>

                        <div class="col-md-6 mb-3">
                        <label>Sexe</label>
                        <select name="sex" class="form-control">
                          <option value="Homme">Homme</option>
                          <option value="Femme">Femme</option>
                        </select>
                      </div>


                   </div>

                   <div class="row">
                       <div class="col-md-6 mb-3">
                          <label>Password</label>
                          <input type="password" name="pass" class="form-control">
                          <span class="text-danger"><?php echo form_error("pass");?></span>
                      </div>
                   </div>

                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                  </div>

                 </div>

        </form>
    </div>
  </div>
</div>
<!-- fin de modal ajout -->

<!-- modal supprimer -->
<!-- Button trigger modal -->


<!-- Modal -->
<!-- <div class="modal fade" id="btnSuppr" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Suppression d'un utilisateur</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <input type="text" class="idUtilisateur">
        <p class="text-center">Vous voulez vraiment supprimer cet utilisateur</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Supprimer</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div> -->
<!-- end modal supprimer -->
      
      <table class="table table-striped table-bordered" style="font-size: 0.87em; width: 100%;">
        <thead style="background-color: #333; color: #fff;">
          <tr>
            <th style="display: none;">Id de l'utilisateur</th>
            <th>Login</th>
            <th>Sexe</th>
            <th>Password</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user): ?>
          <tr>
              <td style="display: none;"><?php echo $user->user_id; ?></td>
              <td><?php echo $user->login; ?></td>
              <td><?php echo $user->sexe; ?></td>
              <td><?php echo $user->password; ?></td>
              <td>
                <a href="<?php echo base_url()?>users/editUser/<?php echo $user->user_id; ?>" class="btn btn-success" style="font-size:1em;"><i class="fas fa-edit"></i></a>
                <a href="<?php echo base_url()?>users/deleteUser/<?php echo $user->user_id; ?>" class="btn btn-danger" style="font-size:1em;"><i class="fas fa-trash"></i></a>
                <!-- <button type="button" class="btn btn-danger" data-id="<?php echo $user->user_id; ?>"  data-toggle="modal" data-target="#btnSuppr">
                    <i class="fas fa-trash"></i>
                </button> -->
              </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>   
    </div>
  </div>

  <?php include('partials/footer.php');?>
  <script>
    $(function(){
      // alert('supprimer');
    });
  </script>
