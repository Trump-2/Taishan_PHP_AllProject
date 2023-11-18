<style>
  table {
    border: 2px solid black;
    border-collapse: collapse;
  }


  td {
    border: 2px solid black;
    padding: 3px 9px;
  }
</style>
<h2>九九乘法表</h2>
<?php
echo "<table>";
echo "<tr>";
for ($j = 1; $j <= 9; $j++) {
  echo "<td>";
  for ($i = 1; $i <= 9; $i++) {
    // 1 * 1 = 1
    echo "$j * $i = " . ($j * $i);
    echo "<br>";
  }
  echo '</td>';
}
echo "</tr>";
echo "</table>";
?>
<h2>九九乘法表-有表頭</h2>
<?php
echo "<table>";
for ($j = 0; $j < 10; $j++) {
  if ($j === 0) {
    echo "<tr style='background-color:#bbb'>";
  } else {
    echo "<tr>";
  }
  for ($i = 0; $i < 10; $i++) {
    if ($i === 0) {
      echo "<td style='background-color:#bbb'>";

    } else {

      echo "<td>";
    }
    if ($j === 0 && $i === 0) {
      echo '';
    } else if ($j === 0) {
      echo $i;
    } else if ($i === 0) {
      echo $j;
    } else {
      echo $j * $i;
    }

    echo "</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>

<h2>九九乘法表-左下角版</h2>
<?php
echo "<table>";
for ($j = 0; $j < 10; $j++) {
  if ($j === 0) {
    echo "<tr style='background-color:#bbb'>";
  } else {
    echo "<tr>";
  }
  for ($i = 0; $i < 10; $i++) {
    if ($i === 0) {
      echo "<td style='background-color:#bbb'>";

    } else {

      echo "<td>";
    }
    if ($j === 0 && $i === 0) {
      echo '';
    } else if ($j === 0) {
      echo $i;
    } else if ($i === 0) {
      echo $j;
    } else if ($j > $i) {
      echo '';
    } else {
      echo $j * $i;
    }

    echo "</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>

<?php
// for ($i=1; $i <= 9; $i++) { 
//   // 1 * 1 = 1
//   echo "2 * $i = " . (2 * $i);
//   echo "<br>";
// }
// echo "<br>";
// for ($i=1; $i <= 9; $i++) { 
//   // 1 * 1 = 1
//   echo "3 * $i = " . (3 * $i);
//   echo "<br>";
// }
?>

<h2>尋找字串</h2>

<?php
$source = '印出尋找到的單字或字母所在句子中的位置';
$target = '單字';

$flag = false;
$start = 0;
while ($flag === false) {
  $sub = mb_substr($source, $start, mb_strlen($target));
  if ($sub === $target) {
    $flag === true;
    break;
  }
  $start++;
}

echo '找到了，位置在 ' . $start;
echo "<br>";
echo "原始字串：印出尋找到的單字或字母所在句子中的位置";
echo "<br>";
echo "尋找目標：單字";

/*
5 ( 句子長度 )
1 ( 字串長度 )=> 5 ( 次數 )
2 => 4
3 => 3
4 => 2
 
n - x + 1 = c
n = x + c - 1

*/