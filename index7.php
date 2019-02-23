<?php
$title = 'Наша первая страница с PHP';
?>
<html>
<head>
	<title><?php print $title; ?></title>
</head>
<body>

<?php
function plus_one($x){  //определение функции
  $x = $x + 1;              //тело функции
  return $x;                  //возвращаемое значение
}
 
$y = 1;
$y = plus_one($y);    //вызов функции
print $y;
?>
<?php
function myFunction($x1, $x2, $x3){

$y = myFunction($z, 34, 'Привет, Мир!');
}
?>
<?php
function myFunction($x){
  $y = -2 * $x + 4;
  return $y;
 
$z1 = myFunction(1);
$z2 = myFunction(2);
$z3 = myFunction(3);
print $z1 . '<br />' . $z2 . '<br />' . $z3;
}
?>
<?php
include 'incr.php';
include 'decr.php';
 
$z = 0;
$z = incr($z);
$z = incr($z);
$z = incr($z);
$z = incr($z);
$z = decr($z);
print $z;
?>
	

</body>
</html>