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
	<div class="w3-dark">
			<div class="row" class="card-header" style="background-color: #ecefed;">
		  		<button class="w3-button w3-btn w3-xlarge" style="margin-left: 5px;" onclick="w3_open()">☰</button>
		  		<h2 style="color: #111;font-size: 1.5em;"><b>EDITION OT</b></h2>
		  	</div>
		</div>

	<?php include("include/header.php");?>
	<?php include("include/sidebar.php");?>
    
	<div class="content" style="width: 1350px;">
	
                <div class="row">
                    <div class="col-sm-5 col-1">

                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-lg">
                            <!-- <button class="btn btn-white">CSV</button> -->
                            <button class="btn btn-outline-secondary" onclick='window.print();'><i class="fa fa-print"></i> PDF</button>
                            <a class="btn btn-outline-danger" href="<?php echo base_url()?>ORR/indexORR"><i class="fa fa-times"></i></a>
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
	            	<h5 style="margin-left: 40px;">Compte N° <strong>1621-05-57</strong> EMPRUNT CONTRACTE AUPRES DE : <strong>FAD</strong></h5>
	            	<h5 style="margin-left: 400px;">CREDIT</h5>
            	</div>
            	<h5 style="margin-left: 120px;">EMISSION N° <strong>3</strong> DU</h5>
        </div>
        <br>
        <table>
        	<tr>
        		<th>Numéros des ordres de recettes</th>
        		<th>Nom de la partie versante et objet du versement</th>
        		<th>Montant</th>
        		<th>Nombre de pièces jointes aux ordres de recettes</th>
        	</tr>
        	<tr>
        		<td></td>
        		<td><center><u>FAD</u></center><br><p>Prise en chage des dépenses payées sur fonds d'emprunt contracté auprès du bailleur FAD suivant Convention du 06/03/15.NI</p></td>
        		<td></td>
        		<td></td>
        	</tr>
        	<tr>
        		<td>4</td>
        		<td><strong>Projet d'Extion du Périmètre de</strong> N°5900150000251<br><strong>Bas-Mangoky (Projet de facilité</strong> Paiement direct<br><strong>d'appui à la transaction)-PEPBM</strong></td>
        		<td>195 344 442.90</td>
        		<td></td>
        	</tr>
        	<tr>
        		<td>5</td>
        		<td><strong>Projet d'Extion du Périmètre de</strong> N°5900150000251<br><strong>Bas-Mangoky (Projet de facilité</strong> Paiement direct<br><strong>d'appui à la transaction)-PEPBM</strong></td>
        		<td>350 268 709.60</td>
        		<td></td>
        	</tr>
        	<tr>
        		<td>6</td>
        		<td><strong>Projet d'Extion du Périmètre de</strong> N°5900150000251<br><strong>Bas-Mangoky (Projet de facilité</strong> Paiement direct<br><strong>d'appui à la transaction)-PEPBM</strong></td>
        		<td>837 634 734.76</td>
        		<td></td>
        	</tr>
        	<tr>
        		<td>7</td>
        		<td><strong>Projet d'Extion du Périmètre de</strong> N°5900150000251<br><strong>Bas-Mangoky (Projet de facilité</strong> Paiement direct<br><strong>d'appui à la transaction)-PEPBM</strong></td>
        		<td>347 025 405.32</td>
        		<td></td>
        	</tr>
        	<tr>
        		<td></td>
        		<td>EMISSION</td>
        		<td>1 730 273 292.58</td>
        		<td></td>
        	</tr>
        	<tr>
        		<td></td>
        		<td>ANTERIEURS</td>
        		<td>2 365 626 212.38</td>
        		<td></td>
        	</tr>
        	<tr>
        		<td></td>
        		<td>CUMUL</td>
        		<td>4 095 899 504.96</td>
        		<td></td>
        	</tr>
        </table>
        <br><br>
        	<div  style="margin-left: 100px">
        		<p> Arrêté le présent bordereau à la somme de :</p>
        		<strong>UN MILLIARD SEPT CENT TRENTE MILLIONS DEUX CENT SOIXANTE-TREIZE<br>MILLE DEUX CENT QUATRE-VINGT-DOUZE ARIARY CINQUANTE-HUITE./~</strong>
        	</div>
        	<br>
        	<center>A ANTANANARIVO ,le</center>
        	<br><br><br>
        </font>
	<?php include("include/footer.php");?>	
	<script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
            } );
         
            table.buttons().container()
                .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
        } );
    </script>		
</body>
</html>