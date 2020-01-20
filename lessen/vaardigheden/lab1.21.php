<!DOCTYPE html>
<html lang="nl">
<head>
    <title>json</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<form action="lab21.verwerken.php" method="post">
    <table>
        <tr>
            <td>
                <label>
                    <input type="text" name="voornaam" placeholder="voornaam">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="naam" placeholder="naam">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="geboortedatum" placeholder="geboortedatum">
                </label>
            </td>
        </tr>
         <tr>
            <td>
                <label>
                    <input type="text" name="straat" placeholder="straat">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="postcode" placeholder="postcode">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="plaats" placeholder="plaats">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="text" name="E-mailadres" placeholder="email">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    <input type="password" name="wachtwoord" placeholder="wachtwoord">
                </label>
            </td>
        </tr>
    </table>
    <br>
    Minderjarig:
    JA
    <label>
        <input type="radio" name="minderjarig" value="ja">
    </label>
    NEE
    <label>
        <input type="radio" name="minderjarig" value="nee">
    </label>
    <br>
    <br>
    <input type="submit" name="registreren" value="Registreren">
    <input type="reset" name="reset" value="Resetten">
</form>
</body>
</html>