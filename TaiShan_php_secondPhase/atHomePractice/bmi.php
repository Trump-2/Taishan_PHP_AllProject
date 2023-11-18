<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>計算BMI</title>
</head>

<body>
  <h1>計算BMI</h1>
  <?php
  // 這裡用 isset() 來判斷 bmi 參數是否存在，如果不存在代表沒有到 calc.php 進行計算過，所以要求使用者從新輸入資料
  if (!isset($_GET['bmi'])) {
    if (isset($_GET['m'])) {
      echo "<span style='color:red'>" . $_GET['m'] . "</span>";
    }
    ?>
  <form action="calc.php" method="get">
    <div>
      <label for="height">身高 (公尺)</label>
      <input type="text" name="height" id="height">
    </div>
    <div>
      <label for="weight">體重 (公斤)</label>
      <input type="password" name="weight" id="weight">
    </div>
    <div>
      <input type="submit" value="計算BMI">
      <input type="reset" value="重置">
    </div>
  </form>
  <?php
  } else {
    // 這裡因為一開始的時候是用 get 的方式傳送資料給 calc.php，而 calc.php 傳回資料時，雖然沒有指定用 get 的方式傳送資料，但在 bmi.php 預設也會以 get 的方式接收資料，所以這裡也要用 $_GET 的方式
    echo "BMI:" . $_GET['bmi'];
  }
  ?>
</body>

</html>