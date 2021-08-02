<?php

// 課題１
function double($number) {
    $result = ($number*2);
    return $result;
}


// 課題２
function add($a, $b) {
    $result = ($a + $b);
    return $result;
}


// 課題３
function  answer1($arr) {
    $result = array_product ($arr);
    return $result;
}


function answer2($arr) {
    $result = 1;
    foreach ($arr as $number){
     $result *= $number;
    }
    return $result;
}


// 課題４
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
  if ( $max_number < $a ) {
      $max_number = $a;
  }
 }

 return $max_number;
 }


// 課題５
// strip_tags　タグの除去
$text = '<p>Test paragraph.</p><!-- Comment --> <a href = "#fragment">Other text</a>';
echo strip_tags ($text);

// array_push 配列の最後に要素を追加
$colors = array("red" , "blue");
array_push ($colors, "green" ,"pink");
print_r ($colors);

// array_merge　配列をマージする
$array1 = array(1, 2, "animal"=>"dog", 5);
$array2 = array("a", "animal"=>"cat",6);
$result = array_merge ($array1,$array2);
print_r($result);

// mktime 日付をUnixのタイムスタンプとして取得する
// ローカルの日付/時刻を書式化する
date_default_timezone_set('UTC');
echo "July 30, 2021 is on a ". date("l" , mktime(0, 0, 0, 7, 30, 2021));
