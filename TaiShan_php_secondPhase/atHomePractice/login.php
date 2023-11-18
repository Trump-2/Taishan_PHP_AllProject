<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入頁面</title>
</head>
<body>
<h2>登入頁面</h2>
<?php


if(isset($_GET['m'])) {
  echo "<span style='color:red'>" . $_GET['m'] . "</span>";
}

if(isset($_GET['login']) && $_GET['login'] == 1) {
  echo "歡迎你";
} 
else {
  
  ?>
  <form action="verify.php" method='post'>
    <div>
      <label for="acc">帳號</label>
      <input type="text" name="acc" id="acc">
    </div>
    <div>
      <label for="pw">密碼</label>
      <input type="password" name="pw" id="pw">
    </div>
    <div>
      <input type="submit" value="登入">
      <input type="reset" value="重置">
    </div>
  </form>
  <?php
}

?>
</body>
</html>