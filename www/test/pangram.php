<?php
//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//
function isPangram($string)
{
    $alphabet = 'azertyuiopqsdfghjklmwxcvbn';

    //compare et calacule les difference entre des tableaux (array_diff), tab1[$alphabet] tab2[$tring] doit contenir tab1->tab2 
    $AlphabetCompare = array_diff(str_split($alphabet), str_split(strtolower($string)));

    if(empty($AlphabetCompare)){
        return true;
    }
    return false;
    
}