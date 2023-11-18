<?php

$array = [5, 7, 13, 2, 24, 15];
$score = [
  '姓名' => '小明',
  '成績' => 98
];

echo in_array(13, $array);

echo "<br>";

// 因為 in_array () 的回傳結果為 bool，所以常拿來作條件判斷
if (in_array(13, $array)) {
  echo "在陣列中";
} else {
  echo "不在陣列中";
}

// 將一個 array 的 keys 取出，作為另一個陣列的元素；回傳一 array
echo "<pre>";
print_r(array_keys($score));
echo "</pre>";

// 分割字串，轉成陣列
$ss = "Today is a good day";
$tt = explode(" ", $ss);
print_r($tt);

// 將陣列合併成字串
$cc = implode("-", $tt);
echo ($cc);


echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

rsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";
