<?php

print "<p>Lab 1.05</p>";

// stap 1
$getallen = [];
$getallen[0] = "een";
$getallen[1] = "twee";
$getallen[2] = 3;
$getallen[3] = "vier";

// stap 2
array_push($getallen, 5);

// stap 3
print "Stap 3. ";
print_r($getallen);

// stap 4
print "<br> Stap 4. Datatype is: ";
var_dump($getallen[4]);

// stap 5
$laatsteElement = array_pop($getallen);

// stap 6
print "<br> Stap 6. ";
print_r($getallen);

// stap 7
array_unshift($getallen, "nul");

// stap 8
print "<br> Stap 8. ";
print_r($getallen);

// stap 9
unset($getallen[0]);

// stap 10
"<br>Stap 10. ".var_dump($getallen[0]);

// stap 11
$eersteElement = array_shift($getallen);

// stap 12
print "<br> Stap 12. ";
print_r($getallen);

// stap 13
unset($getallen[1]);

// stap 14
print "<br> Stap 14. ";
print_r($getallen);

// stap 15
unset($getallen[3]);

// stap 16
print "<br>Stap 16. ";
print_r($getallen);