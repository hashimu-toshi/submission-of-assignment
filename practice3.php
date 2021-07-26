<?php
    $name = "Toshihiro";
    if ($name = "Toshihiro") {
        echo "私はとしひろです。";
    } else{
        echo "としひろではありません。";
    }
 ?>
 
 <?php
    $total = 0;
    
    for ($i = 0 ; $i <= 10000 ; $i++ ) {
        $total += $i;
    }
    echo $total;
 ?>
 
 <?php
    $fruits = array ("peach" , "cherry" , "pear" , "water-melon" , "banana");
    foreach ($fruits as $fruit) {
        echo $fruit;
        echo "\n";
    }
 ?>
 
<?php
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  if(($i % 5) == 0){
    echo $i;
  }
}
?>