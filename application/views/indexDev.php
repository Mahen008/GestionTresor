<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Devise</title>
  <style>
    .list{  
        background-color:#eee;  
        cursor:pointer;  
    }

    li{  
      padding:12px;  
    } 
  </style>
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
            <h2 align="center" style="font-size: 1.5em;" class="mt-4">LISTE DES DEVISES</h2>

            <input type="hidden" class="urlAutocompletion" value="<?php echo base_url("ORR/autocompleted");?>">
            <input type="hidden" class="urlDelete" value="<?php echo base_url("Devise/delete");?>">

     <!-- Ajout devise -->
     <div class="row mt-3 mb-2 ml-3 top">
          <div class="col-sm-3">
                        <button type="button" cols="3" class="btn btn-primary nouveauDevise">
                        <span class="fas fa-plus"></span> Nouveau devise
                        </button>
                    </div>
                </div>
      <!-- end Ajout devise -->

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

       <!-- Enregistrement Devise -->
       <div class="slideDevise mt-2 ml-3" style="display:none;">
                    <form id="addFormDevise" action="<?php echo base_url("Devise/insert")?>" method="post">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Numéro de compte</th>
                                    <th>Devise</th>
                                    <th>Numéro informatique</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <tr>
                                    <td>
                                      <input type="text" name="numcpt" id="numcpt" class="form-control" />  
                                      <div id="numCptList"></div>
                                    </td>
                                    <td><input type="text" name="devise" class="form-control"></td>
                                    <td><input type="text" name="ninf" class="form-control"></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btnAdd"><i class="fas fa-save"></i> Enregistrer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
    <!-- fin Enregistrement Devise -->

     <!-- Modal supprimer -->
     <div class="modal fade" id="modalSuppr" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align:center;">Suppression d'un devise</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <div class="modal-body">
                                    <form action="" method="post" id="deleteForm">
                                        <h5 class="text-center">Vous voulez vraiment supprimer ce devise ?</h5>
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
      
      <table class="table table-striped table-bordered" style="font-size: 0.87em; width: 100%;">
        <thead class="bg-dark text-white"">
          <tr>
            <th>Numéro de compte</th>
            <th>Devise</th>
            <th>Numéro informatique</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="tbodyDev">
            <?php foreach($listDevise as $row):?>
              <tr id="tr_<?php echo $row->id; ?>" data-id="<?php echo $row->id; ?>">
                    <td><?php echo $row->numcpt; ?></td>
                    <td><?php echo $row->devise; ?></td>
                    <td><?php echo $row->ninf; ?></td>
                    <td>
                        <a href="<?php echo base_url()?>Devise/editDevise/<?php echo $row->id; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <button type="button" class="btn btn-danger btnDeleteDevise" data-id="<?php echo $row->id; ?>"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
      </table>   
    </div>
</div>

  <?php include('partials/footer.php');?>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  
  $(document).on('click', '.btn_delete', function(){
    var id = $(this).attr('id');
    if(confirm("Voulez-vous vraiment supprimer?"))
    {
      $.ajax({
        url:"<?php echo base_url(); ?>Devise/delete",
        method:"POST",
        data:{id:id},
        success:function(data){
          load_data();
        }
      })
    }
  });

   // --------------------------Afficher et cacher formulaire d'enregistrement-----------------------------------------

   $('.nouveauDevise').click(function(){
        $('.slideDevise').slideToggle('fast');
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

      // ---------------------------Ajax enregistrement des DEVISE------------------------------
      $("#addFormDevise").on('submit',function(e){
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
                    $('.tbodyDev').prepend(
                      `
                      <tr>
                          <td>${response.numcpt}</td>
                          <td>${response.devise}</td>
                          <td>${response.ninf}</td>
                          <td><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></td>
                      </tr>
                    `
                    );
                    $('.top').before('<div class="alert alert-success"><i class="fas fa-check"></i>  Devise ajouté avec succès</div>');

                    $('input[name=numcpt]').val('');
                    $('input[name=devise]').val('');
                    $('input[name=ninf]').val('');

                    setTimeout(() => {
                      $('.alert').hide();
                    }, 5000);
                  }
                }
            });
      });

      // ----------------------------Ajax suppression de Devise---------------------------------------------------

    $(".btnDeleteDevise").on('click',function(){
        var id = $(this).data('id');
        // console.log(id);

        $('#modalSuppr').modal('show');

        // // console.log( $('td.valueIdPret:first').text() );

        let urlDeleteDevise = $('.urlDelete').val();
        var url = `${urlDeleteDevise}/${id}`;
        // alert(url);

        $(".btnDelete").on('click',function(){
            $.ajax({
                type:'post',
                url : url,
                dataType : 'json',
                success : function(response){
                    if(response.success){
                        $('#tr_'+id).remove();
                        $('#modalSuppr').modal('hide');
                        $('.top').before('<div class="alert alert-success"><i class="fas fa-check"></i>  Devise supprimé avec succès</div>');
                        setTimeout(() => {
                            $('.alert').hide();
                        }, 5000);
                    }
                }
            });
        });

    });
  
});
</script>