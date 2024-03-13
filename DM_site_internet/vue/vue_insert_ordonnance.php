<br>
<h3> Ajout d'une Ordonnance </h3>

<form method="post">
    <table>
        <tr>
            <td>Libelle</td>
            <td> <input class="form-control" type="text" name="libelle" value="<?php if($uneOrdonnance!=null) echo $uneOrdonnance['libelle'] ?>"></td>
        </tr>
        <tr>
            <td>Nom Médecin</td>
            <td> <input class="form-control" type="text" name="nommedecin" value="<?php if($uneOrdonnance!=null) echo $uneOrdonnance['nommedecin'] ?>"></td>
        </tr>
        <tr>
            <td>Date Renouvellement</td>
            <td> <input class="form-control" type="text" name="daterenouvellement" value="<?php if($uneOrdonnance!=null) echo $uneOrdonnance['daterenouvellement'] ?>"></td>
        </tr>
        <tr>
            <td>Période Prise</td>
            <td> <input class="form-control" type="text" name="periodeprise" value="<?php if($uneOrdonnance!=null) echo $uneOrdonnance['periodeprise'] ?>"></td>
        </tr>
        <tr>
        <td>Récurrence</td>
            <td> <input class="form-control" type="text" name="recurrence" value="<?php if($uneOrdonnance!=null) echo $uneOrdonnance['recurrence'] ?>"></td>
        </tr>
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"> </td>
            <td> <input type="submit" 
            <?php if($uneOrdonnance !=null){
                echo 'name = "Modifier" value ="Modifier" ';
            }else{
                echo 'name="Valider" value="Valider" ';
            }
            ?>
            ></td>
            
        </tr>
    </table>
    <?php
    if($uneOrdonnance !=null){
        echo "<input type='hidden' name='idordonnance' value='".$uneOrdonnance
        ['idordonnance']."'>";
    }
    ?>
    </table>
</form>