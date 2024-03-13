<h2> Gestion des medicaments</h2>

<?php

$leMedicament = null;

if (isset($_GET['action']) && isset($_GET['idmedicament']))
{
    $action = $_GET['action'];
    $idmedicament = $_GET['idmedicament'];
    switch ($action){
        case "supp" : deleteMedicament ($idmedicament) ; break;
        case "edite" :
        $leMedicament = selectWhereMedicament($idmedicament) ;
         
        break;
    }
}

    require_once("vue/vue_insert_medicament.php");
    if(isset($_POST['Valider'])){
        //insertion du rdv dans la table rdv
        insertMedicament ($_POST);
        echo "<br> Insertion réussie du medicament.";
    }

    if (isset($_POST['Modifier']))
    {
        updateMedicament ($_POST);
        //recharger la page
        header("Location: index.php?page=6");
    }
    
    //exctraciton des lignes
    $lesMedicaments = selectAllMedicaments();
    require_once("vue/vue_select_medicament.php");
?>