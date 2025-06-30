<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        // [2,3,4]   == 7

       for($i = 0; $i < count($nums); $i++){
           for ($j = 0 + 1; $j < count($nums); $j++){
               if ($nums[$i] + $nums[$j] == $target) {
                    return [$i,$j];
               };
           };
       };
    }
}