<h1>日期與時間</h1>
<?php
date_default_timezone_set('Asia/Taipei');

echo date("Y-m-d H:i:s");
echo "<br>";
echo date("m");
echo "<br>";
echo date("Y");
?>
<h2>strtotime</h2>
<?php
// strtotime 第一個參數是字串 ( 可以是日期格式或者是 +-1 day / month / year 的格式 )，第二個參數是秒數
// echo strtotime("2023-01-01");
// echo "<br>";
// echo strtotime("+1 month", strtotime("2023-01-01"));
// echo "<br>";
// echo strtotime(date("Y"));
// echo "<br>";
// echo strtotime(date("Y-m-d"));
// echo "<br><hr>";
echo strtotime('+2 days', strtotime(date("Y-m-d")));
echo "<br>";
echo date('Y-m-d', strtotime('+1 day'));
echo "<br>";
echo strtotime('+1 day', strtotime(date("Y-m-d")));
echo "<br>";
echo strtotime("now");
$time = strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s", $time);

$date1 = '2023-10-24';
$date2 = '2023-11-15';
$days = (strtotime($date2) - strtotime($date1)) / (60 * 60 * 24);

echo "<hr>";
echo $date1 . '到' . $date2 . "有" . $days . "天";
?>

<h2>計算下次生日天數</h2>
<?php
$birthDate = "1974-10-07";

// 取得今日的秒數
$todayTimestamp = strtotime('now');
// 取得今年的生日秒數
$birthTimestamp = strtotime($birthDate);
$thisYearBirthDate = date('Y') . "-" . date('m-d', $birthTimestamp);
$EachYearBirthDateTimestamp = strtotime($thisYearBirthDate);
// 如果今年的生日秒數 > 今日的秒數，代表今年生日還沒過；反之如果是小於，代表已經過了，下次生日在明年了；
// 今年生日沒過則用 ( 今年的生日秒數 - 今日的秒數 ) / ( 60 * 60 * 24 )；反之過了則用 ( 明年的生日秒數 - 今日的秒數 ) / ( 60 * 60 * 24)
if ($EachYearBirthDateTimestamp > $todayTimestamp) {
  $days = ($EachYearBirthDateTimestamp - $todayTimestamp) / (60 * 60 * 24);
} else {
  $EachYearBirthDateTimestamp = strtotime("+1 year", $EachYearBirthDateTimestamp);
  $days = ($EachYearBirthDateTimestamp - $todayTimestamp) / (60 * 60 * 24);
}

echo "距離下一次生日：" . date("Y-m-d", $EachYearBirthDateTimestamp) . " 還有 " . ceil($days) . " 天";

?>


<ul>
  <li>2021/10/05</li>
  <li>10月5日 Tuesday</li>
  <li>2021-10-5 12:9:5</li>
  <li>2021-10-5 12:09:05</li>
  <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
<?php
echo date("Y/m/d");
echo "<br>";
echo date("m月d日 l");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("Y-n-j G:i:s");
echo "<br>";



echo date("今天是西元Y年m月d日");

if (date("N") <= 5) {
  echo "上班日";
} else {
  echo "假日";
}

?>
<h2>利用迴圈來計算連續五個周一的日期</h2>
例:
<u l>
  <li>2021-10-04 星期一</li>
  <li>2021-10-11 星期一</li>
  <li>2021-10-18 星期一</li>
  <li>2021-10-25 星期一</li>
  <li>2021-11-01 星期一</li>


  <?php
  // $todayWeek = date("N");
// $diff = 1 - $todayWeek;
// $lastMonday = strtotime("$diff days");
// $nextMonday = date("Y-m-d", strtotime("+1 week", $lastMonday));
  
  // for ($i = 0; $i < 5; $i++) {
//   $nextMonday = date("Y-m-d l", strtotime("+1 week", strtotime($nextMonday)));
//   echo $nextMonday;
//   echo "<br>";
// }
  
  // 找出今天是星期幾
  $todayWeek = date("N");
  // 算出和星期一相差幾天
  $difference = 1 - $todayWeek;
  // 算出今天所在週數的星期一的秒數
  $lastMonday = strtotime("$difference days");
  // 然後利用該秒數進一步算出下週星期一的日期
  $nextMonday = date("Y-m-d", strtotime("+1 week", $lastMonday));

  for ($i = 1; $i < 6; $i++) {
    $next = date("Y-m-d l", strtotime(($i + 1) . "week", $lastMonday));
    echo $next;
    echo "<br>";
  }
  ?>