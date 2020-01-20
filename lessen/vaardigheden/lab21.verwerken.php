<?php
if(isset($_POST["registreren"])) {

    $voornaam      = $_POST["voornaam"];
    $naam          = $_POST["naam"];
    $geboortedatum = $_POST["geboortedatum"];
    $straat        = $_POST["straat"];
    $postcode      = $_POST["postcode"];
    $plaats        = $_POST["plaats"];
    $emailadres    = $_POST["E-mailadres"];
    $wachtwoord    = $_POST["wachtwoord"];
    $minderjarig   = $_POST["minderjarig"];

    $gebruiker = array(
            "voornaam"      => $voornaam,
            "naam"          => $naam,
            "geboortedatum" => $geboortedatum,
            "straat"        => $straat,
            "postcode"      => $postcode,
            "plaats"        => $plaats,
            "E-mailadres"   => $emailadres,
            "wachtwoord"    => $wachtwoord,
            "minderjarig"   => $minderjarig
    );
    print_r($gebruiker);
    $gebruikersJsonString = json_encode($gebruiker);
    echo "<br><br>".$gebruikersJsonString;

}
else {
    echo "geen informatie ingevoerd ga naar <a href='lab1.21.php'>de formulier.</a>";
}