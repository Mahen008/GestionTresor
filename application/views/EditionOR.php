<!DOCTYPE html>
<html>
	<head>
		<title>Edition OR</title>
	</head>
<body>
	<div class="w3-dark">
			<div class="row" class="card-header" style="background-color: #ecefed;">
		  		<button class="w3-button w3-btn w3-xlarge" style="margin-left: 5px;" onclick="w3_open()">☰</button>
		  		<h2 style="color: #111;font-size: 1.5em;"><b>EDITION OR</b></h2>
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
            <font face="Courier New"> 
            <div class="col-md-10">
                <div class="card-box">
                    <div class="row" style="">
                        <div class="col-sm-4 m-b-20">
                            <center>
                                <ul class="list-unstyled mb-0">
                                    <li>REPUBLIQUE <br> DE MADAGASCAR</li>
                                    <li>______</li>
                                    <li>FARITANY <br> d ............</li>
                                    <li>______</li>
                                    <li>N°  1</li>
                                    <li>(+261) 34 17 612 27</li>
                                </ul>
                        </center>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <center>
                                <ul class="list-unstyled mb-0">
                                    <li>EXERCICE 2020</li>
                                    <li>______</li>
                                    <li>OPERATION TRESORERIE</li>
                                    <li>______</li>
                                    <li><h4><strong><b>ORDRE DE RECETTE</b></strong></h4></li>
                                	<li>AU COMPTE: N°1621-08-150</li>
                                	<br>
                                	<li>EMPRUNT CONTRACTE AUPRES DE CHINE SUIVANT LA CONVENTION DU 14/06/19</li>
                                    <br><br>
                                    <li>________</li>
                                </ul>
                            </center>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <center>
                                <ul class="list-unstyled mb-0">
                                    <li>Modèle n°37</li>
                                    <li>______</li>
                                    <li>Art: <span>130</span></li>
                                    <li>de l'instruction</li>
                                    <li>du 20 décembre 2020</span></li>
                                    <li>______</li>
                                </ul>
                            </center>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                     <div class="row">
                        <center>
                            <p> M. le <strong>AGENT COMPTABLE CENTRAL DU TRESOR ET DE LA DETTE PUBLIQUE</strong><br> est invité à recevoir de M <b>CHINE</b>la somme de <br> <b>(Ar.112 704 782 139.78) <br>CENT DOUZE MILLIARDS SEPT CENT QUATRE MILLIONS SEPT CENT QUATRE-VINGT-DEUX MILLE CENT TRENTE-NEUF ARIARY SOIXANTE-DIX-HUIT./~</b> 
                            </p>
                        </center>
                            <p style="margin-left: 40px;">pour les motifs ci-après :
                            </p>
                    </div>

                    	<table style="margin-left: 120px;">
                            <br>
                            <tbody>
                                <tr>
                                    <td>Prise en charge des dépenses payées sur <br>fonds d'emprunt contracté auprès du <br>bailleur CHINE suivant Convention du <br>14/06/19. NI 00137300 <span class="float-right"></span></td>
                                </tr>
                                <tr>
                                    <td>Paiement direct<strong><br> N° GCL NO. (2019) 5</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Upgrading and Rehabilitation of the National <br>Road SA linking Ambilobe and Vohemer Project <br> (RNSA)</strong> <span class="float-right"></span></td>
                                </tr>
                                <tr>
                                    <td>devise      montant devise       taux<span class="float-right"></span></td>
                                </tr>
                                <tr>
                                    <td>CNY         219 359 625.800   X   513.790=<span class="float-right"></td>
                                    <td style=" border: solid black; width: 400px;height: 70px;"><center><strong>112 704 782 139.78</strong></center></span></td>
                                </tr>
                            </tbody>
                                    
                        </table>
                        
                        <center>
                            <br><br>
                            <p>A ANTANANARIVO, le</p>
                        </center>

                    </div>       
                    
                </div>
            </div>
                
            </div>
           </font>
        </div>

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