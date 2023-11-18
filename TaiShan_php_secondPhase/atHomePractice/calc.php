<?php

// 這裡的 if 判斷式是要避免頁面出現錯誤訊息，算是一種 error handle
if (!empty($_GET)) {


  // 這裡用 ternary operator 要判斷傳過來的 weight、height 參數是否為空字串；
  // 因為使用者可能不輸入就按下計算 BMI 的按鈕
  $weight = !empty($_GET["weight"]) ? $_GET["weight"] : "沒有體重資料";
  $height = !empty($_GET['height']) ? $_GET['height'] : '沒有身高資料';
  $bmi = round($weight / ($height * $height), 2);
  // echo "體重:" . $weight . "<br>";
  // echo "身高:" . $height . "<br>";
  // echo "BMI:" . $bmi . "<br>";

  // 將顯示頁面導向 bmi.php 並且順便傳遞一些訊息
  header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
} else {
  header("location:bmi.php?m=請輸入必要訊息");

}

?>