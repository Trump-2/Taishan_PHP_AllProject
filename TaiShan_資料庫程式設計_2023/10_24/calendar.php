<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  table {
    border-collapse: collapse;
    border: 3px double #999;

  }

  td {
    border: 1px solid #999;
    padding: 5px 10px;
    text-align: center;
  }
  </style>

</head>

<body>
  <?php
  echo "<h3>";
  echo date("西元Y年m月");
  echo "</h3>";
  // 顯示每個月 1 號的日期格式
  $thisFirstDay = date("Y-m-1");
  // 算出每個月 1 號是星期幾，w 代表 0 是星期日依此類推
  $thisFirstDay_Dayoftheweek = date('w', strtotime($thisFirstDay));
  // 算出每個月個別有幾天，也就是總天數
  $thisMonthDays = date("t");
  // 算出每個月最後一天的日期格式，又因為每個月的天數可以推算出每個月最後一天是幾號 ( 例如：28天，代表該月最後一天為 28 號 )，所以利用 $thisMonthDays
  $thisLastDay = date("Y-m-$thisMonthDays");
  // 算出每個月有幾周； 利用每個月的總天數 + 每個月第一周 1 號前面的空白天數 ( 剛好等於 1 號是星期幾的值 )，然後再除以 7，最後取無條件進位得出
  $weeks = ceil(($thisMonthDays + $thisFirstDay_Dayoftheweek) / 7);
  // 算出第一周第一天的日期；利用每個月一號 ( 轉成秒數 ) - 每個月第一周 1 號前面的空白天數 ( 剛好等於 1 號是星期幾的值 )，最後再轉換成日期格式
  $firstCellDate = date("Y-m-d", strtotime("-$thisFirstDay_Dayoftheweek days", strtotime($thisFirstDay)));
  // echo $firstCellDate;
  echo "<table>";
  echo "<tr>";
  echo "<td>日</td>";
  echo "<td>一</td>";
  echo "<td>二</td>";
  echo "<td>三</td>";
  echo "<td>四</td>";
  echo "<td>五</td>";
  echo "<td>六</td>";
  echo "</tr>";

  // $i 影響週數
  for ($i = 0; $i < $weeks; $i++) {
    echo "<tr>";
    // $j 影響一週有幾天
    for ($j = 0; $j < 7; $j++) {
      // 從每月第一周的第一天開始每天遞增 1，從加 0 開始
      $addDays = 7 * $i + $j;
      // 從每月第一周的第一天的那格開始，算出每格的秒數
      $thisCellDate = strtotime("+$addDays days", strtotime($firstCellDate));
      // 判斷格子中的日期是星期幾，0代表星期日(依此類推)，因為這裡要讓假日的 background-color 改變，也就是星期為 0 或 6 的，所以將其作為判斷條件
      if(date('w', $thisCellDate) == 0 ||date('w', $thisCellDate)== 6) {
        echo "<td style='background-color:lightgreen'>";
      }
      else {
      echo "<td>";
      }
      // 判斷格子中的日期的月份是否為每月 1 號代表的日期格式裡的月份相等，因為這裡要將不是該月份的日期不顯示出來
      if (date("m",$thisCellDate) == date('m', strtotime($thisFirstDay))) {
        echo date("j",$thisCellDate);
      }
      echo "</td>";
    }
    echo "</tr>";
  }
  // for ($i = 0; $i < $weeks; $i++) {
  //   echo "<tr>";
  //   for ($j = 0; $j < 7; $j++) {
  //     $addDays = 7 * $i + $j;
  //     $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
  //     if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
  //       echo "<td style='background:pink'>";
  
  //     } else {
  //       echo "<td>";
  //     }
  //     if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
  //       echo date("j", $thisCellDate);
  //     }
  //     echo "</td>";
  //   }
  //   echo "</tr>";
  // }
  
  echo "</table>";
  ?>
  <h3>西元2023年10月</h3>
  <table>
    <tr>
      <td>日</td>
      <td>一</td>
      <td>二</td>
      <td>三</td>
      <td>四</td>
      <td>五</td>
      <td>六</td>
    </tr>
    <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
    </tr>
    <tr>
      <td>8</td>
      <td>9</td>
      <td>10</td>
      <td>11</td>
      <td>12</td>
      <td>13</td>
      <td>14</td>
    </tr>
    <tr>
      <td>15</td>
      <td>16</td>
      <td>17</td>
      <td>18</td>
      <td>19</td>
      <td>20</td>
      <td>21</td>
    </tr>
    <tr>
      <td>22</td>
      <td>23</td>
      <td>24</td>
      <td>25</td>
      <td>26</td>
      <td>27</td>
      <td>28</td>
    </tr>
    <tr>
      <td>29</td>
      <td>30</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</body>

</html>
</body>

</html>