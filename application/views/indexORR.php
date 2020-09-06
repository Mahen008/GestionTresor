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
		        <h2 align="center" style="font-size: 1.5em;">LISTE OR</h2>
		    </div>
  <br>
  <div class="card-body">
    <div class="container-fluid">
    </div>
    
      <table class="table table-striped table-bordered" width="100%">
		<col style="width: 15%">
		<col style="width: 10%">
		<col style="width: 10%">
		<col style="width: 10%">
		<col style="width: 15%">
		<col style="width: 15%">
		<col style="width: 15%">
		<col style="width: 15%">
        <thead style="background-color: #333; color: #fff;">
          <tr>
            <th>Numéro de compte</th>
			<th>Numéro OR</th>
			<th>Numéro OT</th>
			<th>Exercice</th>
			<th>Montant devise</th>
			<th>Taux devise</th>
			<th>Montant en ariary</th>
			<th>Mode de paiement</th>

            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>   
    </div>
  </div>

<?php include('partials/footer.php');?>
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  
  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>ORR/load_data",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
        html += '<td id="numcpt" contenteditable placeholder="Entrer Numéro de compte"></td>';
        html += '<td id="numor" contenteditable placeholder="Entrer le numéro OR"></td>';
        html += '<td id="numot_or" contenteditable></td>';
        html += '<td id="exercice" contenteditable></td>';
        html += '<td id="mtordev" contenteditable></td>';
        html += '<td id="tauxdevar" contenteditable></td>';
        html += '<td id="mtorar" contenteditable></td>';
        html += '<td id="modepmt" contenteditable></td>';
        html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
        for(var count = 0; count < data.length; count++)
        {
          html += '<tr>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="numcpt" contenteditable>'+data[count].numcpt+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="numor" contenteditable>'+data[count].numor+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="numot_or" contenteditable>'+data[count].numot_or+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="exercice" contenteditable>'+data[count].exercice+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="mtordev" contenteditable>'+data[count].mtordev+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="tauxdevar" contenteditable>'+data[count].tauxdevar+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="mtorar" contenteditable>'+data[count].mtorar+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="modepmt" contenteditable>'+data[count].modepmt+'</td>';
          html += '<td><button type="button" name="delete_btn" id="'+data[count].id+'" class="btn btn-danger btn_delete"><i class="fas fa-trash"></i></button></td></tr>';
          html += `</tr>`;
        }
        $('tbody').html(html);
      }
    });
  }

  load_data();

  $(document).on('click', '#btn_add', function(){
    var numcpt = $('#numcpt').text();
    var numor = $('#numor').text();
    var numot_or = $('#numot_or').text();
    var exercice = $('#exercice').text();
    var mtordev = $('#mtordev').text();
    var tauxdevar = $('#tauxdevar').text();
    var mtorar = $('#mtorar').text();
    var modepmt = $('#modepmt').text();
    if(numcpt == '')
    {
      alert('Entrer Numéro de compte');
      return false;
    }
    if(numor == '')
    {
      alert('Entrer le numéro OR');
      return false;
    }
    $.ajax({
      url:"<?php echo base_url(); ?>ORR/insert",
      method:"POST",
      data:{numcpt:numcpt, numor:numor, numot_or:numot_or, exercice:exercice, mtordev:mtordev, tauxdevar:tauxdevar, mtorar:mtorar, modepmt:modepmt},
      success:function(data){
        load_data();
      }
    })
  });

  

  $(document).on('blur', '.table_data', function(){
    var id = $(this).data('row_id');
    var table_column = $(this).data('column_name');
    var value = $(this).text();
    $.ajax({
      url:"<?php echo base_url(); ?>ORR/update",
      method:"POST",
      data:{id:id, table_column:table_column, value:value},
      success:function(data)
      {
        load_data();
      }
    })
  });

  $(document).on('click', '.btn_delete', function(){
    var id = $(this).attr('id');
    if(confirm("Voulez-vous vraiment supprimer?"))
    {
      $.ajax({
        url:"<?php echo base_url(); ?>ORR/delete",
        method:"POST",
        data:{id:id},
        success:function(data){
          load_data();
        }
      })
    }
  });


  // -------------------------------------------------------------------------------
  load_data_research();

  function load_data_research(query)
  {
    $.ajax({
    url:"<?php echo base_url(); ?>ORR/fetch",
    method:"POST",
    data:{query:query},
    success:function(data){
      $('#result').html(data);
    }
    })
  }

  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
    load_data_research(search);
    }
    else
    {
    load_data_research();
    }
  });

});
</script>
