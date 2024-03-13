<br>
<h3>Liste des Patients </h3>
<div class="container">
<table class="table table-hover table-sm">
<thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Opération</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($lespatients as $unpatient) {
            echo"<tr>";
            echo"<td>".$unpatient['nom']."</td>";
            echo"<td>".$unpatient['prenom']."</td>";
            echo"<td>".$unpatient['adresse']."</td>";
            echo"<td>".$unpatient['telephone']."</td>";
            echo"<td>".$unpatient['email']."</td>";
            echo"<td>".$unpatient['age']."</td>";
           
            echo "<td>";
            echo "<a 
                href ='index.php?page=4&action=supp&idpatient=".
                $unpatient['idpatient']."'><img src='images/supp.png' height='50' witdh='50'> </a>";

                echo "<a 
                href ='index.php?page=4&action=edite&idpatient=".
                $unpatient['idpatient']."'><img src='images/edite.png' height='50' witdh='50'> </a>";

            echo "</td>";

            echo"</tr>";
        }
    ?>
    </tbody>
</table>