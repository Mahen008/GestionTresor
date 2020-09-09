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
                <h2 align="center" class="mt-4" style="font-size: 1.5em;">LISTE DES UTILISATEURS</h2>

                <input type="hidden" class="valueLastInsertId" name="valPret"><br>
                <input type="hidden" class="urlEditerUser form-control" value="<?php echo base_url("users/editUser")?>">

                <!-- Modal supprimer -->
                <div class="modal fade" id="modalSuppr" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align:center;">Suppression d'un utilisateur</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <div class="modal-body">
                                    <form action="" method="post" id="deleteForm">
                                        <h5 class="text-center">Vous voulez vraiment supprimer cet utilisateur ?</h5>
                                        <input type="hidden" class="form-control idUtilisateur">
                                        <input type="hidden"  class="urlUtilisateur form-control" value="<?php echo base_url("users/deleteUser");?>">
                                        <div class="modal-footer">
                                                <button type="button" id="btnOui" class="btn btn-danger btnDelete">Oui</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end Modal supprimer -->

                <!-- Ajout utilisateur -->
                <div class="row mt-3 mb-2 ml-3 top">
                    <div class="col-sm-3">
                        <button type="button" cols="3" class="btn btn-primary nouveauUser">
                        <span class="fas fa-user-plus"></span> Nouveau utilisateur
                        </button>
                    </div>
                </div>
                <!-- end Ajout utilisateur -->

                <!-- Enregistrement User -->
                <div class="slideUser mt-2 ml-3" style="display:none;">
                    <form id="addFormUser" action="<?php echo base_url("Users/creeUser")?>" method="post">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Login</th>
                                    <th>Sexe</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="log" class="form-control"></td>
                                    <td>
                                        <select name="sex" class="form-control">
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                        </select>
                                    </td>
                                    <td><input type="password" name="pass" class="form-control"></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btnAdd"><i class="fas fa-save"></i> Enregistrer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <!-- fin Enregistrement User -->

                <?php if($msg = $this->session->flashdata('message')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:#fff;">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                            </button>
                            <i class="fas fa-check"></i> <?php echo $msg;?>
                        </div>
                    </div>
                <?php endif; ?> 

                <!-- Liste des utilisateurs -->
                <table class="table table-striped table-inverse">
                    <thead class="thead-inverse bg-dark text-white">
                        <tr>
                            <th style="display:none;">Id de l'utilisateur</th>
                            <th>Login</th>
                            <th>Sexe</th>
                            <th style="display:none;">Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <?php foreach($users as $user): ?>
                            <tr id="tr_<?php echo $user->user_id; ?>">
                                <td class="valueIdUser" style="display:none;"><?php echo $user->user_id; ?></td>
                                <td><?php echo $user->login; ?></td>
                                <td><?php echo $user->sexe; ?></td>
                                <td style="display:none;"><?php echo $user->password; ?></td>
                                <td>
                                    <a href="<?php echo base_url()?>users/editUser/<?php echo $user->user_id; ?>" class="btn btn-success" style="font-size:1em;"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-danger btnDeleteUser" data-id="<?php echo $user->user_id; ?>"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- end Liste des utilisateurs -->
            </div>
        </div>
        <!-- end Page Content -->
    </div>
    <?php include("partials/footer.php");?>
    <script>
        $(function(){
            // ------------------------Suppression utilisateur ajax--------------------------------
            $('.btnDeleteUser').on('click',function(e){
                e.preventDefault();
                $('#modalSuppr').modal('show');
                let id = $(this).data('id');
                $('.idUtilisateur').val(id);
                let idUser = $('.idUtilisateur').val();
                // console.log(idUser);
                let urlDeleteUser = $('.urlUtilisateur').val();
                var url = `${urlDeleteUser}/${idUser}`;
                // console.log(url);

                $('.btnDelete').on('click',function(){

                    $('.alert').remove();

                     $.ajax({
                            type:'post',
                            url : url,
                            dataType : 'json',
                            success : function(response){
                                if(response.success){
                                    $('#tr_'+idUser).remove();
                                    $('#modalSuppr').modal('hide');
                                    $('.top').before('<div class="alert alert-success"><i class="fas fa-check"></i>  Utilisateur supprimé avec succès</div>');
                                    setTimeout(() => {
                                        $('.alert').hide();
                                    }, 3000);
                                }
                            }
                        });
                });
            });
            // ----------------------------------------------------------------------------------------
            
            // --------------------------Afficher et cacher formulaire d'enregistrement-----------------------------------------
            
            $('.nouveauUser').click(function(){
                $('.slideUser').slideToggle('fast');
            });

            // ------------------------------------------------récupération dernier valeur id utilisateur 
            let valueIdUserToIncrement = $("td.valueIdUser:first").text();
            let lastIdUser = parseInt(valueIdUserToIncrement) + 1;
            // alert(valueIdUserToIncrement);
            $('.valueLastInsertId').val(lastIdUser);

            var last = $('.valueLastInsertId').val();

            // ---------------------------------Enregistrement utilisateur-------------------------------------------------------

            $('#addFormUser').on('submit',function(e){
                e.preventDefault();
                var data = $(this).serialize();
                var url = $(this).attr('action');
                // alert(data);
                // alert(url);

                var urlEditer = $('.urlEditerUser').val();

                $('.alert').remove();

                // <a href="${urlEditer}/${last}" class="btn btn-success" style="font-size:1em;"><i class="fas fa-edit"></i></a>

                $.ajax({
                    type : 'post',
                    url : url,
                    data : data,
                    dataType : 'json',
                    success : function(response){
                        if(response.success){
                            $('.tbody').prepend(
                                `
                                    <tr id="tr_${last}" data-id="${last}">
                                        <td style="display:none;">${last}</td>
                                        <td>${response.log}</td>
                                        <td>${response.sex}</td>
                                        <td>
                                            <a href="#" class="btn btn-success" style="font-size:1em;"><i class="fas fa-edit"></i></a>
                                            <button type="button" class="btn btn-danger btnDeleteUser" data-id="${last}"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                `
                            );

                            $('.top').before('<div class="alert alert-success"><i class="fas fa-check"></i>  Utilisateur ajouté avec succès</div>');
                            $('input[name=log]').val('');
                            $('input[name=pass]').val('');

                            setTimeout(() => {
                                $('.alert').hide();
                            }, 2000);

                        }
                    }
                });
            });
        });
    </script>
</body>
</html>