<?php
// toujour laisser une seule ligne
// phpinfo();
$coucou="<h2>test</h2>";
$toto="<h1>12</h1>";
echo $toto;
echo $coucou;

$jour='lundi';
// en simple guillemet la valuer de la variable n'est pas affiché
echo 'nous sommes $jour';
echo "<br/>";
// en double si 
echo "nous sommes $jour";
echo "<br/>";
// afficher le type 
echo gettype($jour);
echo "<br/>";
// afficher le type + le contenu et la longueur
var_dump($jour);
echo "<br/>";

// passage par référence
$a = 1;
$b = &$a;
$b =2;
echo $a; 

// les différents types de variables
// string
// interger
// float
// boolean
// Array
// Object 
// Ressource
// Enumeration ou Enums
