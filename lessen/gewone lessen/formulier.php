<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<form action="verwerken.php" method="post">
    Uw naam :
    <input type="text" name="naam">
    <input type="hidden" name="taal" value="false">
    <br>Kies een taal:
    <input type="radio" name="taal" value="N">Nederlands
    <input type="radio" name="taal" value="E">Engels
    <input type="radio" name="taal" value="S">Spaans
    <br>
    <input type="submit" name="submit" value="Versturen">
</form>
</body>
</html>