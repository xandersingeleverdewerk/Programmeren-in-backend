<!DOCTYPE html>
<html lang="nl">
<head >
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h1>Inschrijfformulier</h1>
<form action="lab08.verwerken.php" method="post">
    <table>
        <tr>
            <td>Achternaam</td>
            <td><input type="text" name="achternaam"></td>
        </tr>
        <tr>
            <td>Voornaam</td>
            <td><input type="text" name="voornaam"></td>
        </tr>
        <tr>
            <td>Straat</td>
            <td><input type="text" name="straat"></td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><input type="text" name="postcode"></td>
        </tr>
        <tr>
            <td>Plaats</td>
            <td>
                <select name="plaatsen">
                    <option value="Hoogvliet">Hoogvliet</option>
                    <option value="Spijkenisse">Spijkenisse</option>
                    <option value="Rotterdam">Rotterdam</option>
                    <option value="Rhoon">Rhoon</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>E-mailadres</td>
            <td><input type="text" name="E-mailadres"></td>
        </tr>
    </table>
    <br>
    Kies een opleiding:
    <br>
    <input type="radio" name="opleiding" value="ICT">ICT
    <br>
    <input type="radio" name="opleiding" value="Engels">Engels
    <br>
    <input type="radio" name="opleiding" value="Techniek">Techniek
    <br>
    <input type="radio" name="opleiding" value="Nederlands">Nederlands
    <br>
    <br>
    <input type="submit" name="submit" value="Versturen">
    <input type="reset" name="reset" value="Reset">
</form>
</body>
</html>