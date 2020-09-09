<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prêt</title>
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
            <!-- container -->
            <div class="container-fluid">
                <h2 align="center" class="mt-4" style="font-size: 1.5em;">LISTE DES PRETS</h2>
                <input type="hidden" class="valueLastInsertId" name="valPret">
                <input type="hidden" class="urlRechercheOrr" value="<?php echo base_url("Pret/recherchePret");?>">
                <input type="hidden" class="urlDelete" value="<?php echo base_url("Pret/delete");?>">
                <input type="hidden" class="urlUpdate" value="<?php echo base_url("Pret/update");?>">

                <div class="row mt-3 ml-3 top">
                    <div class="col-sm-3">
                        <button type="button" cols="3" class="btn btn-primary mb-2 nouveauPret"><i class="fas fa-plus"></i> Nouveau prêt</button>
                    </div>
                </div>

                 <!-- Enregistrement pret -->
                <div class="slidePret mt-2 ml-3" style="display:none;">
                    <!-- <form id="addFormPret" method="post"> -->
                    <form id="addFormPret" action="<?php echo base_url("Pret/insert")?>" method="post">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Réference Prêt</th>
                                    <th>Libellé Prêt</th>
                                    <th>Date du prêt</th>
                                    <th>Bailleur de fond</th>
                                    <th>Numéro de compte</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="ref" class="form-control"></td>
                                    <td><input type="text" name="libpret" class="form-control"></td>
                                    <td><input type="date" name="datpret" class="form-control datepicker"></td>
                                    <td><input type="text" name="bailleur" class="form-control"></td>
                                    <td><input type="text" name="numcpt" class="form-control"></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btnAdd"><i class="fas fa-save"></i> Enregistrer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            <!-- fin Enregistrement pret -->
            

                <!-- Modal supprimer -->
                <div class="modal fade" id="modalSuppr" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align:center;">Suppression d'un prêt</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                                <div class="modal-body">
                                    <form action="" method="post" id="deleteForm">
                                        <h5 class="text-center">Vous voulez vraiment supprimer ce prêt ?</h5>
                                        <input type="hidden" class="form-control idUtilisateur">
                                        <input type="hidden"  class="urlUtilisateur form-control" value="<?php echo base_url("users/deleteUser");?>">
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btnDelete">Oui</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- end Modal supprimer -->

                <div class="row d-flex align-items-center justify-content-center mb-3">
                    <div class="col-sm-8">
                        <input type="text" id="rechercherPret" class="form-control mt-2 ml-2" value="" placeholder="Rechercher">
                    </div>
                </div>

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

                 <!-- table liste de pret -->
                <table class="table table-striped table-bordered mr-auto">
                    <thead class="bg-dark text-white">
                    <tr>
                        <th style="display:none;">Id</th>
                        <th>Réference Prêt</th>
                        <th>Libellé Prêt</th>
                        <th>Date du prêt</th>
                        <th>Bailleur de fond</th>
                        <th>Numéro de compte</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="tbody">
                        <?php foreach($listPret as $row):?>
                        <tr id="tr_<?php echo $row->id; ?>" data-id="<?php echo $row->id; ?>" class="ligne">
                            <td class="valueIdPret" style="display:none;"><?php echo $row->id?></td>
                            <td class="pret" name="ref"><?php echo $row->ref?></td>
                            <td class="pret" name="lipret"><?php echo $row->libpret?></td>
                            <td class="pret" name="datepret"><?php echo $row->dateP;?></td>
                            <td class="pret" name="bailleur"><?php echo $row->bailleur?></td>
                            <td class="pret" name="numcpt"><?php echo $row->numcpt?></td>
                            <td>
                                <a href="<?php echo base_url()?>Pret/editPret/<?php echo $row->id; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btnDeletePret" data-id="<?php echo $row->id; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>   
                <!-- end table liste de pret -->
                </div>
            <!-- end container -->
        </div>
        <!-- end Page Content -->
    </div>
    <?php include("partials/footer.php");?>
    <script type="text/javascript" language="javascript" >
