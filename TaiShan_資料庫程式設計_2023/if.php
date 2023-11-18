<?php

$score = 55;
$score += 20;
echo "我的成績：" . $score;
echo "<br>";

echo "判斷為：";
if ($score >= 90) {
  echo "great";
} else if ($score >= 80) {
  echo "good";
} else if ($score >= 70) {
  echo "normal";
} else if ($score < 60) {
  echo "bad";
}
echo "<br>";
echo "<br>";
// echo "<hr>";
$number = 55;
echo "數字：" . $number;
echo "<br>";

echo "判斷為：";
if ($number % 2 == 0)
  echo "偶數";
else
  echo "奇數";
// 為甚麼印不出來
echo false;

echo "<br>";
echo "<br>";

$day = "日";
echo "星期：" . $day;
echo "<br>";

switch ($day) {
  case "一":
    echo "資料庫";
    break;
  case "二":
    echo "視覺影像";
    break;
  case "三":
    echo "網頁編輯";
    break;
  case "四":
    echo "網頁動態";
    break;
  case "五":
    echo "資訊網路";
    break;
  default:
    echo "放假";
}
echo "<br>";
echo "<br>";

$score2 = 70;
echo "成績：" . $score2;
echo "<br>";

switch (true) {
  case $score2 >= 90:
    echo "A";
    break;
  case $score2 >= 80;
    echo "B";
    break;
  case $score2 >= 70;
    echo "C";
    break;
  case $score2 >= 60;
    echo "D";
    break;
  default:
    echo "E";
    break;
}

echo "<br>";
if($score>=90 && $score<=100){
    $level="A";
}
if($score>=80 && $score<=89){
    $level="B";
}
if($score>=70 && $score<=79){
    $level="C";
}
if($score>=60 && $score<=69){
    $level="D";
}
if($score>=0 && $score<=59){
    $level="E";
}