<?php
// $_GET 的預設值
// $_GET = [];

print_r($_GET);
if (!empty($_GET)) {


  $w = !empty($_GET['weight']) ? $_GET['weight'] : '沒有體重資料';
  $h = !empty($_GET['height']) ? $_GET['height'] : '沒有身高資料';

  $bmi = round($w / $h * $h, 2);
  // echo "體重:$w"; 
  // echo ", ";
  // echo "身高:$h";
  // echo ", ";
  // echo "BMI:$bmi";

  header("location:BMI.php?w=$w&h=$h&bmi=$bmi");
} else {
  header("location:BMI.php?m=請輸入必要訊息");
}