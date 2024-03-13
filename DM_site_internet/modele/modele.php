<?php
	/*
	dans ce fichier, on réalise toutes les fonctions de connexion à la BDD, deconnexion de la BDD et exécution de l'ensemble des requetes sur les tables de la BDD : insert, delete, update, select.
	*/

	function connexion (){
		$connexion =mysqli_connect("localhost:3606","root","","Dm_site_internet");
		if ($connexion == null){
			echo "Erreur de connexion au serveur Mysql.";
		}
		return $connexion;
	}
	function deconnexion ($connexion){
		mysqli_close($connexion);
	}
	/***************** Gestion des patients *******/
	function insertPatient ($tab){
		$requete = "insert into patient values (null, '"
		.$tab['nom']."','"
		.$tab['prenom']."','"
		.$tab['adresse']."','"
        .$tab['telephone']."','"
        .$tab['email']."','"
		.$tab['age']."' ) ; ";

		$con = connexion (); //appel de la connexion 
		mysqli_query($con, $requete); //execution de la requete
		deconnexion($con); //deconnexion de la base de données
	}
	function selectAllPatients (){
		$requete ="select * from patient ; ";
		$con = connexion ();
		$lespatients = mysqli_query($con, $requete);
		deconnexion($con);
		return $lespatients;
	}
	function deletePatient ($idpatient){
		$requete ="delete from patient where idpatient=".$idpatient;
		$con = connexion(); 
		mysqli_query($con, $requete); 
		deconnexion ($con); 
	}
	function updatePatient ($tab){
		$requete="update patient set nom='"
        .$tab['nom']  . "' , prenom='"
        .$tab['prenom']  . "' , adresse='"
        .$tab['adresse']  . "' , telephone='"
		.$tab['telephone']  . "' , email='"
		.$tab['email'] . "' , age='"
		.$tab['age']   . "' where idpatient="
		.$tab['idpatient'];
		echo $requete ;
		$con = connexion(); 
		mysqli_query($con, $requete); 
		deconnexion ($con); 
	}
	function selectWherePatients ($idpatient){
		$requete="select * from patient where idpatient=".$idpatient;

		$con = connexion(); 
		$resultats = mysqli_query($con, $requete);
		$lepatient = mysqli_fetch_assoc($resultats) ;
		deconnexion ($con);
		return $lepatient ;
	}
	/**************** Gestion des RDV *********/ 
	function insertRDV ($tab){
		$requete = "insert into rdv values (null, '"
		.$tab['daterdv']."','"
		.$tab['heure']."','"
		.$tab['adresse']."' ) ; ";

		$con = connexion (); //appel de la connexion 
		mysqli_query($con, $requete); //execution de la requete
		deconnexion($con); //deconnexion de la base de données
	}
	function selectAllRDV (){
		$requete ="select * from rdv ; ";
		$con = connexion ();
		$lesRDV = mysqli_query($con, $requete);
		deconnexion($con);
		return $lesRDV;
	}
	function deleteRDV ($idrdv){
		$requete ="delete from rdv where idrdv=".$idrdv;
		$con = connexion(); 
		mysqli_query($con, $requete); 
		deconnexion ($con); 
	}
	function updateRDV ($tab){
		$requete="update rdv set daterdv='"
        .$tab['daterdv']  . "' , heure='"
        .$tab['heure']  . "' , adresse='"
		.$tab['adresse']   . "' where idrdv="
		.$tab['idrdv'];
		echo $requete ;
		$con = connexion(); 
		mysqli_query($con, $requete); 
		deconnexion ($con); 
	}
	function selectWhereRDV ($idrdv){
		$requete="select * from rdv where idrdv=".$idrdv;

		$con = connexion(); 
		$resultats = mysqli_query($con, $requete);
		$leRDV = mysqli_fetch_assoc($resultats) ;
		deconnexion ($con);
		return $leRDV ;
	}
	/*********** Gestion Medecin ******/
	function insertMedecin ($tab){
		$requete = "insert into medecin values (null, '"
		.$tab['nom']."','"
		.$tab['prenom']."','"
		.$tab['adresse']."','"
        .$tab['telephone']."','"
        .$tab['specialite']."','"
		.$tab['email']."' ) ; ";

		$con = connexion (); //appel de la connexion 
		mysqli_query($con, $requete); //execution de la requete
		deconnexion($con); //deconnexion de la base de données
	}
	function selectAllMedecins (){
		$requete ="select * from medecin ; ";
		$con = connexion ();
		$lesMedecins = mysqli_query($con, $requete);
		deconnexion($con);
		return $lesMedecins;
	}
	function deleteMedecin ($idmedecin){
		$requete ="delete from medecin where idmedecin=".$idmedecin;
		$con = connexion(); 
		mysqli_query($con, $requete); 
		deconnexion ($con); 
	}
	function updateMedecin ($tab){
		$requete="update medecin set nom='"
        .$tab['nom']  . "' , prenom='"
        .$tab['prenom']  . "' , adresse='"
        .$tab['adresse']  . "' , telephone='"
		.$tab['telephone']  . "' , specialite='"
		.$tab['specialite'] . "' , email='"
		.$tab['email']   . "' where idmedecin="
		.$tab['idmedecin'];
		
		echo $requete ;
		$con = connexion(); 
		mysqli_query($con, $requete); 
		deconnexion ($con); 
	}
	function selectWhereMedecin ($idmedecin){
		$requete="select * from medecin where idmedecin=".$idmedecin;

		$con = connexion(); 
		$resultats = mysqli_query($con, $requete);
		$leMedecin = mysqli_fetch_assoc($resultats) ;
		deconnexion ($con);
		return $leMedecin ;
	}
