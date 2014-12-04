<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title><?php echo $this->fetch('title'); ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
</head>
<body id="layout" onload="">
	
	<!-- header -->
	<div class="row" id="header">
		<div id="image_header"></div>
		
	</div>
	
	<!--Menu-->
	<!-- Fin du header -->
	
	<?php echo $this->fetch('content'); ?>
	
	
	<!-- Tweet -->
	<div class="row">
		
	</div>
	<!-- Fin Tweet -->
	
</body>
</html>