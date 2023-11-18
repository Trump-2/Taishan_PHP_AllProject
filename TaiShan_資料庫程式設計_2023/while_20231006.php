<?php

$sum = 0;
$i = 1;
while ($i <= 100) {
  $sum += $i;

  $i++;
}

echo "1 加到 100 的結果是 " . $sum;
echo "<hr>";


$sum = 0;
$i = 1;

while ($i <= 100) {
  // echo '當$i=' . $i . "時";
  // echo '$sum+$i的結果是';
  // echo $sum . " + " . $i . "=";
  // echo $sum + $i;
  // echo "<br>";

  echo '當$i = ' . "$i 時," . '$sum + $i 的結果為：';
  echo "$sum + $i = " . ($sum += $i);
  echo "<br>";

  // 將目前的數字加到總和中
  // $sum += $i;

  // 增加計數器
  $i++;
}