/*********** Gestion Ordonnance ******/
function insertOrdonnance ($tab){
	$requete = "insert into ordonnance values (null, '"
	.$tab['libelle']."','"
	.$tab['nommedecin']."','"
	.$tab['daterenouvellement']."','"
	.$tab['periodeprise']."','"
	.$tab['recurrence']."' ) ; ";

	$con = connexion (); //appel de la connexion 
	mysqli_query($con, $requete); //execution de la requete
	deconnexion($con); //deconnexion de la base de données
}
function selectAllOrdonnances (){
	$requete ="select * from ordonnance ; ";
	$con = connexion ();
	$lesOrdonnances = mysqli_query($con, $requete);
	deconnexion($con);
	return $lesOrdonnances;
}
function deleteOrdonnance ($idordonnance){
	$requete ="delete from ordonnance where idordonnance=".$idordonnance;
	$con = connexion(); 
	mysqli_query($con, $requete); 
	deconnexion ($con); 
}
function updateOrdonnance ($tab){
	$requete="update ordonnance set libelle='"
	.$tab['libelle']  . "' , nommedecin='"
	.$tab['nommedecin']  . "' , daterenouvellement='"
	.$tab['daterenouvellement']  . "' , periodeprise='"
	.$tab['periodeprise']  . "' , recurrence='"
	.$tab['recurrence']   . "' where idordonnance="
	.$tab['idordonnance'];
	echo $requete ;
	$con = connexion(); 
	mysqli_query($con, $requete); 
	deconnexion ($con); 
}
function selectWhereOrdonnance ($idordonnance){
	$requete="select * from ordonnance where idordonnance=".$idordonnance;

	$con = connexion(); 
	$resultats = mysqli_query($con, $requete);
	$uneOrdonnance = mysqli_fetch_assoc($resultats) ;
	deconnexion ($con);
	return $uneOrdonnance ;
}
/*********** Gestion Medicament ******/
function insertMedicament ($tab){
	$requete = "insert into medicament values (null, '"
	.$tab['nom']."','"
	.$tab['utilisation']."','"
	.$tab['physiologie']."' ) ; ";

	$con = connexion (); //appel de la connexion 
	mysqli_query($con, $requete); //execution de la requete
	deconnexion($con); //deconnexion de la base de données
}
function selectAllMedicaments (){
	$requete ="select * from medicament ; ";
	$con = connexion ();
	$lesMedicaments = mysqli_query($con, $requete);
	deconnexion($con);
	return $lesMedicaments;
}
function deleteMedicament ($idmedicament){
	$requete ="delete from medicament where idmedicament=".$idmedicament;
	$con = connexion(); 
	mysqli_query($con, $requete); 
	deconnexion ($con); 
}
function updateMedicament ($tab){
	$requete="update medicament set nom='"
	.$tab['nom']  . "' , utilisation='"
	.$tab['utilisation']  . "' , physiologie='"
	.$tab['physiologie']   . "' where idmedicament="
	.$tab['idmedicament'];
	echo $requete ;
	$con = connexion(); 
	mysqli_query($con, $requete); 
	deconnexion ($con); 
}
function selectWhereMedicament ($idmedicament){
	$requete="select * from medicament where idmedicament=".$idmedicament;

	$con = connexion(); 
	$resultats = mysqli_query($con, $requete);
	$leMedicament = mysqli_fetch_assoc($resultats) ;
	deconnexion ($con);
	return $leMedicament ;
}
/*********** Gestion Specialisation ******/
function insertSpecialisation ($tab){
	$requete = "insert into specialisation values (null, '"
	.$tab['domaine']."' ) ; ";

	$con = connexion (); //appel de la connexion 
	mysqli_query($con, $requete); //execution de la requete
	deconnexion($con); //deconnexion de la base de données
}
function selectAllSpecialisations (){
	$requete ="select * from specialisation ; ";
	$con = connexion ();
	$lesSpecialisations = mysqli_query($con, $requete);
	deconnexion($con);
	return $lesSpecialisations;
}
function deleteSpecialisation ($idspecialisation){
	$requete ="delete from specialisation where idspecialisation=".$idspecialisation;
	$con = connexion(); 
	mysqli_query($con, $requete); 
	deconnexion ($con); 
}
function updateSpecialisation ($tab){
	$requete="update specialisation set domaine='"
	.$tab['domaine']   . "' where idspecialisation="
	.$tab['idspecialisation'];
	echo $requete ;
	$con = connexion(); 
	mysqli_query($con, $requete); 
	deconnexion ($con); 
}
function selectWhereSpecialisation ($idspecialisation){
	$requete="select * from specialisation where idspecialisation=".$idspecialisation;

	$con = connexion(); 
	$resultats = mysqli_query($con, $requete);
	$laSpecialisation = mysqli_fetch_assoc($resultats) ;
	deconnexion ($con);
	return $laSpecialisation ;
}
?>