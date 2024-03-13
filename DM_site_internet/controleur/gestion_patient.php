<h2> Gestion des patients</h2>

<?php

$lepatient = null;

if (isset($_GET['action']) && isset($_GET['idpatient']))
{
    $action = $_GET['action'];
    $idpatient = $_GET['idpatient'];
    switch ($action){
        case "supp" : deletePatient ($idpatient) ; break;
        case "edite" :
        $lepatient = selectWherePatients($idpatient) ;
         
        break;
    }
}

    require_once("vue/vue_insert_patient.php");
    if(isset($_POST['Valider'])){
        //insertion du rdv dans la table rdv
        insertPatient ($_POST);
        echo "<br> Insertion réussie du patient.";
    }

    if (isset($_POST['Modifier']))
    {
        updatePatient ($_POST);
        //recharger la page
        header("Location: index.php?page=4");
    }
    
    //exctraciton des lignes
    $lespatients = selectAllPatients();
    require_once("vue/vue_select_patient.php");
?>