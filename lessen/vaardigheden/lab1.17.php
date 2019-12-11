<!DOCTYPE html>
<html lang="nl">
<head>
    <title>do-while-lus</title>
</head>
<body>
<h3>Voorbeeld van de do-while-lus</h3>
<?php
echo "<br>Reken het saldo uit zolang saldo lager dan 2000 is";
$saldo = 100;
$rente = 0.1;
$maand = 1;
echo "<br>Beginsaldo is: $saldo<br>";
echo "START...<br>";
echo "Maand: $maand je saldo is: $saldo<br>";
do {
    $saldo = $saldo + ($saldo * $rente);
    $saldo = sprintf("%0.2f", $saldo);
    $maand++;
    if($maand == 2) {
        echo "februari betaalt geen rente";
        continue;
    }
    if($saldo > 2000) {
        echo "<br>Maximale saldo 2000 is bereikt";
        exit();
    }
    if($maand == 6 && $saldo < 1000) {
        echo "<br>Je saldo is te laag";
        exit();
    }
    echo "<br>Maand: $maand je saldo is: $saldo";
}
while($saldo < 2000);
echo "<br>FINISH";
?>
</body>
</html>
