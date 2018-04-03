<!DOCTYPE html>
<html>
<head>
	<title>hospital</title>	
	<link rel="stylesheet" href="<?= URL ?>/public/css/style.css">
	<meta charset="utf-8">
</head>
<body>
	<nav>
	<ul>
		<li><a href="<?= URL ?>home/index">Home</a></li>
		<li><a href="<?= URL ?>student/index">Students</a></li>
		<li><a href="<?= URL ?>hospital/index">hospital</a></li>
	</ul>
	</nav>

<?php if (isset($hospital)) {
		if ($hospital == true ) { ?>
		<h1>Hospital</h1>
		<ul>
			<li><a href="<?= URL ?>hospital/patients.php">Patiënts</a></li>
			<li><a href="<?= URL ?>hospital/clients.php">Clients</a></li>
			<li><a href="<?= URL ?>hospital/species.php">Species</a></li>
		</ul>
<?php  }} ?>