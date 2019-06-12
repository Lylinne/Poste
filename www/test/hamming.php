<?php

function distance($a, $b)
{
    if(strlen($a) !== strlen($b))
    {
        throw new \Exception("DNA strands must be of equal length.");
    }


    return $hamming_distance = count(array_diff_assoc(str_split($a), str_split($b)));
}