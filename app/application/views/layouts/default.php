<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Webmastah.pl - Kohana CMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="//code.jquery.com/jquery.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css">
	<link rel="stylesheet" href="//getbootstrap.com/examples/justified-nav/justified-nav.css">
	<link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,900,900italic,700,700italic" rel="stylesheet" type="text/css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<style>
	body{font-family: Roboto, Helvetica, Sans !important;}
	</style>
</head>
<body>
	<div class="container">
		<div class="masthead">
			<h3 class="text-muted">Webmastah.pl <span class="pull-right" style="font-size:12px; font-weight:500;color:#333;"><a href="<?php echo url::site('konto/logowanie') ?>">Zaloguj się</a> | <a href="<?php echo url::site('konto/rejestracja') ?>">Utwórz konto</a></span></h3>
			<ul class="nav nav-justified">
				<li><a href="<?php echo url::site('/') ?>">Home</a></li>
				<li><a href="<?php echo url::site('/kim-jestesmy') ?>">Kim jesteśmy</a></li>
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
		<p>Copyright &copy; 2013 Webmastah.pl | <a href="http://opensource.org/licenses/MIT" target="_blank">MIT License</a></p>
		</div>
	</div> 
</body>
</html>