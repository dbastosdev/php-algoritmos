<?php

/*
algorithm of binary search
*/

$numbers = [1,2,3,4,5,6,7,8,9,10];

function binarySearch($number, $array) {
    $init = $array[0];
    $finish = $array[count($array) - 1];
    $mid = ($init + $finish) / 2;

    while($finish > $init) {
        if($number == $mid){
            return true;
        } else if($mid > $number){
            $finish = $mid;
            $mid = ($init + $finish) / 2;
        } else {
            $init = $mid;
            $mid = ($init + $finish) / 2;
        }
    }

    return false;
}

// Results and applications
var_dump(binarySearch(7,$numbers));
var_dump(binarySearch(5,$numbers));
var_dump(binarySearch(50,$numbers));


