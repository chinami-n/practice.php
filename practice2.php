<?php

$name = "千波";
if ($name == "○○") {
    echo "私は千波です。";
} else {
    echo "私は千波ではありません。";
}


$total = 0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;


$fruits = array("りんご", "ぶどう", "みかん", "いちご", "もも");
foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "\n";
}


$start = 1;
$end = 100;
for ($i =$start; $i <= $end; $i++){
if ($i % 5 == 0)
echo $i;
}


