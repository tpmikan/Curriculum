<?php
// 1.
$a = 3;
$b = 7;
echo $a + $b;

// 2.
$array_month = ['１月', '２月', '３月', '４月', '５月', '６月', '７月', '８月', '９月', '１０月', '１１月', '１２月'];
echo $array_month[7];

// 3.
$hello = 'Hello,';
$name = 'Takahiro';
$world = "'s,World!";
echo $hello . $name . $world;

// 4.
$tech_boost = 'tech';
echo $tech_boost .= '_boost';

// 5.
$ad_2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $ad_2018_calendar["December"];

/* バグの修正
変数の始めが数字　->　変数の始めに「ad」を追加
連想配列が「｛｝」で囲まれている　->　「［］」に変更
２月と３月の区切りが「、」になっている　->　「,」に変更
「"June"」と「"6月"」の間の記述が足りない　->　「>」を追加
10月の左右に「"」がない　->　10月の左右に「"」を追加
*/
