<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        // [2,3,4]   == 7

       $map = [];
         foreach($nums as $index => $num){
            $complement = $target - $num;
            if (isset($map[$complement])){
                return [$map[$complement], $index];
            };
            $map[$num] = $index;
         }
         return [];
    }
    
}