<br>
<h3> Ajout d'un Patient </h3>

<form method="post">
    <table>
        <tr>
            <td>Nom</td>
            <td> <input class="form-control" type="text" name="nom" value="<?php if($lepatient!=null) echo $lepatient['nom'] ?>"></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td> <input class="form-control" type="text" name="prenom" value="<?php if($lepatient!=null) echo $lepatient['prenom'] ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <input class="form-control" type="text" name="email" value="<?php if($lepatient!=null) echo $lepatient['email'] ?>"></td>
        </tr>
        <tr>
            <td>Téléphone</td>
            <td> <input class="form-control" type="text" name="telephone" value="<?php if($lepatient!=null) echo $lepatient['telephone'] ?>"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td> <input class="form-control" type="text" name="age" value="<?php if($lepatient!=null) echo $lepatient['age'] ?>"></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td> <input class="form-control" type="text" name="adresse" value="<?php if($lepatient!=null) echo $lepatient['adresse'] ?>"></td>
        </tr>
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"> </td>
            <td> <input type="submit"
            <?php if($lepatient !=null){
                echo 'name = "Modifier" value ="Modifier" ';
            }else{
                echo 'name="Valider" value="Valider" ';
            }
            ?>
            ></td>
        </tr>
    </table>
    <?php
    if($lepatient !=null){
        echo "<input type='hidden' name='idpatient' value='".$lepatient
        ['idpatient']."'>";
    }
    ?>
    </table>
</form>