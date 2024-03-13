<?php
	require_once("modele/modele.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>DM_SITE_INTERNET</title>
</head>
<body>
	<header style="background-color: #B4D4FF; color: #fff; padding: 5px; text-align: center;">

	<img class="logo" src="images/logo.jpg" alt="Logo">
	
		<h1>Système de gestion de Medecin</h1>
		<a href="index.php?page=1">
		<img src="images/doctolib.png" height="100" width="100"> </a>
	<a href="index.php?page=2">
		<img src="images/medecin.png" height="100" width="100"> </a>
	<a href="index.php?page=3">
		<img src="images/ordonnance.png" height="100" width="100"> </a>
	<a href="index.php?page=4">
		<img src="images/patient.png" height="100" width="c"> </a>
	<a href="index.php?page=5">
		<img src="images/rdv.png" height="100" width="100"> </a>
		<a href="index.php?page=6">
		<img src="images/medoc.png" height="100" width="100"> </a>
	</header>
<center>
	<br>
	
	<?php
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else {
		$page = 1; 
	}
	switch ($page){
		case 1 : require_once ("controleur/home.php"); break;
		case 2 : require_once ("controleur/gestion_medecin.php"); break;
		case 3 : require_once ("controleur/gestion_ordonnance.php"); break;
		case 4 : require_once ("controleur/gestion_patient.php"); break;
		case 5 : require_once ("controleur/gestion_rdv.php"); break;
		case 6 : require_once ("controleur/gestion_medicament.php"); break;
	}
	?>
</center>
	<?php
		if ($page == 1) {	
	?>
	<footer style="background-color: #B4D4FF; padding: 20px;">
	<footer>
		<div class="footer-content">
			<div class="footer-adress">
				<p>54 quai Charles Pasqua, 92300 Levallois-Perret</p>
			</div>
		<div class="footer-coordinates">
			<p> Coordonnées: 0145763916</p>
		</div>
		<div class="icons">
			<a href="https://www.instagram.com/doctolib/"><i class="fa
			fa-instagram"></i></a>
			<a href="https://www.facebook.com/doctolib/"><i class="fa
			fa-facebook"></i></a>
			<a href="https://twitter.com/doctolib"><i class="fa
			fa-twitter"></i></a>
		</div>
	</footer>
	<?php
	}
	?>
</body>
</html>