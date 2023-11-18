<h2>
  字串取代
</h2>

將”aaddw1123”改成”*********”

<?php
echo "<br>";
$str = "aaddw1123";
$replacedstring = str_repeat("*", mb_strlen($str));
echo $replacedstring;

?>
<h2>

  字串分割
</h2>

將”this,is,a,book”依”,”切割後成為陣列

<?php
echo "<br>";

$s = "this,is,a,book";
$a = explode(",", $s);

echo "<pre>";
print_r($a);
echo "</pre>";
?>
<h2>
  字串組合 </h2>

將上例陣列重新組合成“this is a book”

<?php
echo "<br>";
echo join(" ", $a);
?>
<h2>

  子字串取用
</h2>

將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”

<?php
echo "<br>";
$str = "The reason why a great man is great is that he resolves to be a great man";
$s = mb_substr($str, 0, 10);
echo $s . "...";
$cs = '將指定的關鍵字放大';
echo "<br>";
echo mb_substr($cs, 0, 7) . "...";

?>

<h2>
  尋找字串與HTML、css整合應用
</h2>
<ul>
  <li> 給定一個句子，將指定的關鍵字放大</li>
  <li> “學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
  <li> 請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>

<?php
$s = "學會PHP網頁程式設計，薪水會加倍，工作會好找程式設計";
$targetIndex = mb_strpos($s, "程式設計");
// echo $targetIndex;
$targetLength = mb_strlen("程式設計");
// echo $targetLength;
$sub = mb_substr($s, $targetIndex, $targetLength);
echo str_replace($sub, "<span style='color:lightblue'>$sub</span>", $s, );

// $sub = mb_substr($s, $targetIndex, $targetLength);
// $str = "程式設計";
// echo str_replace($str, "<span style='color:lightblue'>$str</span>", $s);


// echo str_replace($str, "<span style='font-size:20px; color:red'>$str</span>", $s);


?>

<?php
$s = "在程式設計這程式設計段文程式設計章中，有重複出現多個「程式設計」的字串，如果只要讓第三個「程式設計」的字串變成紅色，該怎麼寫？";
$n = 5;
$str = "程式設計";
$a = explode($str, $s);
echo "<pre>";
print_r($a);
echo "</pre>";
// echo $a[2];
$a[$n - 1] = $a[$n - 1] . "<span style='color:red;'>";
$a[$n] = "</span>" . $a[$n];
echo "<pre>";
print_r($a);
echo "</pre>";
echo join($str, $a);
?>