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
  <br>
  <div class="card-body">
    <div class="container-fluid">
      
      <table class="table table-striped table-bordered">
		<col style="width: 16%">
		<col style="width: 31%">
		<col style="width: 14%">
		<col style="width: 14%">
		<col style="width: 15%">
		<col style="width: 10%">
        <thead style="background-color: #333; color: #fff;">
          <tr>
            <th>Id</th>
            <th>Réference Prêt</th>
			<th>Libellé Prêt</th>
			<th>Date du prêt</th>
			<th>Bailleur de fond</th>
			<th>Numéro de compte</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>   
    </div>
  </div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  
  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>Pret/load_data",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
        html += '<td id="ref" contenteditable placeholder="Entrer Numéro de réference"></td>';
        html += '<td id="libpret" contenteditable placeholder="Entrer le libellé"></td>';
        html += '<td id="datpret" contenteditable></td>';
        html += '<td id="bailleur" contenteditable></td>';
        html += '<td id="numcpt" contenteditable></td>';
        html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
        for(var count = 0; count < data.length; count++)
        {
          html += '<tr>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="ref" contenteditable>'+data[count].ref+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="libpret" contenteditable>'+data[count].libpret+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="datpret" contenteditable>'+data[count].datpret+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="bailleur" contenteditable>'+data[count].bailleur+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="numcpt" contenteditable>'+data[count].numcpt+'</td>';
          html += '<td><button type="button" name="delete_btn" id="'+data[count].id+'" class="btn btn-danger btn_delete"><i class="fas fa-trash"></i></button></td></tr>';
        }
        $('tbody').html(html);
      }
    });
  }

  load_data();

  $(document).on('click', '#btn_add', function(){
    var ref = $('#ref').text();
    var libpret = $('#libpret').text();
    var datpret = $('#datpret').text();
    var bailleur = $('#bailleur').text();
    var numcpt = $('#numcpt').text();
    if(ref == '')
    {
      alert('Entrer Numéro de réference');
      return false;
    }
    if(libpret == '')
    {
      alert('Entrer le libellé');
      return false;
    }
    $.ajax({
      url:"<?php echo base_url(); ?>Pret/insert",
      method:"POST",
      data:{ref:ref, libpret:libpret, datpret:datpret, bailleur:bailleur, numcpt:numcpt},
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
      url:"<?php echo base_url(); ?>Pret/update",
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
        url:"<?php echo base_url(); ?>Pret/delete",
        method:"POST",
        data:{id:id},
        success:function(data){
          load_data();
        }
      })
    }
  });
  
});
</script>
<?php include('partials/footer.php');?>