<?php
// 1.
function double($a) {
  return $a * 2;
}
echo double(5);
echo "\n";

// 2.
function f ($a, $b) {
  return $a + $b;
}
echo f(2,3);
echo "\n";

// 3.
function  multiplication ($arr) {
$b = 1;
  foreach ($arr as $a) {
    $b = $b * $a;
  }
  return $b;
}
$array = array(1, 3 ,5, 7, 9);
echo multiplication ($array);
echo "\n";

// 4.
function max_array ($arr) {
  $max_number = $arr[0];
  foreach ($arr as $a) {
    if ($max_number < $a) {
      $max_number = $a;
    }
  }
  return $max_number;  
 }  
$array = array(1,5,7,3,9,8,2);
echo max_array ($array);
echo "\n";

// 5.
  // strip_tags
  $a1 = '<h1>tech</h1> <p>boost</p>';
  echo strip_tags($a1);
  echo "\n";
  
  // array_push
  $a2 = array('Hello', '!!!');
  array_push ($a2, 'tech', 'boost');
  print_r ($a2);
  echo "\n";
 
  // array_merge
  $b1 = array('Hello', 'World!');
  $b2 = array('tech', 'boost');
  $a3 = array_merge ($b1, $b2);
  print_r ($a3);
  echo "\n";
  
  // time, mktime
  $in_six_hours = time() + (6 * 60 * 60); 
  echo '    現在 ' . date ('y/m/d h:i:s') . "\n";
  echo '６時間後 ' . date ('y/m/d h:i:s', $in_six_hours) . "\n";
  
  echo 'techboostの受講開始は ' . date('y年m月d日 h時' , mktime(10, 0, 0, 2, 15, 2021)) . ' からです' . "\n";
  
  // date
  date_default_timezone_set ('Asia/Tokyo');
  echo '現在時刻は' . date('y年m月d日 h時i分s秒') . ' です' . "\n";
  
?>