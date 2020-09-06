<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Edition</title>

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
            <h2 align="center" style="font-size: 1.5em;">EDITION OR</h2>
        </div>
  <br>
  <div class="card-body">
    <div class="container-fluid">


      <table class="table table-striped table-bordered" style="font-size: 0.87em; width: 100%;">
        <thead style="background-color: #333; color: #fff;">
          <tr>
            <th>Id</th>
            <th>Numero compte</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($listORR as $list): ?>
          <tr>
            <td><?php echo $list->id;?></td>
              <td><?php echo $list->numcpt;?></td>
              <td>
                <a href="<?php echo base_url("ORR/EditionOR/");?><?php echo $list->id;?>" class="btn btn-primary" style="font-size:1em;"><i class="fas fa-print"></i> Imprimer</a>
              </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>   
    </div>
  </div>

  <?php include('partials/footer.php');?>
