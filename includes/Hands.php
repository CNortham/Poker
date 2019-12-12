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
        $number = array("2","3","4","5","6","7","8","9","J","Q","K");
        $suit = array("S","C","H","D");

        //Creates first card//
        $select_number = array_rand($number);
        $select_suit = array_rand($suit);
        $card = $number[$select_number].$suit[$select_suit]." ";
        $hand_array = array($card);

        //Fills rest of hand//
        while($i != 4 )
        {
            $select_number = array_rand($number);
            $select_suit = array_rand($suit);
            $card = $number[$select_number].$suit[$select_suit]." ";
            array_push($hand_array,$card);
            $i++;
        }
        $playerOne = $hand_array[0].$hand_array[1].$hand_array[2].$hand_array[3].$hand_array[4];
        echo $playerOne;
    }

    function playerTwoHand()
    {
        //Creates array of possible cards//
        $number = array("2","3","4","5","6","7","8","9","J","Q","K");
        $suit = array("S","C","H","D");

        //Creates first card//
        $select_number = array_rand($number);
        $select_suit = array_rand($suit);
        $card = $number[$select_number].$suit[$select_suit]." ";
        $hand_array = array($card);

        //Fills rest of hand//
        while($i != 4 )
        {
            $select_number = array_rand($number);
            $select_suit = array_rand($suit);
            $card = $number[$select_number].$suit[$select_suit]." ";
            array_push($hand_array,$card);
            $i++;
        }
        $playerTwo = $hand_array[0].$hand_array[1].$hand_array[2].$hand_array[3].$hand_array[4];
        echo $playerTwo;
        }     
}
















?>