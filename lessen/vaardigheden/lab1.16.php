<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <style>
        .album {clear: left; width: 100%;}
        .omslag {float: left;}
        .gegevens {float: left; padding-left: 20px;}
        .korting {clear: left;}
        .aantal {background-color: #f8ce6c;}
    </style>
    <title>Mijn winkelmandje</title>
</head>
<body style="font-family: Verdana; font-size: 9px">
<h3>Mijn winkelmandje</h3>
<form name="albums" action="" method="post">
    <div class="album">
        <div class="omslag">
            <img src="img/evora.jpg" width="50px" alt="X"/>
        </div>
        <div class="gegevens">
            Cesaria Evora " Em Um Concerto" Prijs: $9
            <input type="hidden" name="albumcode[0]" value="001">
            <input type="hidden" name="artiest[0]" value="Cesaria Evora">
            <input type="hidden" name="album[0]" value="Em Um Concerto">
            <input type="hidden" name="prijs[0]" value="9">
            <input type="hidden" name="genre[0]" value="World">
            <br />Aantal:
            <input type="text" size=2 maxlength=3 name="aantal[0]" class="aantal" value="0">
        </div>
    </div>

    <div class="album">
        <div class="omslag">
            <img src="images/manuchao.jpg" width="50px" alt="X" />
        </div>
        <div class="gegevens">
            Manu Chao "Clandestino" Prijs: $5
            <input type="hidden" name="albumcode[1]" value="002" />
            <input type="hidden" name="artiest[1]" value="Manu Chao" />
            <input type="hidden" name="album[1]" value="Clandestino" />
            <input type="hidden" name="prijs[1]" value="5" />
            <input type="hidden" name="genre[1]" value="World" />
            <br />Aantal:
            <input type="text" size="2" maxlength="3" class="aantal" name="aantal[1]" value="0">
        </div>
    </div>

    <div class="album">
        <div class="omslag">
            <img src="images/manuchao.jpg" width="50px" alt="X" />
        </div>
        <div class="gegevens">
            Manu Chao "Clandestino" Prijs: $5
            <input type="hidden" name="albumcode[2]" value="003" />
            <input type="hidden" name="artiest[2]" value="Manu Chao" />
            <input type="hidden" name="album[2]" value="Clandestino" />
            <input type="hidden" name="prijs[2]" value="5" />
            <input type="hidden" name="genre[2]" value="World" />
            <br />Aantal:
            <input type="text" size="2" maxlength="3" class="aantal" name="aantal[2]" value="0">
        </div>
    </div>

    <div class="korting">
        <br><hr />Korting:<br />
        <input type="checkbox" name="korting[]" value="15" />Student: 15%<br />
        <input type="checkbox" name="korting[]" value="10" />Student: 10%<br />
    </div>
    <div class="betalingswijze">
        <p>Selecteer een betalingswijze:</p>
        <select name="betalingswijze" value="true">
            <option value="vi">Visa</option>
            <option value="ma">Mastercard</option>
            <option value="pa">PayPal</option>
            <option value="id">Ideal</option>
        </select>
        <input type="submit" width="300px" name="verzenden" value=" Bestellen " />
    </div>
</form>
</body>
</html>
<?php
if(isset($_POST["aantal"][0]) && isset($_POST["korting"]) && isset($_POST["verzenden"]) ) {
    include_once("externe_functions.php");
    $betalingswijze = $_POST['betalingswijze'];
    $serviceKosten = serviceKosten($betalingswijze);
    echo "<br>Servicekosten zijn: €" . $serviceKosten;
    if(empty($_POST["aantal"]) ){
        echo "aantal niet ingevuld";
    } else {
        foreach($_POST['aantal'] as $key => $value) {
            echo "<br>Besteld albums: $value<br>";
        }
        foreach($_POST['korting'] as $selected) {
            echo "Korting is: $selected%";
        }
        switch ($_POST['betalingswijze'])
        {
            case "vi" :
                echo "<p>Betalingswijze: Visa</p>";
                break;
            case "ma" :
                echo "<p>Betalingswijze: MasterCard</p>";
                break;
            case "pa" :
                echo "<p>Betalingswijze: PayPal</p>";
                break;
            case "id" :
                echo "<p>Betalingswijze: Ideal</p>";
                break;
            default:
                echo "<p>U heeft geen betalingswijze gekozen</p>";
        }
        premium();
    }
}
?>