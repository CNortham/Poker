<?php

$playerOne = 0;
$playerTwo = 0;

$unique_p1_hand = count(array_unique($p1_hand_array));

//Duplicate Check//
if($unique_p1_hand == 5)
{
    $Same = "No Duplicates";
}
elseif($unique_p1_hand == 2)
{
    $Same = "Three of a Kind";
}
elseif($unique_p1_hand == 3)
{
    $Same = "Two Pairs";
}
elseif($unique_p1_hand == 4)
{
    $Same = "Pair";
}

//Highest Card//


/*if($playerOne > $playerTwo)
{
    $win = echo "Player One Wins";
}
elseif($playerOne < $playerTwo)
{
    $win = echo "Player Two Wins";
}*/
?>