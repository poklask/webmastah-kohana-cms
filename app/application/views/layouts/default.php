<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Webmastah.pl - Kohana CMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="//code.jquery.com/jquery.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<div class="container">
		<div class="navbar">
			<a class="navbar-brand" href="<?php echo url::base() ?>">Webmastah</a>
			<ul class="nav navbar-nav">
				<li><a href="<?php echo url::site('/') ?>">Home</a></li>
				<li><a href="<?php echo url::site('/kim-jestesmy') ?>">Kim jestem</a></li>
				<li><a href="<?php echo url::site('/aktualnosci') ?>">Aktualności</a></li>
				<li><a href="<?php echo url::site('/galeria') ?>">Galeria</a></li>
				<li><a href="<?php echo url::site('/konto') ?>">Moje konto</a></li>
			</ul>
		</div>
		
		<div class="row-fluid">
		<?php echo $content ?>
		</div>

		<hr>
		<div class="footer">
		<p>&copy; 2013 TwojaNazwa</p>
		</div>
	</div> 
</body>
</html>