<?php
/* 我自己打的
$rows = all('school', 'students', ' where `dept` = 1');
printdata($rows);

function all($dbname = null, $tableName = null, $where = '')
{
  $dsn = "mysql:host=localhost;charset=utf8;dbname=$dbname";
  $pdo = new PDO($dsn, 'root', '');
  $sel = "select * from `$tableName` ";

  if (isset($tableName) && isset($dbname) && !empty($tableName) && !empty($dbname)) {
    if (is_array($where)) {
      if (!empty($where)) {
        foreach ($where as $col => $value) {
          $tmp[] = "`$col`='$value'";
        }
        $sql = "$sel where " . join(" && ", $tmp);
      } else {
        $sql = $sel;
      }
    } else {
      $sql = "$sel $where";
    }
    $rows = $pdo->query($sql)->fetchAll();
    return $rows;
  } else {
    echo "錯誤:沒有指定的資料庫或對應的資料表名稱";
  }
}

function printdata($array)
{
  echo "<pre>";
  print_r($array);
  echo "</pre>";
}
*/

// 老師的版本，自己的補上後之後刪除掉
// $rows = all('students', ['dept' => '3']);

// $row = find('students', 10);
// $row = find('students', ['dept' => '1', 'graduate_at' => '23']);
// $rows = all('students', ['dept' => '1', 'graduate_at' => '23']);
// dd($row);
// echo "<hr>";
// dd($rows);

// $up = update('students', '3', ['dept' => '16', 'name' => '張明珠']);
// $up = update("students", ['dept' => '5', 'status_code' => '001'], ['dept' => '100', 'name' => '項羽']);
// dd($up);

insert('dept', ['code' => '110', 'name' => '圖書館系']);



// crud 的 r
function all($table = null, $where = '', $other = '')
{
  $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
  $pdo = new PDO($dsn, 'root', '');
  $sql = "select * from `$table` ";

  if (isset($table) && !empty($table)) {

    if (is_array($where)) {
      /**
       * ['dept'=>'2','graduate_at'=>12] =>  where `dept`='2' && `graduate_at`='12'
       * $sql="select * from `$table` where `dept`='2' && `graduate_at`='12'"
       */
      if (!empty($where)) {
        foreach ($where as $col => $value) {
          $tmp[] = "`$col`='$value'";
        }
        $sql .= " where " . join(" && ", $tmp);
      }
    } else {
      $sql .= " $where";
    }

    $sql .= $other;
    echo 'all=>' . $sql;
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  } else {
    echo "錯誤:沒有指定的資料表名稱";
  }
}

//crud 的 r，針對某筆資料
function find($table, $id)
{
  $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
  $pdo = new PDO($dsn, 'root', '');

  $sql = "select * from `$table` ";

  if (is_array($id)) {
    foreach ($id as $col => $value) {
      $tmp[] = "`$col`='$value'";
    }
    $sql .= " where " . join(" && ", $tmp);
  } else if (is_numeric($id)) {
    $sql .= " where `id` = '$id'";
  } else {
    echo "錯誤:參數的資料型態必須是數字或陣列";
  }
  echo 'find=>' . $sql;
  $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  return $row;
}

// $cols 是 set 後面接的欄位名稱和欄位值
function update($table, $id, $cols)
{
  $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
  $pdo = new PDO($dsn, 'root', '');
  $sql = "update `$table` set ";

  if (!empty($cols)) {
    foreach ($cols as $col => $value) {
      $tmp[] = "`$col`='$value'";
    }
  }

  $sql .= join(',', $tmp);
  //
  $tmp = [];
  if (is_array($id)) {
    foreach ($id as $col => $value) {
      $tmp[] = "`$col`='$value'";
    }
    $sql .= " where " . join(" && ", $tmp);
  } else if (is_numeric($id)) {
    $sql .= " where `id` = '$id'";
  } else {
    echo "錯誤:參數的資料型態必須是數字或陣列";
  }
  // 測試用，程式最後上線時要記得拿掉
  echo $sql;
  return $pdo->exec($sql);
}

function insert($table, $values)
{
  $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
  $pdo = new PDO($dsn, 'root', '');
  $sql = "insert into `$table` ";




  $cols = "(`" . join("`,`", array_keys($values)) . "`)";
  // 這裡 join () 中直接使用 $values，是因為 join () 會直接對陣列元素 ( 欄位值 ) 做合併
  $vals = "('" . join("','", $values) . "')";

  $sql = $sql . $cols . " values " . $vals;

  echo $sql;
  return $pdo->exec($sql);
}

function dd($array)
{
  echo "<pre>";
  print_r($array);
  echo "</pre>";
}