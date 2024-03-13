<h2> Gestion des Ordonnances</h2>

<?php
$uneOrdonnance = null;
    if (isset($_GET['action']) && isset($_GET['idordonnance']))
    {
        $action = $_GET['action'];
        $idordonnance = $_GET['idordonnance'];
        switch ($action){
            case "supp": deleteOrdonnance($idordonnance); break;
            case "edite":
            $uneOrdonnance = selectWhereOrdonnance($idordonnance);
           
            break;
        }
    }
    require_once("vue/vue_insert_ordonnance.php");
    if(isset($_POST['Valider'])){
        insertOrdonnance($_POST);
        echo"<br> Insertion réussie de l'ordonnance";
    }
    if (isset($_POST['Modifier']))
    {
        updateOrdonnance($_POST);
        header(("Location: index.php?page=3"));
    }
    $lesOrdonnances = selectAllOrdonnances();

    require_once("vue/vue_select_ordonnance.php");
?>