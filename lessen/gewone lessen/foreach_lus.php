<!DOCTYPE html>
<html lang="nl">
<head>
    <title>foreach-lus</title>
</head>
<body>
<h3>Voorbeeld van de foreach-lus</h3>
<?php
$kleuren["oranje"] = "orange";
$kleuren["rood"] = "red";
$kleuren["paars"] = "purple";
$kleuren["groen"] = "green";
$kleuren["blauw"] = "blue";
$kleuren["geel"] = "yellow";
foreach ($kleuren as $kleur ) {
    if ($kleur == "yellow") {
        $kleur = "black";
    }
    echo "<br><font color=$kleur>Deze tekst in $kleur";
}
?>
</body>
</html>
<?php
