<br>
<h3> Ajout d'un Médecin </h3>

<form method="post">
    <table>
        <tr>
            <td>Nom</td>
            <td> <input class="form-control" type="text" name="nom" value="<?php if($leMedecin!=null) echo $leMedecin['nom'] ?>"></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td> <input class="form-control" type="text" name="prenom" value="<?php if($leMedecin!=null) echo $leMedecin['prenom'] ?>"></td>
        </tr>
        <tr>
            <td>Téléphone</td>
            <td> <input class="form-control" type="text" name="telephone" value="<?php if($leMedecin!=null) echo $leMedecin['telephone'] ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <input class="form-control" type="text" name="email" value="<?php if($leMedecin!=null) echo $leMedecin['email'] ?>"></td>
        </tr>
        <tr>
            <td>Spécialité</td>
            <td> <input class="form-control" type="text" name="specialite" value="<?php if($leMedecin!=null) echo $leMedecin['specialite'] ?>"></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td> <input class="form-control" type="text" name="adresse" value="<?php if($leMedecin!=null) echo $leMedecin['adresse'] ?>"></td>
        </tr>
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"> </td>
            <td> <input type="submit" 
            
            <?php if($leMedecin !=null){
                echo 'name = "Modifier" value ="Modifier" ';
            }else{
                echo 'name="Valider" value="Valider" ';
            }
            ?>
            ></td>
            
        </tr>
    </table>
    <?php
    if($leMedecin !=null){
        echo "<input type='hidden' name='idmedecin' value='".$leMedecin
        ['idmedecin']."'>";
    }
    ?>
</form>

