<?php
function double($a){
    return $a *2;
}
echo double(5);
echo "\n";
function sum($a,$b){
    return $a + $b;
}
echo sum(5,2);
echo "\n";
function multi($arr){
    $result = 1;
    foreach ($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo multi(array(1, 3, 5 ,7, 9));
echo "\n";
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    if ($max_number < $a){
        $max_number = $a;
    }
  }

  return $max_number;
}
echo max_array(array(1, 3, 10 ,7, 9));
echo "\n";
$members=array("一郎","二郎","三郎");
array_push($members,"四郎","五郎");
print_r($members);