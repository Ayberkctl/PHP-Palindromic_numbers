<?php

function Palindrom($value){
    if($value>10  && $value == strrev($value)){
        return true;
    } 
}
function getPalindromNumbers($x,$y){
    for($i = $x;$y > 0; $i++){
        if($i < 0){
            $ri= abs($i);
            if(Palindrom($ri)){
                echo '/-'.$ri.'/ ';
                $y--;
            }
        }else if($i > 0 && Palindrom($i)){
            echo '/'. $i .'/ ';
            $y--;
        }       
    }
}

$x = 20;
$y = 4;  

getPalindromNumbers($x,$y);
    


