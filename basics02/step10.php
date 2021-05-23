<?php
function isPalindrome($str){
    if ($str == strrev($str)){
        return $str . " is a palindrome";
    }
    else{
        return $str . " is not a palindrome";
    }
}
?>