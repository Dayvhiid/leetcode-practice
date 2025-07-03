<?php
  function fibonacci(){
      $number = [0,1]; // an array that stores the fibnacci numbers
        for($i = 0; $i < 20 ; $i++) {
            $newNum = $number[$i] + $number[$i +1 ];
            $number [] = $newNum;
        }
      print_r($number);
      }
      
fibonacci();      