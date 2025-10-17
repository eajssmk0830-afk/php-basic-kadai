<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($a, $up) {
  if ($up == true) {
    echo "昇順で並び替えます！<br>";
    sort($a);
  } else {
    echo "降順で並び替えます！<br>";
    rsort($a);
  }
  foreach($a as $v){
    echo $v . "<br>";
  }
}

$number = array(15,4,18,23,10);

sort_2way($number, true);
sort_2way($number, false);
        ?>
    </p>
</body>

</html>