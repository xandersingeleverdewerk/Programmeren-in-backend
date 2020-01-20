<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Cookies</title>
</head>
<body>
<form name="login" action="" method="post">
    Gebruikersnaam:<br>
    <input type="text" name="user" /><br><br>
    <input type="submit" name="submit" value="Inloggen" />
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $user = $_POST["user"];
    $melding = welkom($user);
    echo "<br> $melding";
}
function welkom($user) {
    // TODO de value veranderen in een teller van hoevaak er is ingelogd
    setcookie("xander", "xander");
    // TODO de if zo veranderen dat bij de eerste keer de else statement wordt toegepast en daarna de if statement wordt toegepast
    if(isset($_COOKIE["naam"])) {
        echo "Hallo $user, welkom terug";
    }
    else {
        echo "Hallo $user, u bent onze nieuwste gebruiker";
        // TODO de value veranderen in een teller van hoevaak er is ingelogd
        setcookie("naam", $_POST["user"]);
    }
}
ob_end_flush();
?>
