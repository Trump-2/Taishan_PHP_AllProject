<h1>利用程式來產生陣列</h1>
<style>
table {
  /* border: 3px solid black; */
  border-collapse: collapse;
}

td {
  border: 3px solid black;

  width: 5%;
  text-align: center;
}
</style>
<?php

$nineMultipleNine = [];
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= 9; $j++) {
    $nineMultipleNine[] = "$i * $j = " . ($i * $j);
  }
}
echo "<pre>";
print_r($nineMultipleNine);
echo "</pre>";

// 也可以用 foreach 來做，且比較適合
for ($i = 0; $i <= count($nineMultipleNine) - 1; $i++) {
  echo $nineMultipleNine[$i];
  if ($i % 9 == 8) {
    echo "<br>";
  }
}

// 上面的 foreach 版本
foreach($nineMultipleNine as $key => $value) {
  echo $value;
  if($key % 9 == 8) {
    echo "<br>";
  }
}

echo"<br>";
// echo "<table>";
// for ($i = 0; $i <= count($nineMultipleNine) - 1; $i++) {
//   // echo $nineMultipleNine[$i];
//   if ($i % 9 == 0) {
//     echo "<tr>
//     <td>$nineMultipleNine[$i]</td>";
//   } else if ($i % 9 == 8) {
//     echo "<td>$nineMultipleNine[$i]</td></tr>";
//   } else {
//     echo "<td>$nineMultipleNine[$i]</td>";
//   }
// }
// echo "</table>";

echo '<table>';
foreach($nineMultipleNine as $key => $value) {
  if($key % 9 == 0) {
    echo "<tr>
          <td>$value</td>";
  }
  else if($key % 9 == 8) {
    echo "<td>$value</td>
          </tr>";
 
  } else {
    echo "<td>$value</td>";
  }
}
echo "</table>";