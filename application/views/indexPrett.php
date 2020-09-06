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

<!-- debut card body-->
<div class="card-body">
	<!-- debut container-fluid-->
	<div class="container-fluid">
		
<div class="col-sm-8 col-9 text-right m-b-20" style="margin-left: 30%;">
	<a data-toggle="modal" data-target="#exampleModalLong" class="btn btn btn-dark btn-rounded float-right active" style="color: #fff;"><i class="fa fa-plus"></i>ajouter</a>
</div>

	 <!-- Modal ajout article -->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document"><br>
		<div class="modal-content">

		  <div class="modal-header">

			<h5 class="modal-title w-100 font-weight-bold text-basik ml-5" id="exampleModalLongTitle" ><b>NOUVEAU</b></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>

		<form action="<?php echo base_url()?>Pret/Ajouter" method="post" role="form">
		
		<div class="modal-body">

					<div class="row">
						<div class="col-md-6 mb-3">
							<label>Réference Prêt</label>
							<input type="text" name="re" class="form-control">
							<span class="text-danger"><?php echo form_error("re");?></span>
						</div>
						<div class="col-md-6 mb-3">
							<label>Libellé Prêt</label>
							<input type="text" name="libpre" class="form-control">
							<span class="text-danger"><?php echo form_error("libpre");?></span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<label>Date du prêt</label>
							<input type="date" name="datpre" class="form-control">
							<span class="text-danger"><?php echo form_error("datpre");?></span>
						</div>
						<div class="col-md-6 mb-3">
							<label>Bailleur de fond</label>
							<input type="text" name="bailleu" class="form-control">
							<span class="text-danger"><?php echo form_error("bailleu");?></span>
						</div>
					</div>

					<div class="row">

						<div class="col-md-6 mb-3">
							<label>Numéro de compte</label>
							<input type="text" name="numcp" class="form-control">
							<span class="text-danger"><?php echo form_error("numcp");?></span>
						</div>

						<div class="col-md-6 mb-3">
							<label>Numéro informatique</label>
							<input type="text" name="nin" class="form-control">
							<span class="text-danger"><?php echo form_error("nin");?></span>
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
	<!-- fin du modal ajout-->
	<br>
	<!-- debut table-->
	<table class="table table-striped table-bordered" style="font-size: 0.87em; width: 100%;">
		<col style="width: 16%">
		<col style="width: 31%">
		<col style="width: 14%">
		<col style="width: 14%">
		<col style="width: 15%">
		<col style="width: 10%">
		<thead style="background-color: #333; color: #fff;">
			<tr>
				<th>Réference Prêt</th>
				<th>Libellé Prêt</th>
				<th>Date du prêt</th>
				<th>Bailleur de fond</th>
				<th>Numéro de compte</th>
				
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>

				
				<?php foreach($affichpret as $pe):?>
					<tr>
				 
						<td><?php echo $pe->ref; ?></td>
						<td><?php echo $pe->libpret; ?></td>
						<td><?php echo $pe->datpret; ?></td>
						<td><?php echo $pe->bailleur; ?></td>
						<td><?php echo $pe->numcpt; ?></td>

						<td>
							<div class="dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1em;">
									Action
								</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										
										<a href="<?php echo base_url()?>Pret/editPret/<?php echo $pe->id; ?>" class="btn btn-outline-success" role="button" style="font-size: 1em;"><i class="fas fa-edit"></i> Modifier</a>
										 <a href="<?php echo base_url()?>index.php/Pret/deletePret/<?php echo $pe->id; ?>" class="btn btn-outline-danger" role="button" style="font-size:1em;" onclick="return confirm('Voulez-vous vraiment supprimer')"><i class="fas fa-trash"></i> Supprimer</a>
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

</body>

</html>
