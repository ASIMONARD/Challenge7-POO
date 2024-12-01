<?php

require_once 'Person.php';

$person = new Person('SIMONARD', 'Arnaud', '195 rue des Pyrénées PARIS', '03/03/1973');
$person->afficher();

echo "Modificattion de l'adresse : <br>";
$person->modifyAddress('15 rue des pyramides VERSAILLES');
$person->afficher();
?>