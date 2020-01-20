<?php
session_start();
$mijnSession = session_id();
if(isset($_SESSION['ID']) && $_SESSION['ID']=== $mijnSession) {
    echo "<h3>Welkom</h3>";
}else {
    echo "<br>Je moet eerst inloggen!<br>";
}
?>
<a href="uitloggen.php"><input type="button" name="terug" value="uitloggen " /></a>
