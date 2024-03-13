<br>
<h3> Ajout d'un Medicament </h3>

<form method="post">
    <table>
        <tr>
            <td>Nom</td>
            <td> <input class="form-control" type="text" name="nom" value="<?php if($leMedicament!=null) echo $leMedicament['nom'] ?>"></td>
        </tr>
        <tr>
            <td>utilisation</td>
            <td> <input class="form-control" type="text" name="utilisation" value="<?php if($leMedicament!=null) echo $leMedicament['utilisation'] ?>"></td>
        </tr>
        <tr>
            <td>Physiologie</td>
            <td> <input class="form-control" type="text" name="physiologie" value="<?php if($leMedicament!=null) echo $leMedicament['physiologie'] ?>"></td>
        </tr>
            <td> <input type="reset" name="Annuler" value="Annuler"> </td>
            <td> <input type="submit" 

            <?php if($leMedicament !=null) {
                echo ' name = "Modifier" value = "Modifier"';
            }else {
                echo 'name="Valider" value="Valider"';
            }
            ?>
            ></td>
            
        </tr>
    </table>
    <?php
    if($leMedicament !=null){
        echo "<input type ='hidden' name='idmedicament' value ='".$leMedicament ['idmedicament']."'>";
    }
    ?>
</form>