$(document).ready(function(){

    // récupération dernier valeur id pret 
        let valueIdPretToIncrement = $("td.valueIdPret:first").text();
        let lastIdPret = parseInt(valueIdPretToIncrement) + 1
        // alert( lastIdPret );
        $('.valueLastInsertId').val(lastIdPret);

        var last = $('.valueLastInsertId').val();

    // --------------------------Afficher et cacher formulaire d'enregistrement-----------------------------------------

    $('.nouveauPret').click(function(){
        $('.slidePret').slideToggle('fast');
    });

    // ---------------------------Ajax enregistrement des prets---------------------------------------------------------

    $("#addFormPret").on('submit',function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        // alert( url );

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
                            <td class="valueIdPret" style="display:none;">${last}</td>
                            <td>${response.ref}</td>
                            <td>${response.libpret}</td>
                            <td>${response.datpret}</td>
                            <td>${response.bailleur}</td>
                            <td>${response.numcpt}</td>
                            <td>
                                <button type="button" class="btn btn-danger btnDeletePret" data-id="${last}"><i class="fas fa-trash"></i></button>
                            </td>
                         </tr>
                        `
                    );

                    $('.top').before('<div class="alert alert-success"><i class="fas fa-check"></i>  Pret ajouté avec succès</div>');

                    $('input[name=ref]').val('');
                    $('input[name=libpret]').val('');
                    $('input[name=datpret]').val('');
                    $('input[name=bailleur]').val('');
                    $('input[name=numcpt]').val('');

                    setTimeout(() => {
                        $('.alert').hide();
                    }, 5000);
				}
			}
        });
    });

    // ----------------------------Ajax suppression de pret---------------------------------------------------

    $(".btnDeletePret").on('click',function(){
        $('.alert').remove();
        $('#modalSuppr').modal('show');
        var id = $(this).data('id');

        // console.log(id);
        // console.log( $('td.valueIdPret:first').text() );

        let urlDeletePret = $('.urlDelete').val();
        var url = `${urlDeletePret}/${id}`;
        // alert(url);

        $('.btnDelete').on('click',function(){
            $('.alert').remove();
            $.ajax({
                type:'post',
                url : url,
                dataType : 'json',
                success : function(response){
                    if(response.success){
                        $('#tr_'+id).remove();
                        $('#modalSuppr').modal('hide');
                        $('.top').before('<div class="alert alert-success"><i class="fas fa-check"></i>  Pret supprimé avec succès</div>');
                        setTimeout(() => {
                            $('.alert').hide();
                        }, 5000);
                    }
                }
            });
        });
    });

    // ----------------------------------ContentEditable colonne à modifier------------------------------------------------------

    $('td.pret').each(function(){
        $(this).on('click',function(e){
            e.preventDefault();
            $(this).attr('contenteditable',true);
            $(this).on('blur',function(){
                $(this).removeAttr('contenteditable');
                var data = $(this).text();
                // alert(data);
                var idToModify = $(this).closest('tr.ligne').data('id');
                // alert(idToModify);
                // alert( $('.urlUpdate').val() );
                let urlUpdate = $('.urlUpdate').val();
                // var url = `${urlUpdate}/${idToModify}`;
                // alert(url);
                $.ajax({
                    type:'post',
                    url : urlUpdate,
                    data : {idToModify:idToModify,data:data},
                    dataType : 'json',
                    success : function(response){
                        if(response.success){
                            alert('update');
                        }
                    }
                });
            });
        });
    });

    //    ---------------------Rechercher-------------------
    $('#rechercherPret').on('keyup',function(){
        let valToResearch = $(this).val();
        let urlResearch = $('.urlRechercheOrr').val();
        var url = `${urlResearch}/${valToResearch}`;
        var actualiser = 'http://localhost/OPBE/Pret/Actualiser';
        // alert(url);
        if(valToResearch != '') {
            $.ajax({
                type:'post',
                url:url,
                success:function(data){
                    $('.tbody').html(data)
                }
            });  
        }
        else{
            $.ajax({
                type:'post',
                url:actualiser,
                success:function(data){
                    $('.tbody').html(data)
                }
            }); 
        }
    });
});
</script>
</body>
</html>