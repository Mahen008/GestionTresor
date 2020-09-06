<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Prêt</title>
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
		        <h2 align="center" style="font-size: 1.5em;">LISTE PRET</h2>
		    </div>
            <input type="hidden" class="valueLastInsertId" name="valPret">

            <div class="row mt-3 top">
                <div class="col-sm-3">
                    <button type="button" cols="3" class="btn btn-primary nouveauPret">Nouveau pret</button>
                </div>
            </div>

            <!-- Enregistrement pret -->
            <div class="slidePret mt-2">
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
                                    <button type="submit" class="btn btn-info btnAdd">Enregistrer</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        <!-- fin Enregistrement pret -->
  <br>
  <div class="card-body">
    <div class="container-fluid">
      
      <!-- table liste de pret -->
      <table class="table table-striped table-bordered">
        <thead style="background-color: #333; color: #fff;">
          <tr>
            <th>Id</th>
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
            <tr>
                <td class="valueIdPret"><?php echo $row->id?></td>
                <td><?php echo $row->ref?></td>
                <td><?php echo $row->libpret?></td>
                <td><?php echo $row->dateP;?></td>
                <td><?php echo $row->bailleur?></td>
                <td><?php echo $row->numcpt?></td>
                <td>
                    <button type="button" id="btnDeletePret" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
      </table>   
      <!-- end table liste de pret -->
    </div>
  </div>

<?php include('partials/footer.php');?>
<script type="text/javascript" language="javascript" >
$(document).ready(function(){

    // récupération dernier valeur id pret 
        let valueIdPretToIncrement = $("td.valueIdPret:first").text();
        let lastIdPret = parseInt(valueIdPretToIncrement) + 1
        // alert( lastIdPret );
        $('.valueLastInsertId').val(lastIdPret);

        var last = $('.valueLastInsertId').val();
    // -------------------------------------------------------------------

    $('.nouveauPret').click(function(){
        $('.slidePret').slideToggle('fast');
    });

    // --------------------------------------------------------------------------------------

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
					// alert('add');
                    $('.tbody').prepend(
                        `
                            <td>${last}</td>
                            <td>${response.ref}</td>
                            <td>${response.libpret}</td>
                            <td>${response.datpret}</td>
                            <td>${response.bailleur}</td>
                            <td>${response.numcpt}</td>
                            <td>
                                <a id="#" class="btn btn-danger" href="#" role="button"><i class="fas fa-trash"></i></a>
                            </td>
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

    // -------------------------------------------------------------------------------

    $("#btnDeletePret").on("click",function(){
        alert( $(this).data('id') );
    });

});
</script>