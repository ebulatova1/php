<?php
$title = 'Наша первая страница с PHP';
?>
<html>
<head>
	<title><?php print $title; ?></title>
</head>
<body>
<?php
if(5>3){
  print "5 bigger 3";
}
?>
<?php
  $x = 5;
  if($x == 5){
    print 'x equally 5';
  }
?>
<?php
$x = 5;
if($x != 4){
  print 'x not equel 4';
}
?>
<?php
$x = 6;
if($x > 4){
  print 'x bigger 4';
}
?>
<?php
$x = 1;
if($x < 3){
  print 'x less 3';
}
?>
<?php
$x = 5;
if($x >= 5){
 print 'x more or equel 5';
}
if($x > 5){
 print 'x more 5'; //не выводится
}
?>

<?php
$x = 5;
if($x <= 5){
 print 'x less or equel 5';
}
if($x < 5){
 print 'x less 5'; //не выводится
}
?>
<?php
$x = 4;
$y = 5;
if($x==4 && $y==5){
  print 'x equel 4, y equel 5';
}
 
if($x==3 && $y==5){
  print 'x equel 3, y equel 5'; // не выводится, потому что x не равен 3
}
?>
<?php
$x = 4;
$y = 5;
if($x == 4 || $y == 5){
  print 'x равно 4 или y равно 5<br />';
}
 
if($x == 3 || $y == 5){
  print 'x равно 3 или y равно 5<br />';
}
 
if($x == 4 || $y == 6){
  print 'x равно 4 или y равно 6<br />';
}
?>

	
</body>
</html>