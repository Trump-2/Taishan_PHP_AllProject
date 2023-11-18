<h1>找出五百年內的閏年</h1>
<ul>
  <li>請依照閏年公式找出五百年內的閏年</li>
  <li>使用陣列來儲存閏年</li>
  <li>使用迴圈來印出閏年</li>
</ul>

<!-- 找 2023 到 2523 年 -->

<?php
// $leapYears = [];
// for ($year = 2023; $year <= 2523; $year++) {
//   if ($year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0)) {
//     $leapYears[] = $year;
//   }
// }

// foreach ($leapYears as $each) {
//   echo $each . ", ";
// }
// echo "<br>";
// echo count($leapYears);

$leapYears = [];
for($year = 2023; $year <= 2523; $year++) {
  if($year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0)) {
    $leapYears[] = $year;    
  }
}

foreach($leapYears as $value) {
  echo "$value<br>"; 
}
echo "未來五百年內會有 " . count($leapYears) . " 個閏年";