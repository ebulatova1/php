<?php
	$title='Наша первая страница с PHP';
	$result = ' ';
	$a = '11 яблок';
	$b = 2;
	$result=$a+$b;
	$i = 456; // десятичное число
	$i = -895; // отрицательное число
	$i = 0121; // восьмеричное число (эквивалентно 81 в десятичной системе)
	$i = 0x1B; // шестнадцатеричное число (эквивалентно 27 в десятичной системе)
	$pi = 3.14;
?>
<html>
<head>
	<title><?php print $title;?></title>
</head>
<body>
	Результат выполнения:
<?php

print $result;


?>
</body>
</html>
