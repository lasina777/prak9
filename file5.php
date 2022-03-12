<?php
function reverse($str1) {
    $n = strlen($str1);
    if($n == 1)  {
        return $str1;
    }
    else {
        $n--;

        return reverse(substr($str1,1, $n)) . substr($str1, 0, 1);
    }
}
print_r(reverse('qwe')."\n");