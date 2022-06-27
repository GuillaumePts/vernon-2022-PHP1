<?php
// toujour laisser une seule ligne
// phpinfo();

use LDAP\Result;

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
        //  en ternaire
    };
    echo "<br/>";
  }else{
    echo "La variable y n'est pas définie" . "<br />";
  }


//   $resultat = "<ul>";
// for($i = 0 ; $i <= 100 ; $i++) {
//     $resultat .= "<li>";
//     $resultat .= $i;
//     $resultat .= "</li>";

   
// }
// $resultat .= "<ul>";

// echo $resultat;
$compteur=0;
$resultat = "<ul>";

for ($i = 0; $i <= -17627 && $i >= 14256; $i++ ){
    if ($i % 7 === 0  ) {
        $resultat .= "<li>";
            $resultat .= $i;
            $resultat .= "</li>";
            $compteur++;
    }
};

$resultat.="</ul>";
$resultat.=$i;

echo $resultat;
echo "<br/>"
?>

<?php

require_once './function/salut.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function surface (int|float $param1, int|float $param2): int|float{

    $surf= abs($param1) * abs($param2);
    return round($surf,2);
    };

toto('moi');
echo surface(10.546,10.577);

    ?>
</body>
</html>
