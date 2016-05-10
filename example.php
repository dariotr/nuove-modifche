<?php 
/* ESEMPIO DI PAGINA VUOTA*/

define("INCLUDING", 'TRUE');
include 'config.php';
include(METHODS_PATH . "/avatarupload.php");

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

?>


<!DOCTYPE html>

<head>
  <title> Titolo Pagina | Borsa delle Idee</title>
  <?php include(TEMPLATES_PATH.'/head.php'); //classi bootstrap  ?>
</head>

<body>
<div class="container">
	<?php include (TEMPLATES_PATH.'/navbar.php'); //Navbar ?>

	<div class="row">
    	<div class="col-lg-12">
        	
    	</div>
	</div>	
	
	
</div>	
<?php include (TEMPLATES_PATH.'/footer.php'); //Footer ?>
</body>
