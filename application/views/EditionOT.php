<!DOCTYPE html>
<html>
	<head>
		<title>Edition OT</title>
	</head>
<body>
	<style>
		table {
		  width:100%;
		}
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 15px;
		  text-align: left;
		}
		
	</style>
	<!-- <div>
		<div class="row" class="card-header" style="background-color: #ecefed;">
		  	<h2 style="color: #111;font-size: 1.5em;"><b>EDITION OT</b></h2>
		</div>
	</div> -->

	<?php include("partials/header.php");?>
    
	<div class="content" style="width: 1350px;">
	
                <div class="row">
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-lg">
                            <!-- <button class="btn btn-white">CSV</button> -->
                            <button class="btn btn-outline-secondary" onclick='window.print();'><i class="fa fa-print"></i> PDF</button>
                            <a class="btn btn-outline-danger" href="<?php echo base_url()?>ORR/indexOR"><i class="fa fa-times"></i></a>
                            <!-- <button class="btn btn-white"> Print</button> -->
                        </div>
                    </div>
                </div>
                <br>

        <div>
        <font face="Kepler Std Caption">
        <div>
            	<center><h1><u>OPERATION DE TRESORIE</u></h1></center>
            	<div class="row">
	            	<h5 style="margin-left: 40px;">Compte N° <strong><span name="bailleur"><?php echo set_value('numcpt',$editionOROT->numcpt);?></span></strong> EMPRUNT CONTRACTE AUPRES DE : <strong><span name="bailleur"><?php echo set_value('bailleur',$editionOROT->bailleur);?></span></strong></h5>
	            	<h5 style="margin-left: 400px;">CREDIT</h5>
            	</div>
            	<h5 style="margin-left: 120px;">EMISSION N° <strong><span name="numEmission"><?php echo set_value('numEmission',$editionOROT->numEmission);?></span></strong> DU</h5>
        </div>
        <br>
        <table style="width: 90%;">
            <col style="width: 20%">
            <col style="width: 50%">
            <col style="width: 10%">
            <col style="width: 10%">
        	<tr>
        		<th>Numéros des ordres de recettes</th>
        		<th>Nom de la partie versante et objet du versement</th>
        		<th>Montant</th>
        		<th>Nombre de pièces jointes aux ordres de recettes</th>
        	</tr>
        	<tr>
        		<td></td>
        		<td><center><u><strong><span name="bailleur"><?php echo set_value('bailleur',$editionOROT->bailleur);?></span></strong></u></center><br><p>Prise en chage des dépenses payées sur fonds d'emprunt contracté auprès du bailleur <strong><span name="bailleur"><?php echo set_value('bailleur',$editionOROT->bailleur);?></span></strong> suivant Convention du 06/03/15.NI</p></td>
        		<td></td>
        		<td></td>
        	</tr>
			<?php //$i=4; ?>
			<?php foreach($editionOROTs as $row):?>
				<?php $i = $row->id; ?>
			<?php endforeach; ?>

			<?php foreach($editionOROTs as $row):?>
				<tr>
					<td><center><?php echo $i++;?></center></td>
					<td><strong><?php echo $row->libpret; ?></strong>   N° <strong><?php echo $row->ref; ?></strong>  <?php echo $row->modepmt; ?> </td>
					<td><?php echo $row->mtordev*$row->tauxdevar; ?></td>
					<td></td>
				</tr>
			<?php endforeach; ?>
        	<tr>
        		<td></td>
        		<td class="text-right"><strong>EMISSION</strong></td>
        		<td>
					<?php foreach($editionOROTss as $row):?>
						<?php echo $row->emission;?>
					<?php endforeach; ?>
				</td>
        		<td></td>
        	</tr>

			<?php $antérieur = (float)2365626212.38; ?>
			
        	<tr>
        		<td></td>
        		<td class="text-right"><strong>ANTERIEURS</strong></td>
        		<td><?php echo $antérieur; ?></td>
        		<td></td>
        	</tr>
        	<tr>

        		<td></td>
        		<td class="text-right"><strong>CUMUL</strong></td>
				<?php foreach($editionOROTss as $row):?>
        			<td class="cumul"><?php echo $row->emission + $antérieur ;?></td>
				<?php endforeach; ?>
        		<td></td>
        	</tr>

        </table>
        <br><br>
        	<div  style="margin-left: 100px">
        		<p> Arrêté le présent bordereau à la somme de :</p>
        		<strong><span class="somme"></span>./~</strong>
        	</div>
        	<br>
        	<center>A ANTANANARIVO ,le</center>
        	<br><br><br>
        </font>
	<?php include("partials/footer.php");?>

	<script src="<?php echo base_url("assets/js/numberToWords.min.js")?>"></script>	
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">
        $(document).ready(function() {
			let sumInLetter = numberToWords.toWords($('.cumul').text());
			// alert(sumInLetter);
			$(".somme").text(sumInLetter).css('text-transform','uppercase');
			let somme = $(".somme").text();
		});
    </script>	
</body>
</html>