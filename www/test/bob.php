<?php
//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//
class Bob
{
   /**
    * Respond to an input string
    *
    * @param string $str
    * @return string
    */
   public function respondTo($str)
   {
       if(ctype_upper($str) || (strtoupper($str) === $str && preg_match('/[A-Z]/', $str))) return 'Whoa, chill out!';
        if(substr(trim($str), -1) === '?') return 'Sure.';
        if(!trim($str)) return 'Fine. Be that way!';
        return 'Whatever.';
       
   }
}
//bob_test.php (modifié) 