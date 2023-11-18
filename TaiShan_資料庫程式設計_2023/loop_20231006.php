<?php
$sum = 0;

for ($i = 1; $i <= 100; $i = $i + 1) {
  $sum += $i;
}

echo "1 加到 100 的結果是 " . $sum;

?>

<h1>for 練習</h1>
<h3>使用for迴圈來產生以下的數列</h3>
<ul>
  <li>1,3,5,7,9……n</li>
  <li>10,20,30,40,50,60……n</li>
  <li>3,5,7,11,13,17……97</li>
</ul>
<?php

$n = 200;
for ($i = 1; $i <= 100; $i += 2) {
  // echo $i . ',';
  echo "$i,";
}

// 另一種差 10 的寫法
// echo "<hr>";
// for ($i = 10; $i <= $n; $i += 10) {
//   echo "$i,";
// }

echo "<hr>";
for ($i = 1; $i <= $n; $i++) {
  echo ($i * 10) . ",";
}

echo "<hr>";
$a = 10;
$flag = true;
// %a / 2 => 能讓迴圈執行的次數再減少
// $i < ($a / 2) 要改成 <=，否則 4 會是質數

for ($i = 2; $i < ($a / 2); $i++) {
  echo "$a 除以 $i 的餘數 " . ($a % $i);
  if ($a % $i === 0) {
    $flag = false;
    break;
  }
  echo "<br>";
}

echo "<br>";

if ($flag === true)
  echo "$a" . "是質數";
else
  echo "$a " . "不是質數";

?>

<h3>巢狀迴圈</h3>
<?php
$n = 100;
$count = 0;
for ($j = 3; $j <= $n; $j++) {
  # code...
  $flag = true;
  for ($i = 2; $i <= ($j / 2); $i++) {
    // echo "$ 除以 $i 的餘數 " . ($a % $i);
    $count++;
    if ($j % $i === 0) {
      $flag = false;
      break;
    }
  }
  if ($flag === true)
    echo "$j, ";
}
echo "<br>";
echo "一共執行了" . $count . "次的程式內容";

?>
<h3>陣列</h3>
<?php

$scores = ['甲', "乙", "丙", "丁"];

for ($i = 0; $i < count($scores); $i++) {
  echo $scores[$i];
  echo "<br>";
}
echo "<br>";

// $s = $scores[0];
// $s = $scores[1];
// $s = $scores[2];
// ...
// ...
foreach ($scores as $s) {
  echo $s;
}
echo "<br>";

foreach ($scores as $k => $v) {
  echo "$k : $v";
  echo "<br>";
}
