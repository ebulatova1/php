<?php
$title = 'Наша первая страница с PHP';
?>
<html>
<head>
	<title><?php print $title; ?></title>
</head>
<body>
<?php
function myDegree($x, $n){
  if($n == 0){
    return 1;
  }
  if($n < 0){
    return myDegree( 1/$x, -$n); // -$n значит смену знака с отрицательного на положительный
  }
  return $x * myDegree($x, $n-1); // вызов функции внутри функции
}
 
$y = myDegree(2, -4); // самый первый вызов функции
print $y;
?>
<?php
function myRecursion($x){
  if($x == 1){
    return $x;
  }
  return $x*myRecursion($x-1);
}
 
$y = myRecursion(8);
print $y;
?>
</body>
</html>