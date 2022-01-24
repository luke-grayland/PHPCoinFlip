<?php

$newNumber = rand(0,2);



// First task
//if ($newNumber === 0) {
//    echo 'You got heads!';
//} else {
//    echo 'Tails never fails!';
//}


// Ternary task
// echo ($newNumber === 0) ? 'You got heads!' : 'Tails never fails!';

// Coin task
//$heads = '<img src="heads.jpg" alt="heads">';
//$tails = '<img src="tails.jpg" alt="tails">';
//
//echo ($newNumber === 0) ? $heads : $tails;

// Ultimate prize task
//if ($newNumber === 0) {
//    echo 'You got heads!';
//} else if ($newNumber === 1) {
//    echo 'You got tails!';
//} else {
//    echo 'You won the ultimate prize!';


$heads1 = '<img src="heads1.jpg" alt="heads">';
$tails1 = '<img src="tails1.jpg" alt="tails">';
$heads2 = '<img src="heads2.jpeg" alt="heads">';
$tails2 = '<img src="tails2.jpg" alt="tails">';
$prize1 = '<img src="prize1.png" alt="prize">';
$prize2 = '<img src="prize2.jpeg" alt="prize">';


function rollDice() {
    return $result = rand(1,6);
}
function prizeMultiplier() {
    return $result = rand(1,10);
}



if ($newNumber === 0) {
    $rollDiceResult = rollDice();
    $multiplierResult = prizeMultiplier();
    echo 'You rolled a ' . $rollDiceResult;
    echo 'Your multiplier is a ' . $multiplierResult;
    echo 'Your prize money is ' . ($multiplierResult * $rollDiceResult);
    $i = rand(0,1);
    if ($i === 0) {
          echo $heads1;
    } else {
          echo $heads2;
    }

} else if ($newNumber === 1) {
    $rollDiceResult = rollDice();
    $multiplierResult = prizeMultiplier();
    echo 'You rolled a ' . $rollDiceResult;
    echo 'Your multiplier is a ' . $multiplierResult;
    echo 'Your prize money is ' . ($multiplierResult * $rollDiceResult);
    $i = rand(0,1);
    if ($i === 0) {
        echo $tails1;
    } else {
        echo $tails2;
    }

} else {
    $rollDiceResult = rollDice();
    $multiplierResult = prizeMultiplier();
    echo 'You rolled a ' . $rollDiceResult;
    echo 'Your multiplier is a ' . $multiplierResult;
    echo 'Your prize money is ' . ($multiplierResult * $rollDiceResult);
    $i = rand(0,1);
    if ($i === 0) {
        echo $prize1;
    } else {
        echo $prize2;
    }
}

