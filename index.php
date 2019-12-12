<?php

include("includes\Hands.php");
include("includes\logic.php");
$Hand = new createHands();

$Hand->playerOneHand();
echo "<br>";
$Hand->playerTwoHand();

?>
