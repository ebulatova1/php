<?php
$title = 'Наша первая страница с PHP';
//$x = 1;
//$y = 2;
//$z = $x + $y;
//$x = 2;
//$y = 6;
//$z = $y - $x;
//$x = 3;
//$y = 4;
//$z = $x * $y;
//$x = 26;
//$y = 2;
//$z = $x / $y;
//$x = 10;
//$y = $x % 3;
//$time = time();                                         //Текущее время с начала эпохи Unix
//$hours = $time % 86400;                          // выделяем текущее количество часов в секундах
//$hours = floor($hours / 3600);                 //берем целое количество часов
//$minutes = $time % 3600;                         //выделяем текущее количество минут в секундах
//$minutes = floor($minutes / 60);              // берем только целую часть часов
//$seconds = $time % 60;                            //определяем количество секунд
$x = 1;
$y = 1;
$x++;
$y = $y + 1;
?>
<html>
<head>
	<title><?php print $title; ?></title>
</head>
<body>
<?php
//print $z;
//print $z;
//print $z;
//print $z;
//print $y;
//print $hours . ':' . $minutes . ':' . $seconds; //выводим результат
//print 'x=' . $x . '<br />';
//print 'y=' . $y;
print 'x=' . $x . '<br />';
print 'y=' . $y;
?>
</body>
</html>