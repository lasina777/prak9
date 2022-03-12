<?php
function Number($n) {
    if($n ==0) {
        return 1;
    }
    else {
        return $n * Number($n-1);
    }
}
print_r(Number(5)."\n");