<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Devise</title>

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
            <h2 align="center" style="font-size: 1.5em;">LISTE DEVISE</h2>
        </div>
  <br>
  <div class="card-body">
    <div class="container-fluid">
      
      <table class="table table-striped table-bordered" style="font-size: 0.87em; width: 100%;">
        <thead style="background-color: #333; color: #fff;">
          <tr>
            <th>Numéro de compte</th>
            <th>Devise</th>
            <th>Numéro informatique</th>
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
      url:"<?php echo base_url(); ?>Devise/load_data",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
        html += '<td id="numcpt" contenteditable placeholder="Entrer Numéro de compte"></td>';
        html += '<td id="devise" contenteditable placeholder="Entrer le devise"></td>';
        html += '<td id="ninf" contenteditable></td>';
        html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
        for(var count = 0; count < data.length; count++)
        {
          html += '<tr>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="numcpt" contenteditable>'+data[count].numcpt+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="devise" contenteditable>'+data[count].devise+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="ninf" contenteditable>'+data[count].ninf+'</td>';
          html += '<td><button type="button" name="delete_btn" id="'+data[count].id+'" class="btn btn-danger btn_delete"><i class="fas fa-trash"></i></button></td></tr>';
        }
        $('tbody').html(html);
      }
    });
  }

  load_data();

  $(document).on('click', '#btn_add', function(){
    var numcpt = $('#numcpt').text();
    var devise = $('#devise').text();
    var ninf = $('#ninf').text();
    if(numcpt == '')
    {
      alert('Entrer Numéro de compte');
      return false;
    }
    if(devise == '')
    {
      alert('Entrer le devise');
      return false;
    }
    $.ajax({
      url:"<?php echo base_url(); ?>Devise/insert",
      method:"POST",
      data:{numcpt:numcpt, devise:devise, ninf:ninf},
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
      url:"<?php echo base_url(); ?>Devise/update",
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
        url:"<?php echo base_url(); ?>Devise/delete",
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