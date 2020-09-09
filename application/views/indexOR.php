<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OR</title>
    <style>  
        ul.list{  
            background-color:#eee;  
            cursor:pointer;  
        }  
        li{  
            padding:12px;  
        }  
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
                <h2 align="center" class="mt-4" style="font-size: 1.5em;">LISTE DES OR</h2>
                <input type="hidden" class="valueLastInsertId" name="valORR">
                <input type="hidden" class="urlAutocompletion" value="<?php echo base_url("ORR/autocompleted");?>">
                <input type="hidden" class="urlRechercheOrr" value="<?php echo base_url("ORR/rechercheOrr");?>">
                <input type="hidden" class="urlDelete" value="<?php echo base_url("ORR/delete");?>">
                <input type="hidden" class="urlUpdate" value="<?php echo base_url("ORR/update");?>">

                <div class="row mt-3 ml-3 top">
                    <div class="col-sm-3">
                        <button type="button" cols="3" class="btn btn-primary nouveauOrr"><i class="fas fa-plus"></i> Nouveau Orr</button>
                    </div>
                </div>

                 <!-- Enregistrement ORR -->
            <div class="slideORR mt-2 ml-3" style="display:none;">
                <form id="addFormORR" action="<?php echo base_url("ORR/insert")?>" method="post">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Numéro de compte</th>
                                <th>Numéro OR</th>
                                <th>Numéro OT</th>
                                <th>Exercice</th>
                                <th>Montant devise</th>
                                <th>Taux devise</th>
                                <th>Mode de paiement</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbodyAdd">
                            <tr>
                                <td>
                                    <input type="text" name="numcpt" id="numcpt" class="form-control" />  
                                    <div id="numCptList"></div>
                                </td>
                                <td><input type="text" name="numor" class="form-control"></td>
                                <td><input type="text" name="numot_or" class="form-control"></td>
                                <td><input type="text" name="exercice" class="form-control"></td>
                                <td><input type="text" name="mtordev" class="form-control"></td>
                                <td><input type="text" name="tauxdevar" class="form-control"></td>
                                <td>
                                    <select name="modepmt" class="form-control">
                                        <option value="Compte spéciale">Compte spéciale</option>
                                        <option value="Paiement direct">Paiement direct</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary btnAdd"><i class="fas fa-save"></i> Enregistrer</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        <!-- fin Enregistrement ORR -->
            

                <!-- Modal supprimer -->
                <div class="modal fade" id="modalSuppr" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align:center;">Suppression d'un Or</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                                <div class="modal-body">
                                    <form action="" method="post" id="deleteForm">
                                        <h5 class="text-center">Vous voulez vraiment supprimer cet Or ?</h5>
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
                        <input type="text" id="rechercherORR" class="form-control mt-2 ml-2" value="" placeholder="Rechercher">
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

                 <!-- table liste de or -->
                 <table class="table table-striped table-bordered" width="100%">
        <thead class="bg-dark text-white">
          <tr>
            <th style="display:none;">Id</th>
            <th>Numéro de compte</th>
			<th>Numéro OR</th>
			<th>Numéro OT</th>
			<th>Exercice</th>
			<th>Montant devise</th>
			<th>Taux devise</th>
			<th>Montant en ariary</th>
			<th>Mode de paiement</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="tbody">
            <?php foreach($listORs as $row):?>
                <tr id="tr_<?php echo $row->id; ?>" data-id="<?php echo $row->id; ?>" class="ligne">
                    <td class="valueIdOrr" style="display:none;"><?php echo $row->id?></td>
                    <td class="Orr" name="numcpt"><?php echo $row->numcpt?></td>
                    <td class="Orr" name="numor"><?php echo $row->numor?></td>
                    <td class="Orr" name="numot_or"><?php echo $row->numot_or?></td>
                    <td class="Orr" name="exercice"><?php echo $row->exercice;?></td>
                    <td class="Orr" name="mtordev"><?php echo $row->mtordev?></td>
                    <td class="Orr" name="tauxdevar"><?php echo $row->tauxdevar?></td>
                    <td>
                        <?php if($row->mtordev == 0 || $row->tauxdevar == 0 ): ?>
                            <?php echo ''?>
                        <?php elseif($row->mtordev != 0 && $row->tauxdevar == 0 ):?>
                            <?php echo $row->mtordev ?>
                        <?php elseif($row->mtordev == 0 && $row->tauxdevar != 0 ):?>
                            <?php echo $row->tauxdevar ?>
                        <?php else: ?>
                            <?php echo $row->mtordev*$row->tauxdevar ?>
                        <?php endif; ?>
                    </td>
                    <td class="Orr" name="modepmt"><?php echo $row->modepmt?></td>
                    <td>
                    <a href="<?php echo base_url()?>ORR/editORR/<?php echo $row->id; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <button type="button" class="btn btn-danger btnDeleteOr" data-id="<?php echo $row->id; ?>"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
      </table>      
                <!-- end table liste de or -->
                </div>
            <!-- end container -->
        </div>
        <!-- end Page Content -->
    </div>
    <?php include("partials/footer.php");?>
    <script type="text/javascript" language="javascript" >
