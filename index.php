<?php
	$title='Наша первая страница с PHP';
	$txt1="Hello, World";
	$txt2= "<br /> How are you?";
	$result = ' ';
	$txt3 = 'здесь будет 1 текст';//в этой строке 19 символов
	$txt4= 'здесь будет другой текст';
	//$result = strlen($txt3);
	$result = strpos($txt4,'ь');
?>
<html>
<head>
	<title><?php print $title;?></title>
</head>
<body>
	Результат выполнения:
<?php
//echo "Hello World";
//Это комментарий
/*
Это

тоже

комментарий
*/
print $result;
//print $txt2;

?>
</body>
</html>

