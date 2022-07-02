<?php

/*
algorithm of binary search
*/

$numbers = [1,2,3,4,5,6,7,8,9,10];


// First solution
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

// Final soluction
function binarySearch2($number, $array) {
    $init = 0;
    $finish = count($array) - 1;
    $mid = ceil(($init + $finish) / 2);
    $n = $array[$mid];

    while($init < $finish) {
        $n = $array[$mid];
        if($number == $array[$mid]){
            return $mid;
        } else if($array[$mid] > $number){
            $finish = $mid;
            $mid = ceil(($init + $finish) / 2);
        } else {
            $init = $mid;
            $mid = ceil(($init + $finish) / 2);
        }
    }

    return -1;
}


// Results and applications
var_dump(binarySearch2(7,$numbers));
var_dump(binarySearch2(5,$numbers));
var_dump(binarySearch2(11,$numbers));


