<?php

$playlist = array(
    array("genre" => "Hiphop", "auteur" => "John Williams", "title" => "My Girl"),
    array("genre" => "Jazz", "auteur" => "John Coltrane", "title" => "New York"),
    array("genre" => "Hiphop", "auteur" => "Shakira", "title" => "Obsession")
);

$nieuweplaylist = array (
    array("genre" => "Latin", "auteur" => "Caetano Veloso", "titel" => "Cafe Atlantico")
);
$playlist = array_merge($playlist, $nieuweplaylist);

foreach ($playlist as $row){
    echo "Track ".implode(' | ', $row) . "<br>";
}