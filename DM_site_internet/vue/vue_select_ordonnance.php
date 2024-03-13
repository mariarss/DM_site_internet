<br>
<h3>Liste des Ordonnances </h3>
<div class="container">
<table class="table table-hover table-sm">
<thead>
    <tr>
      <th scope="col">Libelle</th>
      <th scope="col">Nom Medecin</th>
      <th scope="col">Date renouvellement</th>
      <th scope="col">Periode prise</th>
      <th scope="col">Recurrence</th>
      <th scope="col">Opération</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($lesOrdonnances as $uneOrdonnance) {
            echo"<tr>";
            echo"<td>".$uneOrdonnance['libelle']."</td>";
            echo"<td>".$uneOrdonnance['nommedecin']."</td>";
            echo"<td>".$uneOrdonnance['daterenouvellement']."</td>";
            echo"<td>".$uneOrdonnance['periodeprise']."</td>";
            echo"<td>".$uneOrdonnance['recurrence']."</td>";

            echo "<td>";
            echo "<a 
                href ='index.php?page=3&action=supp&idordonnance=".
                $uneOrdonnance['idordonnance']."'><img src='images/supp.png' height='50' witdh='50'> </a>";

                echo "<a 
                href ='index.php?page=3&action=edite&idordonnance=".
                $uneOrdonnance['idordonnance']."'><img src='images/edite.png' height='50' witdh='50'> </a>";

            echo "</td>";

            echo"</tr>";
        }
    ?>
    </tbody>
</table>