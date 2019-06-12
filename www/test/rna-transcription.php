<?php
//
// This is only a SKELETON file for the “Hamming” exercise. It’s been provided as a
// convenience to get you started writing code faster.
//
function toRna($strand)
{
   $tabAdn =['G' => 'C', 'C' => 'G', 'T' => 'A', 'A' => 'U'];
   $rep = "";

   $split = str_split($strand);

   foreach($split as $key => $value )
   {
      $rep .= $tabAdn[$value]; 
   }
   return $rep;
}