<bR>
<h3> Ajout d'un RDV </h3>

<form method="post">
    <table>
        <tr>
            <td>DateRDV</td>
            <td> <input class="form-control" type="text" name="daterdv" value="<?php if($leRDV!=null) echo $leRDV['daterdv'] ?>"></td>
        </tr>
        <tr>
            <td>Heure</td>
            <td> <input class="form-control" type="text" name="heure" value="<?php if($leRDV!=null) echo $leRDV['heure'] ?>"></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td> <input class="form-control" type="text" name="adresse" value="<?php if($leRDV!=null) echo $leRDV['adresse'] ?>"></td>
        </tr>
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"> </td>
            <td> <input type="submit"
            <?php if($leRDV !=null){
                echo 'name = "Modifier" value ="Modifier" ';
            }else{
                echo 'name="Valider" value="Valider" ';
            }
            ?>
            ></td>
            
        </tr>
    </table>
    <?php
    if($leRDV !=null){
        echo "<input type='hidden' name='idrdv' value='".$leRDV
        ['idrdv']."'>";
    }
    ?>
    </table>
</form>