<h2> Gestion des Specialisations </h2>

<?php

$laSpecialisation = null;

if (isset($_GET['action']) && isset($_GET['idspecialisation']))
{
    $action = $_GET['action'];
    $idspecialisation = $_GET['idspecialisation'];
    switch ($action){
        case "sup" : deleteSpecialisation ($idspecialisation) ; break;
        case "edit" :
        $leRDV = selectWhereSpecialisation($idspecialisation) ;
         
        break;
    }
}

    require_once("vue/vue_insert_specialisation.php");
    if(isset($_POST['Valider'])){
        //insertion du rdv dans la table rdv
        insertSpecialisation ($_POST);
        echo "<br> Insertion réussie de la specialisation.";
    }

    if (isset($_POST['Modifier']))
    {
        updateSpecialisation ($_POST);
        //recharger la page
        header("Location: index.php?pages=2");
    }
    
    //exctraciton des lignes
    $lesSpecialisations = selectAllSpecialisations();
    require_once("vue/vue_select_specialisation.php");
?>