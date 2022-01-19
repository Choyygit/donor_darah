<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Tes PMI Bojonegoro</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css" />
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/jquery.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-light">
	<div class="container">
		<a class="navbar-brand">Donor darah</a>
		<ul class="navbar-nav">
			<li class="nav-item"><a href="index.php?act=pendonor/view" class="nav-link">Pendonor</a></li>
			<li class="nav-item"><a href="index.php?act=aktifi/view" class="nav-link">Aktifitas</a></li>
		</ul>
	</div>
	</nav>
	<div class="container mt-3">
	<?php
	include 'config.php';
	
	if(isset($_GET['act'])) {
		include $_GET['act'].'.php';
	}
	?>
	</div>
</body>
</html>
