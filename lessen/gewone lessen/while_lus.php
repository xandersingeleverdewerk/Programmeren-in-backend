<!DOCTYPE html>
<html lang="nl">
<head>
    <title>While-lus</title>
</head>
<body>
<h3>Voorbeeld van de while-lus</h3>
<?php
echo "<br>Zolang ons saldo lager is dan 2000 willen we dat de while-lus ons maandelijks saldo uitrekent";
$saldo = 750;
$rente = 0.1;
$maand = 1;
echo "<br>Beginsaldo is:  " . $saldo . "<br />";
echo "START... ";
while ($saldo < 2000)
{
    $saldo = $saldo + ($saldo * $rente);
    $saldo = sprintf("%0.2f", $saldo);
    echo "<br>Maand: $maand je saldo is: $saldo";
    $maand++;
}
echo "<br>FINISH";
?>
</body>
</html>