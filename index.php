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


// les opérateurs
/*
+
-
*
/
modulo % = reste d'une division 
** = (10 puissance 2 : 10 ** 2)
pour faire racine carré = sqrt(float $num):float
https://www.php.net/manual/fr/ref.math.php

Opérateur combiné 

$i = $i + 1 ;
$i++;
$i+=1

*/ 


/*
Opérateurs de comparaison
== : compare la valeur
=== : compare la valeur avec le typage important avec les booléen
!= ou <> : le contraire  en valeurs
!== : différent en valeur et en typage
<=
>=
<
>
*/

/*
les conditions
*/

$x=210;

if($x > 0){
    echo '$x est positif';
}elseif($x<0){
    echo '$x est negatif';
}else{
    echo '$x est nul';
};
echo "<br/>";


$y = "-2";

if(isset($y) && is_numeric($y)){
    if($x > 0){
        echo '$x est positif';
    }elseif($x<0){
        echo '$x est negatif';
    }else{
        echo '$x est nul';
    };
    echo "<br/>";
  }else{
    echo "La variable y n'est pas définie" . "<br />";
  }



