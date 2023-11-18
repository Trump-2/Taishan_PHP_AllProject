<h2>直角三角形</h2>
<?php
// echo '*';
// echo '**';
// echo '***';
// echo '****';
// echo '*****';
// echo "<hr>";

// 此變數用來自由變換幾何圖形的大小
$count = 15;
// 外迴圈負責產生列數
for ($j = 0; $j < $count; $j++) {
  // 內迴圈負責印星星
  for ($i = 0; $i <= $j; $i++) {
    echo "*";
  }
  echo "<br>";
}
echo "<hr>";
?>
<h2>倒直角三角形</h2>
<?php

// 外迴圈負責產生列數
for ($j = $count; $j >= 1; $j--) {
  // 內迴圈負責印星星
  for ($i = 0; $i < $j; $i++) {
    echo "*";
  }
  echo "<br>";
}
echo "<hr>";
?>


<style>
  /* 這裡使用 universal selector 來選取所有的元素 */
  * {
    font-family: 'Courier New', Courier, monospace;
    /* 擺脫瀏覽器預設的行高 */
    line-height: 0.5;
  }

  span {
    color: red;
  }
</style>
<h2>正三角形</h2>
<?php
// echo "&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
// // = 
// // echo &nbsp;
// // echo &nbsp;
// // echo &nbsp;
// // echo &nbsp;
// // echo *;
// // echo <br>;
// echo "&nbsp;&nbsp;&nbsp;***<br>";
// // =
// // echo &nbsp;
// // echo &nbsp;
// // echo &nbsp;
// // echo *;
// // echo *;
// // echo *;
// // echo <br>;
// echo "&nbsp;&nbsp;*****<br>";
// // =
// // echo &nbsp;
// // echo &nbsp;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo <br>;
// echo "&nbsp;*******<br>";
// // =
// // echo &nbsp;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo <br>;

// echo "*********<br>";
// // =
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo *;
// // echo <br>;

// 巢狀迴圈，內層有兩個迴圈
// 外迴圈負責產生列數
for ($i = 0; $i < $count; $i++) {
  // 此迴圈負責印空白
  for ($j = 0; $j < $count - 1 - $i; $j++) {
    echo "&nbsp;";
  }

  // 此迴圈負責印星星
  for ($k = 0; $k < 2 * $i + 1; $k++) {
    echo "*";

  }
  echo "<br>";
}
echo "<hr>";
?>

<h2>倒正三角形</h2>
<?php
// 巢狀迴圈，內層有兩個迴圈
// 外迴圈負責產生列數
for ($i = $count - 1; $i >= 0; $i--) {
  // 此迴圈負責印空白
  for ($j = 0; $j < $count - 1 - $i; $j++) {
    echo "&nbsp;";
  }

  // 此迴圈負責印星星
  for ($k = 0; $k < 2 * $i + 1; $k++) {
    echo "*";

  }
  echo "<br>";
}
echo "<hr>";
?>
<h2>菱形</h2>
<?php
// 巢狀迴圈，內層有兩個迴圈

// 外迴圈負責產生列數
$mid = floor(($count * 2 - 1) / 2);
for ($i = 0; $i < $count * 2 - 1; $i++) {
  //
  if ($i <= $mid) {
    $tmp = $i;
  } else {
    $tmp--;
  }

  // 此迴圈負責印空白
  for ($j = 0; $j < $mid - $tmp; $j++) {
    echo "&nbsp;";
  }

  // 此迴圈負責印星星
  for ($k = 0; $k < 2 * $tmp + 1; $k++) {
    echo "*";

  }
  echo "<br>";
}
echo "<hr>";
?>

<h2>矩形</h2>
<?php
for ($i = 0; $i < $count; $i++) {
  for ($j = 0; $j < $count; $j++) {
    if ($i === 0 || $i === $count - 1) {
      echo "*";
    } else if ($j === 0 || $j === $count - 1) {
      echo "*";
    } else {
      // 這裡要注意不能使用 " "，只會顯示一個空白而已
      echo "&nbsp;";
    }
  }
  echo "<br>";
}
?>

<h2>矩形加上對角線</h2>
<?php
for ($i = 0; $i < $count; $i++) {
  for ($j = 0; $j < $count; $j++) {
    if ($i === 0 || $i === $count - 1) {
      echo "*";
    } else if ($j === 0 || $j === $count - 1) {
      echo "*";
    } else if ($i === $j) {
      echo "*";
    } else if ($i + $j === $count - 1) {
      echo "*";
    } else {

      // 這裡要注意不能使用 " "，只會顯示一個空白而已
      echo "&nbsp;";
    }
  }
  echo "<br>";
}
?>

<h2>矩形對角線紅色</h2>
<?php
for ($i = 0; $i < $count; $i++) {
  for ($j = 0; $j < $count; $j++) {
    if ($i === 0 || $i === $count - 1) {
      echo "*";
    } else if ($j === 0 || $j === $count - 1) {
      echo "*";
    } else if ($i === $j) {
      // 這裡用 < span >，然後再對其設定 style
      echo "<span>*</span>";
    } else if ($i + $j === $count - 1) {
      echo "<span>*</span>";
    } else {

      // 這裡要注意不能使用 " "，只會顯示一個空白而已
      echo "&nbsp;";
    }
  }
  echo "<br>";
}
?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>