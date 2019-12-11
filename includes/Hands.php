<?php

//Numbers
//2-3-4-5-6-7-8-9-J-Q-K

//Suits
//H-D-S-C




class createHands
{
    function playerOneHand()
    {
        $number = array("2","3","4","5","6","7","8","9","J","Q","K");
        $suit = array("S","C","H","D");

        for($i = 0; $i <= 5; $i++)
        {
            $select_number = array_rand($number);
            $select_suit = array_rand($suit);
            $card = $number[$select_number].$suit[$select_suit]." ";
            echo $card;
        }
    }

    function playerTwoHand()
    {
        $number = array("2","3","4","5","6","7","8","9","J","Q","K");
        $suit = array("S","C","H","D");

        for($i = 0; $i <= 5; $i++)
        {
            $select_number = array_rand($number);
            $select_suit = array_rand($suit);
            $card = $number[$select_number].$suit[$select_suit]." ";
            echo $card;
        }
        
    }
}

$Hand = new createHands();














?>