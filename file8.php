<?php
function palindrome($string) {
    if ($string == strrev($string))
        return "Да";
    else
        return "Нет";
}
echo palindrome('pik')."<br>";
echo palindrome('pip');