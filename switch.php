<?php

 $a=200;
 $b=300;
 $op="*";

 switch ($op) {
     case '+':
         echo $a + $b;
         break;
     case '-':
        echo $a - $b;
        break;
    case '/':
        echo $a / $b;
        break;
    case '*':
        echo $a * $b;
        break;
     default:
         echo 'invalid operator';
         break;
 }


 $result=match($op){
    "+"=> $a + $b,
    '-'=> $a - $b,
    '*'=> $a * $b,
    '/'=> $a / $b,
    default=>'invalid operator'
 };

 echo $result;