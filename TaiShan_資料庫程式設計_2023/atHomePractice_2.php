<?php
echo '1 加到 100 的結果是 :';
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
  $sum += $i;
}
echo $sum;
?>

<h1>for 練習</h1>
<h3>使用 for 迴圈來產生以下的數列</h3>
<ul>
  <li>1,3,5,7,9……n</li>
  <li>10,20,30,40,50,60……n</li>
  <li>3,5,7,11,13,17……97</li>
</ul>

<?php
for ($i = 1; $i <= 100; $i += 2)
  echo "$i,";

echo "<hr>";

$n = 50;
for ($i = 1; $i <= $n; $i++)
  echo $i * 10 . ',';

echo "<hr>";
?>

<h3>判斷是否為質數</h3>
<?php
$a = 59;
$flag = true;
for ($i = 2; $i < ($a / 2); $i++) {
  if ($a % $i === 0) {
    $flag = false;
    break;
  }
}
if ($flag === true) {
  echo "$a 是質數";
} else {
  echo "$a 不是質數";
}
?>

<h3>巢狀迴圈</h3>
<?php

$n = 100;
for ($j = 3; $j <= $n; $j++){
  $flag = true;
for ($i = 2; $i <= ($j / 2); $i++) {
  if ($j % $i === 0) {
    $flag = false;
    break;
  }
}
if ($flag === true) {
  echo "$j,";
} 
}

echo "<hr>";
?>

<?php
$sum = 0;
$i = 1;
while($i <= 100) {
  $sum = $sum + $i;
  $i ++ ;
}

echo "1 加到 100 的結果是 $sum";
echo "<hr>";

$sum = 0;
$i = 1;
while ($i <= 100) {
  echo '當 $i = ' . "$i 時, " . '$sum + $i 的結果為：' . "$sum + $i = " . ($sum + $i);
  echo "<br>";

  // 將目前的數字加到總和中
  $sum += $i;

  // 增加計數器
  $i++;  
}