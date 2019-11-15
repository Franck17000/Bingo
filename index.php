<?php
session_start();
$bingo[] = $_SESSION;
echo $bingo;

$number = rand(1, 100);

if (in_array($number,$bingo)) {
echo 'recommancer';
}else{
echo $number;
$_SESSION = $bingo[]= $number;   
echo '<br>'.($_SESSION);
}

?>

<!-- 
    clic lancer un nombre entre 1 et 100
    enregistrer ce nombre dans un tableau
    afficher le tableau
    clic pour rechoisir un nombre au hasard qui ne se trouve pas dans le tableau
 -->