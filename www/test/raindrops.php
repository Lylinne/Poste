<?php
//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//
function raindrops($num)
{
    $result = '';

    if($num %3 == 0)
    {
        $result .= 'Pling';
    }

    if($num %5 == 0)
    {
        $result .= 'Plang';
    }

    if($num %7 == 0)
    {
        $result .= 'Plong';
    }
    if (!$result)
    {

        $result .= $num;
    }

    return $result;
}