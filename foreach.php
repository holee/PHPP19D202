<?php

$arr=[1,2,1,4,3,6,7];
    //0 1 2 3 4 5 6
echo $arr[0];
echo $arr[6];
foreach($arr as $k=>$v){
  if($v==3) break;
  echo "<p>{$k}-{$v}</p>";
}
foreach($arr as $v){
  if($v % 2 !=0) continue;
    echo "<p>Odd Number:{$v}</p>";
}