<?php
session_start();

if (count($_SESSION['bingo']) > 99){
    session_destroy();
    session_start();
}

if(!isset($_SESSION['bingo'])) {
    $_SESSION['bingo'] = array();
}else{
print_r($_SESSION['bingo']);
}

$number = rand(1, 100);

while (in_array($number,$_SESSION['bingo'])) {
    $number = rand(1, 100);
}
    echo '<br>';
    echo $number;
    array_push ($_SESSION['bingo'], $number);
    echo '<br>';
    print_r($_SESSION['bingo']);
?>
