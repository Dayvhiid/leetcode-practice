<?php
function bubblesort($numArray){
       for($i = 0; $i < count($numArray) - 1; $i++){
            for ($j = 0; $j < count($numArray) - $i - 1; $j++){
                  if ($numArray[$j] > $numArray [$j + 1]){
                      //swapping now
                      $temp = $numArray[$j];
                      $numArray[$j] = $numArray[$j+1];
                      $numArray[$j+1] = $temp;
                  }
            }
       }
      return $numArray;
   }
   
   print_r(bubblesort([3,2,1,3,3,4,2]));