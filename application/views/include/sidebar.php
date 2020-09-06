<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
    
	      <a href="<?php echo base_url("Pret/indexPret");?>" class="list-group-item list-group-item-action bg-light">PRET</a>
	      <a href="<?php echo base_url("Devise/indexDev");?>" class="list-group-item list-group-item-action bg-light">DEVISE</a>
	      <a href="<?php echo base_url("ORR/indexORR");?>" class="list-group-item list-group-item-action bg-light">OR</a>
	    
</div>

<!-- Page Content -->

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html> 
