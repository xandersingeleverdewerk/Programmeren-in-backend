<h3>php lab 1.4</h3>
<?php
$naam = "Karim";
$nederlands = "8.5";
$engels = "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";

$nederlands = doubleval($nederlands);
$engels = doubleval($engels);
$rekenen = doubleval($rekenen);
$programmeren = doubleval($programmeren);
$databases = doubleval($databases);
$gemiddelde = ($nederlands + $engels + $rekenen + $programmeren + $databases) / 5;
$gemiddelde = round($gemiddelde, 2);

$naam2 = "Sophie";
$nederlands2 = "8.9";
$engels2 = "8.7";
$rekenen2 = "9.7";
$programmeren2 = "9.5";
$databases2 = "9.2";

$nederlands2 = doubleval($nederlands2);
$engels2 = doubleval($engels2);
$rekenen2 = doubleval($rekenen2);
$programmeren2 = doubleval($programmeren2);
$databases2 = doubleval($databases2);
$gemiddelde2 = ($nederlands2 + $engels2 + $rekenen2 + $programmeren2 + $databases2) / 5;
$gemiddelde2 = round($gemiddelde2, 2);

$totaalgemiddelde = ($gemiddelde + $gemiddelde2) / 2;
$totaalgemiddelde = round($totaalgemiddelde, 1);

echo "
<table border='1'>
  <caption>
    <strong>Rapport</strong>
  </caption>
  <thead>
    <tr>
      <th>Naam</th>
      <th>Nederlands</th>
      <th>Engels</th>
      <th>Rekenen</th>
      <th>Programmeren</th>
      <th>Databases</th>
      <th>Gemiddeld</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>$naam</td>
      <td>$nederlands</td>
      <td>$engels</td>
      <td>$rekenen</td>
      <td>$programmeren</td>
      <td>$databases</td>
      <td>$gemiddelde</td>
    </tr>
    <tr>
      <td>$naam2</td>
      <td>$nederlands2</td>
      <td>$engels2</td>
      <td>$rekenen2</td>
      <td>$programmeren2</td>
      <td>$databases2</td>
      <td>$gemiddelde2</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td colspan='6'>Groep gemiddeld</td>
      <td>$totaalgemiddelde</td>
    </tr>
  </tfoot>
</table>";
?>