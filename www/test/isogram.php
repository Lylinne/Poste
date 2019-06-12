<?php
//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//
function isIsogram($word)
{
    $word = mb_strtolower(str_replace([' ', '-'], '', $word));
    $word = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
    return count(array_unique($word)) == count($word) ? true : false;
}