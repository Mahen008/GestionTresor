<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>editPret</title>
</head>

<body>

	<?php include("partials/header.php"); ?>

	 <!-- /#wrapper -->
  	<div class="d-flex" id="wrapper">
		<!-- Sidebar -->
		<?php include("partials/sidebar.php");?>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<?php include("partials/navbar.php");?>

			<!-- start container -->
			<div class="container">
				<!-- debut card-->
				<div class="card">
					<div class="card-header" style="background-color: #ecefed; height: 55px;">
						<h2 align="center" style="color: #000;font-size: 1.5em;">MODIFICATION</h2>
					</div>
					<div class="card-body" >
						<?php if($msg = $this->session->flashdata('message')): ?>
							<div class="btn-primary" style="line-height: 10px;" align="center">
								<?php echo $msg;?>
							</div>
						<?php endif; ?>
						<br>
						<form method="post" action="<?php echo base_url()?>index.php/Pret/updatePret/<?php echo $unPret->id;?>" style="margin-top: 10px;">

						<div class="row">
							<div class="col-lg-4">
								<label>Réference Prêt</label>
								<input type="text" name="re" class="form-control" value="<?php echo set_value('re',$unPret->ref);?>">
								<span class="text-danger"><?php echo form_error("re");?></span>
							</div>

							<div class="col-lg-4">
								<label>Libellé Prêt</label>
								<input type="text" name="libpre" class="form-control" value="<?php echo set_value('libpre',$unPret->libpret);?>">
								<span class="text-danger"><?php echo form_error("libpre");?></span>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<label>Date du prêt</label>
								<input type="date" name="datpre" class="form-control" value="<?php echo set_value('datpre',$unPret->datpret);?>">
								<span class="text-danger"><?php echo form_error("datpre");?></span>
							</div>
							<div class="col-lg-4">
								<label>Bailleur de fond</label>
								<input type="text" name="bailleu" class="form-control" value="<?php echo set_value('bailleu',$unPret->bailleur);?>">
								<span class="text-danger"><?php echo form_error("bailleu");?></span>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<label>Numéro de compte</label>
								<input type="text" name="numcp" class="form-control" value="<?php echo set_value('numcp',$unPret->numcpt);?>">
								<span class="text-danger"><?php echo form_error("numcp");?></span>
							</div>

							<!-- <div class="col-lg-4">
								<label>Numéro informatique</label>
								<input type="text" name="nin" class="form-control" value="<?php echo set_value('nin',$unPret->ninf);?>">
								<span class="text-danger"><?php echo form_error("nin");?></span>
							</div> -->
						</div>
						<br>

						<button type="submit" class="btn btn-success btn-block">Modifier</button>
						<a href="<?php echo base_url()?>Pret/indexPret" class="btn btn-outline-danger btn-block">Retour</a>
						</form>
					</div>
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
