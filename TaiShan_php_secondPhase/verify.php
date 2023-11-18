<?php


if ($_POST['acc'] == 'admin' && $_POST['pw']  == '1234') {
  // setcookie 的過期時間是以秒為單位；time () 用來取得現在日期的秒數，+ 300 秒等於 5 分鐘之後
  setcookie('login', 'akashidaiki', time() + 60);
  header('location:member.php');
} else {
  // $_SESSION['error'] = '帳號或密碼錯誤，請重新登入';
  setcookie('error', "帳號或密碼錯誤，請重新登入", time());
  header('location:login.php');
}
