<?php

//Numbers
//2-3-4-5-6-7-8-9-J-Q-K

//Suits
//H-D-S-C

class createHands
{
    function playerOneHand()
    {
        //Creates array of possible cards//
        $number = array("10","J","Q","K","A");
        $suit = array("H");

        // Create array and counter
        $p1_hand_array = [];
        $i = 0;

        // do while to create cards
        do {
            $select_number = array_rand($number);
            $select_suit = array_rand($suit);
            $card = $number[$select_number].$suit[$select_suit];
            
            if(!in_array($card, $p1_hand_array))
            {
                array_push($p1_hand_array,$card);
                $i++;
            }
        }
        while($i != 4);

        var_dump($p1_hand_array);

       // include("includes\cards.php");
        //include("includes\logic.php");

    }

    /*function playerTwoHand()
    {
        //Creates array of possible cards//
        $number = array("2","3","4","5","6","7","8","9","J","Q","K","A");
        $suit = array("S","C","H","D");

        //Creates first card//
        $select_number = array_rand($number);
        $select_suit = array_rand($suit);
        $card = $number[$select_number].$suit[$select_suit]." ";
        $p2_hand_array = array($card);

        //Fills rest of hand//
        while($i != 4 )
        {
            $select_number = array_rand($number);
            $select_suit = array_rand($suit);
            $card = $number[$select_number].$suit[$select_suit]." ";
            array_push($p2_hand_array,$card);
            $i++;
        }
        $playerTwo = $p2_hand_array[0].$p2_hand_array[1].$p2_hand_array[2].$p2_hand_array[3].$p2_hand_array[4];
        echo $playerTwo;
        }     */
}
















?>