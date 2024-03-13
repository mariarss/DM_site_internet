<br>
<h3>Liste des Médicaments </h3>
<div class="container">
<table class="table table-hover table-sm">
<thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Utilisation</th>
      <th scope="col">Physiologie</th>
      <th scope="col">Opération</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($lesMedicaments as $leMedicament) {
            echo"<tr>";
            echo"<td>".$leMedicament['nom']."</td>";
            echo"<td>".$leMedicament['utilisation']."</td>";
            echo"<td>".$leMedicament['physiologie']."</td>";
            
            echo "<td>";
            echo "<a 
                href ='index.php?page=6&action=supp&idmedicament=".
                $leMedicament['idmedicament']."'><img src='images/supp.png' height='50' witdh='50'> </a>";

                echo "<a 
                href ='index.php?page=6&action=edite&idmedicament=".
                $leMedicament['idmedicament']."'><img src='images/edite.png' height='50' witdh='50'> </a>";

            echo "</td>";

            echo"</tr>";
        }
    ?>
    </tbody>
</table>