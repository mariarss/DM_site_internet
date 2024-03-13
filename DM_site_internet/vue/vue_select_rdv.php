<br>
<h3>Liste des RDV </h3>
<div class="container">
<table class="table table-hover table-sm">
<thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Heure</th>
      <th scope="col">Adresse</th>
      <th scope="col">Opération</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($lesRDV as $unRDV) {
            echo"<tr>";
            echo"<td>".$unRDV['daterdv']."</td>";
            echo"<td>".$unRDV['heure']."</td>";
            echo"<td>".$unRDV['adresse']."</td>";
            
            echo "<td>";
            echo "<a 
                href ='index.php?page=5&action=supp&idrdv=".
                $unRDV['idrdv']."'><img src='images/supp.png' height='50' witdh='50'> </a>";

                echo "<a 
                href ='index.php?page=5&action=edite&idrdv=".
                $unRDV['idrdv']."'><img src='images/edite.png' height='50' witdh='50'> </a>";

            echo "</td>";

            echo"</tr>";
        }
    ?>
    </tbody>
</table>