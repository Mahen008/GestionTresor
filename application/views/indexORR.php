<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ordre d'opération de capitale</title>
  <style>
	ul.hasLiAutocompleted{  
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
			 <!-- debut card-->
			 <div class="card">

			 <div class="card-header" style="background-color: #ecefed;height: 55px;">
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">LISTAGE</h2>
	                </div>

	                <!-- debut card body-->
	                <div class="card-body">
	                	<!-- debut container-fluid-->
	                    <div class="container-fluid">

	                <div class="col-sm-8 col-9 text-right m-b-20" style="margin-left: 30%; margin-top: 0px;">
						<input type="text" class="form-control float-right" name="dataFilter" id="compteFilter">
						<div id="listCompte"></div>
                        <a data-toggle="modal" data-target="#exampleModalLong" class="btn btn btn-dark btn-rounded float-right active"><i class="fas fa-plus"></i> Ajouter</a>
                        <a class="btn btn btn-dark btn-rounded float-right active mx-2"><i class="fas fa-search"></i> Rechercher</a>
                    </div>

                    <!-- <div class="col-sm-8 col-9 text-right m-b-20" style="margin-left: 30%; margin-top: 0px;">
                        <a data-toggle="modal" data-target="#exampleModalLong" class="btn btn-dark" style="color: #fff;"><i class="fa fa-plus"></i>ajouter</a>
                    </div> -->

		                 <!-- Modal ajout article -->
		                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		                  <div class="modal-dialog" role="document"><br>
		                    <div class="modal-content">

		                      <div class="modal-header">

		                        <h5 class="modal-title w-100 font-weight-bold text-basik ml-5" id="exampleModalLongTitle" id="exampleModalLongTitle" ><b>NOUVEAU</b></h5>
		                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                          <span aria-hidden="true">&times;</span>
		                        </button>
		                      </div>

		                    <form action="<?php echo base_url()?>ORR/Ajouter" method="post" role="form">
                        	
                        	<div class="modal-body">      				

			                            <div class="row">
			                            	<div class="col-md-6 mb-3">
			                            		<label>Numéro OR</label>
			                            		<input type="text" name="Exercic" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("Exercic");?></span>
			                            	</div>
			                            	<div class="col-md-6 mb-3">
			                            		<label>Numéro ot_or</label>
				                                <input type="text" name="TypePaiemen" class="form-control">
				                                <span class="text-danger"><?php echo form_error("TypePaiemen");?></span>
			                            	</div>
			                            </div>

			                            <div class="row">
			                            	<div class="col-md-6 mb-3">
				                                <label>Exercice</label>
			                            		<input type="text" name="Devis" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("Devis");?></span>
			                            	</div>
			                            	<div class="col-md-6 mb-3">
				                                <label>devise</label>
				                                <input type="text" name="TauxDevis" class="form-control">
				                                <span class="text-danger"><?php echo form_error("TauxDevis");?></span>
			                            	</div>

			                            </div>
			                            <div class="row">
			                            	<div class="col-md-6 mb-3">
				                                <label>Montant devise</label>
			                            		<input type="text" name="Devis" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("Devis");?></span>
			                            	</div>
			                            	<div class="col-md-6 mb-3">
				                                <label>Taux devise</label>
				                                <input type="text" name="TauxDevis" class="form-control">
				                                <span class="text-danger"><?php echo form_error("TauxDevis");?></span>
			                            	</div>

			                            </div>
			                            <div class="row">
			                            	<div class="col-md-6 mb-3">
				                                <label>Mode de payement</label>
												<select list="Devis" type="" name="Devis" class="form-control">		       		
									        		<option value="direct">Payement Direct</option>
									        		<option value="special">Compte Spécial</option>
									        	</select>
									        	<span class="text-danger"><?php echo form_error("Devis");?></span>
			                            	</div>
									        
			                            </div>
			                            <div class="row">
			                            	
			                            </div>

			                            <div class="modal-footer">
											<button type="submit" class="btn btn-success btn-block buttonAdd waves-effect waves-light btn-xs">ENREGISTRER</button>
		                                </div>
	                       			</div>
	                     		</form>
		                    </div>
		                  </div>
		                </div>
		                <!-- fin du modal ajout bon d'entree-->
		                <!-- debut table-->
		                <table class="table table-striped" id="table_datatable" >

		                    <thead style="background-color: #333; color: #fff;">
		                        <tr>
		                        	<th>Numéro de compte</th>
		                            <th>Numéro OR</th>
		                            <th>Numéro ot_or</th>
		                            <th>Exercice</th>
		                            <th>Montant devise</th>
		                            <th>Taux devise</th>
		                            <th>Montant en ariary</th>
		                            <th>Mode de payement</th>
		                            <th>Actions</th>
		                        </tr>
		                    </thead>

		                    <tbody>
		                    	<?php foreach($afficheOROT as $pe):?>
				                        <tr>
				                     
				                            <td><?php echo $pe->numcpt; ?></td>
				                            <td><?php echo $pe->numor; ?></td>
				                            <td><?php echo $pe->numot_or; ?></td>
				                            <td><?php echo $pe->exercice; ?></td>
				                            <td><?php echo $pe->mtordev; ?></td>
				                            <td><?php echo $pe->tauxdevar; ?></td>
				                            <td><?php echo $pe->mtorar; ?></td>
				                            <td><?php echo $pe->modepmt; ?></td>

				                            <td>
				                                <div class="dropdown">
													<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1em;">
													    Action
													</button>
														<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
															<a href="<?php echo base_url()?>ORR/EditionOR/" class="btn btn-outline-dark" role="button" style="font-size: 1em;"><i class="fas fa-eye"></i> Edition OR</a>
															<a href="<?php echo base_url()?>ORR/EditionOT/" class="btn btn-outline-dark" role="button" style="font-size: 1em;"><i class="fas fa-eye"></i> Edition OT</a>
														    <a href="<?php echo base_url()?>ORR/editOR/" class="btn btn-outline-success" role="button" style="font-size: 1em;"><i class="fas fa-edit"></i> Modifier</a>
				                                 			<a href="<?php echo base_url()?>orr/deleteOR/" class="btn btn-outline-danger" role="button" style="font-size:1em;" onclick="return confirm('Voulez-vous vraiment supprimer')"><i class="fa fa-trash"></i> Supprimer</a>
														</div>
														
												</div>
											
											</div>
				                            </td>
				                        </tr>
			                    	<?php endforeach;?>
			                        
	                    	</tbody>

		                </table>
		                <!-- fin du table-->
		            </div>
		            <!-- fin container-fluid-->
	                </div>
	                <!-- fin card body-->
<!-- fin card body-->
</div>
<!-- fin du card-->
      </div>
	  <!-- end container -->
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Menu Toggle Script -->
  <?php include("partials/footer.php"); ?>
  <script>
	$(function(){
		$("#compteFilter").keyup(function(){
			console.log( $(this).val() );
			let valSearch = $(this).val();
			if(valSearch!=""){
				$.ajax({
					url : '<?php echo base_url("ORR/FiltreOrdreOperTres");?>',
					method:"POST",  
                    data:{valSearch:valSearch},  
                    success:function(data)  
                    {  
                        $('#listCompte').fadeIn();  
                        $('#listCompte').html(data);  
                    }
				});
			}
		});

		$(document).on('click', 'li', function(){  
			$('#compteFilter').val($(this).text());  
			$('#listCompte').hide();
		}); 
	});
  </script>								
</body>

</html>
