<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>OR</title>
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
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">ENREGISTREMENT OR</h2>
	                </div>

	                <!-- debut card body-->
	                <div class="card-body">
	                	<!-- debut container-fluid-->
	                    <div class="container-fluid">

						<div class="row">
						    <div class="col">
						    	<a href="<?php echo base_url('ORR/indexORR');?>" class="btn btn-info">Retour</a>
						    </div>
					   </div>

					   <form action="<?php echo base_url("ORR/insert");?>" method="post">

						<div class="row mt-3">
								<div class="col-md-6 mb-3" id="prefetch">
									<label>Numéro de compte</label>
									<input type="text" name="search_box" id="search_box" class="typeahead"/>
								</div>

								<div class="col-md-6 mb-3">
									<label>Numéro OR</label>
									<input type="text" name="numor" class="form-control">
									<span class="text-danger"><?php echo form_error("numor");?></span>
								</div>
						</div>

						<div class="row">
								<div class="col-md-6 mb-3">
									<label>Numéro OT</label>
									<input type="text" name="numot_or" class="form-control">
									<span class="text-danger"><?php echo form_error("numot_or");?></span>
								</div>
								<div class="col-md-6 mb-3">
									<label>Exercice</label>
									<input type="text" name="exercice" class="form-control">
									<span class="text-danger"><?php echo form_error("exercice");?></span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 mb-3">
									<label>Montant devise</label>
									<input type="text" name="mtordev" class="form-control">
									<span class="text-danger"><?php echo form_error("mtordev");?></span>
								</div>
								<div class="col-md-6 mb-3">
									<label>Taux devise</label>
									<input type="text" name="tauxdevar" class="form-control">
									<span class="text-danger"><?php echo form_error("tauxdevar");?></span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 mb-3">
									<label>Montant en ariary</label>
									<input type="text" name="mtorar" class="form-control">
									<span class="text-danger"><?php echo form_error("mtorar");?></span>
								</div>
								<div class="col-md-6 mb-3">
									<label>Mode de payement</label>
									<select name="modepmt" class="form-control">		       		
										<option value="Payement Direct">Payement Direct</option>
									    <option value="Compte Spécial">Compte Spécial</option>
									</select>
									<span class="text-danger"><?php echo form_error("modepmt");?></span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 mb-3">
									<button type="submit" class="btn btn-primary active">Enregistrer</button>
								</div>
							</div>

						</form>

					   <br />
					   <div id="results"></div>
					  </div>
					  <div style="clear:both"></div>
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
	$(document).ready(function(){

		// -------------------------------------------------------------------------------
		var sample_data = new Bloodhound({
			datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
			queryTokenizer: Bloodhound.tokenizers.whitespace,
			prefetch:'<?php echo base_url(); ?>ORR/fetche',
			remote:{
				url:'<?php echo base_url(); ?>ORR/fetche/%QUERY',
				wildcard:'%QUERY'
			}
		});
		

		$('#prefetch .typeahead').typeahead(null,{
			name: 'sample_data',
			display: 'name',
			source:sample_data,
			limit:10,
			templates:{
				suggestion:Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
			}
		});
	});
</script>					
</body>

</html>
