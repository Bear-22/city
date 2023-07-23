<? include_once 'header.php'; ?>


<?
	$query = new \dataBase\Mysql(HOST, LOGIN, PASSWORD, DB_NAME);
	$x     = $query->select('user', ['login' => 'sdcsdd']);
	debug($x)


?>

<? include_once 'footer.php'; ?>



