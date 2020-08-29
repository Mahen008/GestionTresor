<!DOCTYPE html>
<html>
	<head>
		<title>editOR</title>
	</head>
<body>
	<div class="w3-dark">
			<div class="row" class="card-header" style="background-color: #ecefed;">
		  		<button class="w3-button w3-btn w3-xlarge" style="margin-left: 5px;" onclick="w3_open()">☰</button>
		  		<h2 style="color: #111;font-size: 1.5em;"><b>ORDRE DE RECETTE</b></h2>
		  	</div>
		</div>

	<?php include("include/header.php");?>
	<?php include("include/sidebar.php");?>
	<?php include("include/headerApp.php");?>
	<div class="content">
		<div class="card-header" style="background-color: #ecefed; height: 55px;">
            <h2 align="center" style="color: #000;font-size: 1.5em;">MODIFICATION</h2>
        </div>
		<div class="row">
			<div class="col-sm-4" style="margin-left: 400px; margin-top: 0px;">
				<?php if($msg = $this->session->flashdata('message')): ?>
					<div class="btn-primary" style="line-height: 10px;" align="center">
						<?php echo $msg;?>
					</div>
				<?php endif; ?>

				<form method="post" action="<?php echo base_url()?>ORR/updateOR/<?php echo $unOR->NumOrdre;?>" style="margin-top: 10px;">

				<div class="form-group">
					<label>Exercice</label>
					<input type="text" name="Exercic" class="form-control" value="<?php echo set_value('Exercic',$unOR->Exercice);?>">
					<span class="text-danger"><?php echo form_error("Exercic");?></span>
				</div>

				<div class="form-group">
					<label>Type de paiement</label>
			        <input type="text" name="TypePaiemen" class="form-control" value="<?php echo set_value('TypePaiemen',$unOR->TypePaiement);?>">
					<span class="text-danger"><?php echo form_error("TypePaiemen");?></span>
				</div>

				<div class="form-group">
					<label>Devise</label>
				    <input type="text" name="Devis" class="form-control" value="<?php echo set_value('Devis',$unOR->Devise);?>">
					<span class="text-danger"><?php echo form_error("Devis");?></span>
				</div>

				<div class="form-group">
					<label>Taux de devise</label>
				    <input type="text" name="TauxDevis" class="form-control" value="<?php echo set_value('TauxDevis',$unOR->TauxDevise);?>">
					<span class="text-danger"><?php echo form_error("TauxDevis");?></span>
				</div>

                <br>

				<button type="submit" class="btn btn-success btn-block">Modifier</button>
				<a href="<?php echo base_url()?>ORR/indexOR" class="btn btn-outline-danger btn-block">Retour</a>
				</form>
			</div>

		</div>
		<!-- </div> -->
	</div>
	<?php include("include/footer.php");?>
	
</body>
</html>