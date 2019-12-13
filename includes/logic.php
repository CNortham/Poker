<?php

$playerOne = 0;
$playerTwo = 0;
$result = "";
//$unique_p1_hand = count(array_unique(substr($p1_hand_array,0,1)));

//Royal Flush//
$royal_flush_heart = array("10H ","JH ","QH ","KH ","AH ");
$royal_flush_spade = array("10S ","JS ","QS ","KS ","AS ");
$royal_flush_club = array("10C ","JC ","QC ","KC ","AC ");
$royal_flush_diamond = array("10D ","JD ","QD ","KD ","AD ");

//Logic Check//
$royal_flush_H_view = array_intersect($p1_hand_array,$royal_flush_heart);
$royal_flush_S_view = array_intersect($p1_hand_array,$royal_flush_spade);
$royal_flush_C_view = array_intersect($p1_hand_array,$royal_flush_club);
$royal_flush_D_view = array_intersect($p1_hand_array,$royal_flush_diamond);

//Count Check//
$heart = count($royal_flush_H_view);
$spade = count($royal_flush_S_view);
$club = count($royal_flush_C_view);
$diamond = count($royal_flush_D_view);

//Is Royal Flush?//
if($heart == 5)
{
    $result = "Royal Flush";
}
elseif($spade == 5)
{
    $result = "Royal Flush";
}
elseif($club == 5)
{
    $result = "Royal Flush";
}
elseif($diamond == 5)
{
    $result = "Royal Flush";
}




//Straight Flush//
$straight_flush_heart = array("");

$four_of_a_kind = "";
$full_house = "";
$flush = "";
$straight = "";
$three_of_a_kind = "";
$two_pair = "";
$pair = "";
$high_card = ""; 

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