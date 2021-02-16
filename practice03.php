<?php
// 1.
$name = 'Takahiro';
if ($name == 'Takahiro') {
  echo '私は' . $name . 'です';
} else {
  echo $name . 'ではありません';
}
echo "\n";

// 2.
$total = 0;
for ($i = 1; $i <= 1000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

// 3.
$fruits = ['みかん', 'なし', 'バナナ', 'スイカ', 'ブドウ'];
foreach ($fruits as $fruit) {
  echo $fruit;
  echo "\n";
}

// 4.
$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
  if ($i % 5 == 0) {
    echo $i;
    echo "\n";
  }  
}
/*バグの修正
for文のループを続ける条件に「=」を追加
if文の中の「echo $i」の後に「;」を追加
縦に出力されるように「echo "\n";」を追加
*/
