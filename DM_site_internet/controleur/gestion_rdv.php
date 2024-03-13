<h2> Gestion des RDV</h2>

<?php

$leRDV = null;

if (isset($_GET['action']) && isset($_GET['idrdv']))
{
    $action = $_GET['action'];
    $idrdv = $_GET['idrdv'];
    switch ($action){
        case "supp" : deleteRDV ($idrdv) ; break;
        case "edite" :
        $leRDV = selectWhereRDV($idrdv) ;
         
        break;
    }
}

    require_once("vue/vue_insert_rdv.php");
    if(isset($_POST['Valider'])){
        //insertion du rdv dans la table rdv
        insertRDV ($_POST);
        echo "<br> Insertion réussie du RDV.";
    }

    if (isset($_POST['Modifier']))
    {
        updateRDV ($_POST);
        //recharger la page
        header("Location: index.php?page=5");
    }
    
    //exctraciton des lignes
    $lesRDV = selectAllRDV();
    require_once("vue/vue_select_rdv.php");
?>