<?php
$gewerkteuren = 45;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;
if($gewerkteuren <= 40){
    $basisbelasting = 0.40;
    $belasting = $basisbelasting * $bruto;
    echo "Uw basissalaris is: € ".$bruto;
    echo "<br>Uw belasting is: € ". $basisbelasting*$bruto;
    echo "<br>Uw nettobedrag is: € ". ($bruto - $belasting);
} elseif ($gewerkteuren > 40) {
    $basisbelasting = 0.45;
    $loon = $bruto + $bonus;
    $belasting = $basisbelasting * $loon;
    echo "Uw basissalaris is: € ".$bruto;
    echo "<br>Uw basissalaris plus bonus is: € ".$loon;
    echo "<br>Uw belasting is: € ". $belasting;
    echo "<br>Uw nettobedrag is: € ". ($loon - ($belasting) );
}
echo"<br>".$gewerkteuren = ($gewerkteuren < 40 ? "Belasting is 40%" : "Belasting is 45%");