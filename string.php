<?php

 //------------String of array-------------
 $strings = ["Hello", "World", "PHP", "Programming"];

//---------To count vowels in string function------
    function vowelsCount($string){
         $vowels = ['a', 'e', 'i', 'o', 'u'];
         $count = 0;

         for($i = 0; $i < strlen($string); $i++){
             if(in_array($string[$i], $vowels)){
                $count++;             
            }
             
        }
        return $count;
    }
//------------Each string in array-----------

    foreach($strings as $string){
        $vowelCount = vowelsCount($string);
        $reversedString = strrev($string);
        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
    }