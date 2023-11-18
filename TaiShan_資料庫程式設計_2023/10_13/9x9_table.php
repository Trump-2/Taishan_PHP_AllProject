<!DOCTYPE html>
<html>

<head>
  <title>九九乘法表</title>
  <style>
  table {
    border-collapse: collapse;
  }

  th,
  td {
    border: 1px solid black;
    width: 30px;
    height: 30px;
    text-align: center;
  }
  </style>
</head>

<body>
  <h2>九九乘法表</h2>
  <table>
    <tr>
      <th></th>
      <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>{$i}</th>";
            }
            ?>
    </tr>
    <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th>{$i}</th>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
  </table>
</body>

</html>