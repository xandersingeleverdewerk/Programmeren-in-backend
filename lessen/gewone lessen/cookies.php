<?php
ob_start();
echo "Maak een cookie";
setcookie("gebruiker", "Sanskriet", mktime(0,0,0,1,1,2055));
$gebruiker = $_COOKIE["gebruiker"];
echo "<br>Gebruikersnaam is: $gebruiker <br>";
print_r($_COOKIE);
ob_end_flush();
setcookie("user", "", time()-3600);
if(isset($_COOKIE["user"]))
{
    echo $_COOKIE["user"];
} else {
    echo "<br>Cookie is verwijderd";
}