<?php
if(isset($_POST["submit"])) {
    $blogName = basename($_FILES["text"]["name"]);
    global $uploadsBlog;
    function upload(){
        global $uploadsBlog;
        $uploadsBlog = "uploads/";
        $uploadsBlog = $uploadsBlog . basename($_FILES["text"]["name"]);
        $blogType = pathinfo($uploadsBlog,PATHINFO_EXTENSION);
        return true;
    }
    // Stuur blog naar uploads map
    if (upload()) {
        if (move_uploaded_file($_FILES["text"]["tmp_name"], $uploadsBlog)) {
            echo "Blog is verzonden.";
            // Gebruiker opslaan
            $bestand=fopen("blogs.txt","ab");
            if (!$bestand) {
                echo "Kon geen bestand openen!";
            }
            $naam = htmlspecialchars($_POST['naam']);
            $blog = $blogName;
            $profiel =
                $naam . "*" .
                $blog."\n";
            fwrite($bestand,$profiel,strlen($profiel));
            if (fclose($bestand)) {
                echo " Blog is verzonden.";
            } else {
                echo "Kon blog niet verzenden.";
            }
        } else {
            echo "Probleem bij het verzenden. Blog niet verzonden.";
        }
    }
}
?>
<a href="registreren.html"<input type="button" name="terug" value=" Terug " />
