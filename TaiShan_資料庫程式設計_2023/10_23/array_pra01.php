<h1>建立一個學生成績陣列</h1>
<?php
// 題目練習
$eachScore = [
  'Judy' => ['國文' => 95, '英文' => 64, '數學' => 70, '地理' => 90, '歷史' => 84],
  'Amo' => ['國文' => 88, '英文' => 78, '數學' => 54, '地理' => 81, '歷史' => 71],
  "john" => ['國文' => 45, '英文' => 60, '數學' => 68, '地理' => 70, '歷史' => 62],
  "Peter" => ['國文' => 59, '英文' => 32, '數學' => 77, '地理' => 54, '歷史' => 42],
  'Hebe' => ['國文' => 71, '英文' => 62, '數學' => 80, '地理' => 62, '歷史' => 64],
];

print_r($eachScore['Judy']);


// 老師的答案
// 第一種，適合拿來呈現在表格上


$subject = ['國文', '英文', '數學', '地理', '歷史'];
$judy = [95, 64, 70, 90, 84];
$amo = [88, 78, 54, 81, 71];
$john = [45, 60, 68, 70, 62];
$peter = [59, 32, 77, 54, 42];
$hebe = [71, 62, 80, 62, 64];


$avg = ($judy[0] + $amo[0] + $john[0] + $peter[0] + $hebe[0]) / 5;
// $avg = ($judy[0] + $amo[0] + $john[0] + $peter[0] + $hebe[0]) / 5;

echo "<br>";
echo $avg;


// 第二種，適合拿來計算
$students = [
  '國文' => [
    [
      'name' => 'judy',
      'score' => '95',
    ],
    [
      'name' => 'amo',
      'score' => '88',
    ],
    [
      'name' => 'john',
      'score' => '45',
    ],
  ]
];


$students = [
  '英文' => [
    [
      'name' => 'judy',
      'score' => 64
    ],
    [
      'name' => 'amo',
      'score' => 78
    ],
    [
      'name' => 'john',
      'score' => 60
    ],
    [
      'name' => 'peter',
      'score' => 32
    ],
    [
      'name' => 'hebe',
      'score' => 62
    ]
  ]
];


$avg2 = ($students['英文'][0]['score'] + $students['英文'][1]['score'] + $students['英文'][2]['score'] + $students['英文'][3]['score'] + $students['英文'][4]['score']) / 5;

echo '<br>';
echo $avg2;
?>