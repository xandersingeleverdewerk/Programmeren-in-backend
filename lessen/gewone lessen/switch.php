<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>Switch opdracht</title>
</head>
<body>
<form name="order" action="" method="post">
    <p>Selecteer een bestemming:</p>
    <select name="land" value="true">
        <option value=" "></option>
        <option value="nl">Nederland</option>
        <option value="be">België</option>
        <option value="de">Duitsland</option>
        <option value="es">Spanje</option>
    </select>
    <input type="submit" name="submit" value="Versturen">
    <p>--------------------------------------------------</p>
</form>
<?php
if (isset($_POST["submit"]))
{
    switch ($_POST['land'])
    {
        case "nl" :
            echo "<p>Retourtje Nederland is 100</p>";

        case "be" :
            echo "<p>Retourtje België is 80</p>";
            break;
        case "de" :
            echo "<p>Retourtje Duitsland is 90</p>";
            break;
        case "es" :
            echo "<p>Retourtje Spanje is 80";
            break;
        default:
            echo "<p>U heeft geen bestemming gekozen</p>";
    }
}
?>
</body>
</html>