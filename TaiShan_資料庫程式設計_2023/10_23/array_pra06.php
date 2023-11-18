<h1>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h1>
<h3>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</h3>
<?php
$a = [2, 4, 6, 1, 8];

echo "<pre>";
print_r($a);
echo "</pre>";

// 自己做出反轉陣列的效果
// for ($i = 0; $i < floor(count($a) / 2); $i++) {
//   $tmp = $a[$i];
//   $a[$i] = $a[count($a) - 1 - $i];
//   $a[count($a) - 1 - $i] = $tmp;
// }

// echo "<pre>";
// print_r($a);
// echo "</pre>";

for ($i=0; $i < floor(count($a) / 2); $i++) { 
  $tmp = $a[$i];
  $a[$i] = $a[count($a) - 1 - $i];
  $a[count($a) - 1 - $i] = $tmp;
}

echo "<pre>";
print_r($a);
echo "</pre>";

// 使用 php 內建函數
echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";