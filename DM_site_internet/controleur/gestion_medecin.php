<h2> Gestion des Medecins </h2>

<?php
$leMedecin = null;
    if (isset($_GET['action']) && isset($_GET['idmedecin']))
    {
        $action = $_GET['action'];
         $idmedecin = $_GET['idmedecin'];
        switch ($action){
            case "supp": deleteMedecin($idmedecin); break;
            case "edite":
            $leMedecin = selectWhereMedecin($idmedecin);
               
            break;
        }
    }
    require_once("vue/vue_insert_medecin.php");
    if(isset($_POST['Valider'])){
        insertMedecin($_POST);
        echo"<br> Insertion réussie du medecin";
    }
    if (isset($_POST['Modifier']))
    {
        updateMedecin($_POST);
        header(("Location: index.php?page=2"));
    }
    $lesMedecins = selectAllMedecins();
    
    require_once("vue/vue_select_medecin.php");
?>