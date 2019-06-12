<?php




function sumOfSquares($int)
{
    $result = 0;
    for($i=0; $i<=$int; $i++)
    {
        $result += $i**2;
    }
    return $result;
}

function squareOfSums($int)
{
        $result = 0;
        for($i=0; $i<=$int; $i++)
        {
            $result += $i;
        }
        return $result**2;
}

function difference($int)
{
    return squareOfSums($int) - sumOfSquares($int);
} 



