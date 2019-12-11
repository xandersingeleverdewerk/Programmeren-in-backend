<?php
if(isset($_POST["achternaam"]) && isset($_POST["voornaam"]) && isset($_POST["straat"]) && isset($_POST["postcode"]) && isset($_POST["E-mailadres"]) && isset($_POST["plaatsen"])  ){
    if(empty($_POST["achternaam"]) ){
        echo "achternaam niet ingevuld";
        if(empty($_POST["voornaam"]) ){
            echo "voornaam niet gevonden";
            if(empty($_POST["straat"]) ){
                echo "straat niet gevonden";
                if(empty($_POST["postcode"]) ){
                    echo "postcode niet gevonden";
                    if(empty($_POST["E-mailadres"]) ){
                        echo "email adres niet gevonden";
                        if(empty($_POST["plaatsen"]) ){
                            echo "plaats niet gevonden";
                        }
                    }
                }
            }
        }
    }
    else {
        $achternaam = $_POST["achternaam"];
        $voornaam = $_POST["voornaam"];
        $straat = $_POST["straat"];
        $postcode = $_POST["postcode"];
        $emailadres = $_POST["E-mailadres"];
        $plaats = $_POST["plaatsen"];
        $opleiding = $_POST["opleiding"];
        if ($opleiding == "ICT") {
            echo "ICT opleidingen zijn vol. Kies een andere opleiding";
        }
        else {
            echo "<h1>Uw gegevens zijn:</h1><br>";
            echo "Achternaam: $achternaam<br>";
            echo "Voornaam: $voornaam<br>";
            echo "Straat: $straat<br>";
            echo "Postcode: $postcode<br>";
            echo "plaats: $plaats<br>";
            echo "E-mailadres: $emailadres<br><br>";
            echo "U wordt ingeschreven voor de volgende opleiding:<br>";
            echo "$opleiding";
        }
    }
}