<?php
$name = "Toshihiro";
if ($name == "Toshihiro") {
    echo "私はToshihiroです。";
} else{
    echo "Toshihiroではありません。";
}

echo "\n";

$total = 0;

for ($i = 1 ; $i <= 10000 ; $i++ ) {
    $total += $i;
}
echo $total;

echo "\n";

$fruits = array ("peach" , "cherry" , "pear" , "water-melon" , "banana");
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){

if(($i % 5) == 0){
    echo $i;
    echo "\n";
  }
}