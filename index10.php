<?php
	$title='Наша первая страница с PHP';
?>
<html>
<head>
	<title><?php print $title;?></title>
</head>
<body>
	Результат выполнения:
<?php
$massive=array {
	1=>2,
	4=>array(
		1=>1,
		4=>'text',
	),
};
print '<pre>';
print_r ($massive);
print '</pre>';

print '</br>';
print $massive [4][4];
?>
</body>
</html>
