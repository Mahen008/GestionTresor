<!DOCTYPE html>
<html>
	<head>
	
	</head>
<body>
	
	<?php include("include/header.php");?>
	<?php include("include/sidebar.php");?>
    <style>
        #police{
            font-weight: normal;
        }
        ul.list-font{
            font-size : 11px;
        }
    </style>
    
	<div class="content" style="width: 1350px;">
	
                <div class="row">
                    <div class="col-sm-5 col-1">

                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-lg">
                            <!-- <button class="btn btn-white">CSV</button> -->
                            <button class="btn btn-outline-secondary" onclick='window.print();'><i class="fa fa-print"></i> PDF</button>
                            <a class="btn btn-outline-danger" href="<?php echo base_url()?>ORR/indexEdition"><i class="fa fa-times"></i></a>
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
                                </ul>
                        </center>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <center>
                                <ul class="list-unstyled mb-0">
                                    <li>EXERCICE <span name="exercice"><?php echo set_value('exercice',$editionOROT->exercice);?></span></li>
                                    <li>______</li>
                                    <li>OPERATION TRESORERIE</li>
                                    <li>______</li>
                                    <li><h4><strong><b>ORDRE DE RECETTE</b></strong></h4></li>
                                	<li>AU COMPTE: N°<span name="numcpt"><?php echo set_value('numcpt',$editionOROT->numcpt);?></span></li>
                                    <li>NI: <span name="id"><?php echo set_value('id',$editionOROT->id);?></span></li>
                                	<br>
                                	<li>EMPRUNT CONTRACTE AUPRES DE  <span name="bailleur"><?php echo set_value('bailleur',$editionOROT->bailleur);?></span> SUIVANT LA CONVENTION DU <span name="datpret"><?php echo set_value('datpret',$editionOROT->datpret);?></span></li>
                                    <br><br>
                                    <li>________</li>
                                </ul>
                            </center>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <center>
                                <ul class="list-unstyled mb-0 list-font">
                                    <li>Modèle n°<span name="ninf"><?php echo set_value('ninf',$editionOROT->ninf);?></span></li>
                                    <li>______</li>
                                    <li>Art: <span>130</span></li>
                                    <li>de l'instruction</li>
                                    <li>du <span name="today"><?php echo set_value('today',$editionOROT->today);?></li>
                                    <li>______</li>
                                </ul>
                            </center>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                     <div class="row" style="margin-left: 90px;">
                        
                            <p> M. l' <strong>AGENT COMPTABLE CENTRAL DU TRESOR ET DE LA DETTE PUBLIQUE</strong> est invité à recevoir de M <b><span name="bailleur"><?php echo set_value('bailleur',$editionOROT->bailleur);?></span></b> la somme <br> de <b>(Ar.<span name="montant"><?php echo set_value('montant',$editionOROT->mtordev * $editionOROT->tauxdevar);?></span>) <br><span class="montantEnLettre"></span>/~</b> 
                            </p>
                        
                            <p style="margin-left: 40px;">pour les motifs ci-après :
                            </p>
                    </div>

                    	<table style="margin-left: 90px;">
                            <br>
                            <tbody>
                                <tr>
                                    <td>Prise en charge des dépenses payées sur <br>fonds d'emprunt contracté auprès du <br>bailleur <span name="bailleur"><?php echo set_value('bailleur',$editionOROT->bailleur);?></span> suivant Convention du <br><span name="datpret"><?php echo set_value('datpret',$editionOROT->datpret);?></span>. <span class="float-right"></span></td>
                                </tr>
                                <tr>
                                    <td><span name="modepmt"><?php echo set_value('modepmt',$editionOROT->modepmt);?></span><strong><br> N° GCL NO. (2019) 5</strong></td>
                                </tr>
                                <tr>
                                    <td><strong><span name="libpret"><?php echo set_value('libpret',$editionOROT->libpret);?></span></strong> <span class="float-right"></span></td>
                                </tr>
                                <tr>
                                    <td>devise      montant devise       taux<span class="float-right"></span></td>
                                </tr>
                                <tr>
                                    <td>CNY        <span name="mtordev"><?php echo set_value('mtordev',$editionOROT->mtordev);?></span>  X   <span name="tauxdevar"><?php echo set_value('tauxdevar',$editionOROT->tauxdevar);?></span> =<span class="float-right"></td>
                                    <td style=" border: solid black; width: 400px;height: 70px;"><center><strong><span name="montants"><?php echo set_value('montants',($editionOROT->mtordev * $editionOROT->tauxdevar));?></span></strong></center></span></td>
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
    <script src="<?php echo base_url("assets/js/numberToWords.min.js")?>"></script>
	<script type="text/javascript">
        $(document).ready(function() {

            let montant = $('span[name=montant]').text();
            $('.montantEnLettre').text(numberToWords.toWords(montant));

            // let formatter = new Int({
            //     style : 'currency'
            // });

            // formatter.format($('span[name=montants]'));


            // var table = $('#example').DataTable( {
            //     lengthChange: false,
            //     buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
            // } );
         
            // table.buttons().container()
            //     .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
        });
    </script>		
</body>
</html>