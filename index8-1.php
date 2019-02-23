<?php
$title = 'Наша первая страница с PHP';
?>
<html>
<head>
	<title><?php print $title; ?></title>
</head>
<body>
<?php
  switch ($x){
    case 1:
      // действия   
    break;
    case 2:
      // действия       
    break;
    case 3:
      // действия       
    break;
    case 4:
      // действия       
    break;
    case 5:
      // действия       
    break;
    case 6:
      // действия       
    break;
    case 7:
      // действия       
    break;
    case 8:
      // действия       
    break;
    case 9:
      // действия       
    break;
    case 10:
      // действия       
    break;
    default:   
      // действия при условие, что другие условия не подошли
  }
?>
<?php
  switch ($x){
    case 'Hello':
    
    break;
    case 'Bye':
    
    break;
  }
?>
<?php
  switch ($x){
    case 'Hello': //возможное значение
      print $x;   //действия
    break; //конец выполнения switch
    case 2:
      $x++;
    break;
  }
?>
<?php
// $D число дней начиная с понедельника
$x = $D % 7;
switch ($x){
  case 1:
    print 'понедельник';
  break;
  case 2:
    print 'вторник';
  break;
  case 3:
    print 'среда';
  break;
  case 4:
    print 'четверг';
  break;
  case 5:
    print 'пятница';
  break;
  case 6:
    print 'суббота';
  break;
  case 7:
    print 'воскресенье';
  break;
}
?>
	
</body>
</html>