$(document).ready(function(){

    // récupération dernier valeur id ORR 
    let valueIdOrrToIncrement = $("td.valueIdOrr:first").text();
        let lastIdORR = parseInt(valueIdOrrToIncrement) + 1
        // alert( lastIdORR );
        $('.valueLastInsertId').val(lastIdORR);

        var last = $('.valueLastInsertId').val();

    // --------------------------Afficher et cacher formulaire d'enregistrement-----------------------------------------

    $('.nouveauOrr').click(function(){
        $('.slideORR').slideToggle('fast');
    });

    // ---------------------------Autocompletion numéro de compte-----------------------------------------------------

    $('#numcpt').keyup(function(){  
           var valAutocompleted = $(this).val();  
           let urlAutocompleted = $('.urlAutocompletion').val();
           var url = `${urlAutocompleted}/${valAutocompleted}`;
           if(valAutocompleted != '')  
           {  
                $.ajax({  
                     type:"post",  
                     url:url,  
                     success:function(data)  
                     {  
                          $('#numCptList').fadeIn();  
                          $('#numCptList').html(data);  
                     }  
                });  
           }
           else{
            $('#numCptList').html(''); 
           }
      });  
      $(document).on('click', 'li', function(){  
           $('#numcpt').val($(this).text());  
           $('#numCptList').hide();  
      });  

    // ----------------------------Ajax suppression de or---------------------------------------------------

    $(".btnDeleteOr").on('click',function(){
        // alert('clicked');
        var id = $(this).data('id');

        $('#modalSuppr').modal('show');

        // alert(id);
        // console.log( $('td.valueIdPret:first').text() );

        let urlDeleteOr = $('.urlDelete').val();
        var url = `${urlDeleteOr}/${id}`;
        // alert(url);

        $('.alert').remove();

        $(".btnDelete").on('click',function(){
            $.ajax({
                type:'post',
                url : url,
                dataType : 'json',
                success : function(response){
                    if(response.success){
                        $('#tr_'+id).remove();
                        $('#modalSuppr').modal('hide');
                        $('.top').before('<div class="alert alert-success"><i class="fas fa-check"></i>  ORR supprimé avec succès</div>');
                        setTimeout(() => {
                            $('.alert').hide();
                        }, 5000);
                    }
                }
            });
        });

    });

       // ---------------------------Ajax enregistrement des orr------------------------------
       $("#addFormORR").on('submit',function(e){
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            // alert(data);
            // alert(url);

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
                                <td class="valueIdOrr" style="display:none;">${last}</td>
                                <td>${response.numcpt}</td>
                                <td>${response.numor}</td>
                                <td>${response.numot_or}</td>
                                <td>${response.exercice}</td>
                                <td>${response.mtordev}</td>
                                <td>${response.tauxdevar}</td>
                                <td>${response.mtordev*response.tauxdevar}</td>
                                <td>${response.modepmt}</td>
                                <td>
                                    <button type="button" class="btn btn-danger btnDeleteOr" onclick="return alert('Vous voulez vraiment supprimer cet ORR');" data-id="<?php echo $row->id; ?>"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                          `  
                        );

                        $('.top').before('<div class="alert alert-success"><i class="fas fa-check"></i>  ORR ajouté avec succès</div>');
                    
                        $('input[name=numcpt]').val('');
                        $('input[name=numor]').val('');
                        $('input[name=numot_or]').val('');
                        $('input[name=exercice]').val('');
                        $('input[name=mtordev]').val('');
                        $('input[name=tauxdevar]').val('');
                        $('input[name=modepmt]').val('Compte spéciale');

                        setTimeout(() => {
                            $('.alert').hide();
                        }, 5000);
                    }
                }
            });

       });

    //    ---------------------Rechercher-------------------
    $('#rechercherORR').on('keyup',function(){
        let valToResearch = $(this).val();
        let urlResearch = $('.urlRechercheOrr').val();
        var url = `${urlResearch}/${valToResearch}`;
        var actualiser = 'http://localhost/OPBE/ORR/Actualiser';
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