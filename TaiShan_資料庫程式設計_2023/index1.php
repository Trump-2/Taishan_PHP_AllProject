<?php
// 變數宣告，以【$】開頭
$age = 30;
$name = "吳沂鴻";

// . 用來連接字串
echo $name . $age;
echo "<br>";

// 常數宣告方式
define('PI', 3.14159);
echo PI;
echo "<br>";
const PI2 = 3.1415926;
echo PI2;
echo "<br>";

// function test()
// {
//   return PI;
// }

$a = 10;
$b = 50;
$temp = $a;
$a = $b;
$b = $temp;
echo $a, $b;
echo "<br>";
// 流程控制
$score = 69;
echo "我的成績：" . $score;
echo "<br>";
if ($score >= 60)
  echo "及格";
else
  echo "不及格";
echo "<br>";

if ($score >= 90 && $score <= 100)
  $level = 'A';
if ($score >= 80 && $score <= 89)
  $level = "B";
if ($score >= 70 && $score <= 79)
  $level = "C";
if ($score >= 60 && $score <= 69)
  $level = 'D';
if ($score < 60)
  $level = "E";

// $level = "A";
switch ($level) {
  case 'A':
    echo "表現優良，請繼續保持";
    break;
  case 'B':
    echo "值得肯定，還有進步空間";
    break;
  case 'C':
    echo "需要更多的練習";
    break;
  case 'D':
    echo "需要加強基本功";
    break;
  default:
    echo "是否無心學習?";
    break;
}
echo "<br>";

$year = 2007;
if ($year % 4 !== 0)
  echo "平年";
else if ($year % 4 === 0 && $year % 100 !== 0)
  echo "閏年";
else if ($year % 100 === 0 && $year % 400 !== 0)
  echo "平年";
else
  echo "閏年";


$scoreArr = [59, 70, 89, 65];
foreach ($scoreArr as $key => $value) {
  echo "第 ". $key + 1 ." 位同學的成績為 " . $value . "." . "<br>";
}

?>