<?php
   function least($numArray){
       if (empty($numArray)){
           return null;
       }
       $min = $numArray[0];
       for ($i = 0; $i < count($numArray); $i++){
           if($numArray[$i] < $min) {
               $min = $numArray[$i];
           }
       }
       return $min;
     
   }
echo least([2,3,4,1]);