<h2>印星星</h2>
<?php

// 直角三角形
// echo "* <br>";
// echo "** <br>";
// echo "*** <br>";
// echo "**** <br>";
// echo "***** <br>";
// echo "<hr>";

$amount = 10;

for ($i = 0; $i < $amount; $i++) {
  for ($j = 0; $j <= $i; $j++) {
    echo "*";
  }
  echo "<br>";
}
echo "<br>";
// 倒直角三角形
for ($i = 4; $i >= 0; $i--) {
  for ($j = 0; $j <= $i; $j++) {
    echo "*";
  }
  echo "<br>";
}
echo "<br>";

// 正三角形
echo "&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;<br>";
echo "&nbsp;&nbsp;&nbsp;***&nbsp;&nbsp;&nbsp;<br>";
echo "&nbsp;&nbsp;*****&nbsp;&nbsp;<br>";
echo "&nbsp;*******&nbsp;<br>";
echo "*********<br>";
echo "<br>";
?>

<style>
  * {
    font-family: 'Courier New', Courier, monospace;
    line-height: 0.5;
  }
</style>
<?php
for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < (4 - $i); $j++) {
    echo "&nbsp";
  }
  for ($k = 0; $k < (2 * $i + 1); $k++) {
    echo "*";
  }
  echo "<br>";
}
?>
<h2>倒正三角形</h2>
<?php
for ($i = 4; $i >= 0; $i--) {
  for ($j = 0; $j < (4 - $i); $j++) {
    echo "&nbsp";
  }
  for ($k = 0; $k < (2 * $i + 1); $k++) {
    echo "*";
  }
  echo "<br>";
}
?>

<h2>菱形</h2>
<?php
for ($i = 0; $i < 9; $i++) {

  if ($i <= 4) {
    $tmp = $i;
  } else {
    $tmp--;
  }

  for ($j = 0; $j < (4 - $tmp); $j++) {
    echo "&nbsp";
  }
  for ($k = 0; $k < (2 * $tmp + 1); $k++) {
    echo "*";
  }
  echo "<br>";
}
?>

<h2>矩形</h2>
<?php
for ($i = 0; $i < 7; $i++) {
  # code...
  for ($j = 0; $j < 7; $j++) {
    # code...
    if ($i === 0 || $i === 6) {
      echo "*";
    } else {
      if ($j === 0 || $j === 6) {
        echo "*";
      } else {
        echo "&nbsp;";
      }
    }
  }
  echo "<br>";
}
?>

<h2>矩形對角線加 CSS</h2>
<?php
for ($i = 0; $i < 7; $i++) {
  # code...
  for ($j = 0; $j < 7; $j++) {
    # code...
    if ($i === 0 || $i === 6) {
      echo "*";
    } else {
      if ($j === 0 || $j === 6) {
        echo "*";
      } else if ($i === $j || $i === 6 - $j) {
        echo "<span style='color:red'>*</span>";
      } else {
        echo "&nbsp;";
      }
    }
  }
  echo "<br>";
}
?>

<h2>矩形加對角線</h2>
<?php

for ($i = 0; $i < 7; $i++) {

  for ($j = 0; $j < 7; $j++) {
    if ($i == 0 || $i == 6) {
      echo "*";
    } else if ($j == 0 || $j == 6 || $j == $i || $i + $j == 6) {
      echo "*";
    } else {
      echo "&nbsp;";
    }
  }
  echo "<br>";
}
?>