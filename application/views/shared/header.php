<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?=base_url()?>/assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/sidebar/sidebars.css">
	<title>Document</title>
</head>
<body>
<div class="position-fixed h-100 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark d-lg-block d-none" style="width: 280px; z-index: 6">
	<a href="/" class="d-flex align-items-center text-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
		<span class="fs-4"></span>
	</a>
	<hr>

	<ul class="nav nav-pills flex-column mb-auto">
		<li class="nav-item">
			<a href="<?=base_url('welcome/display_cg')?>" class="nav-link text-white">
				Plan comptable générale
			</a>
		</li>
		<li>
			<a href="<?=base_url('compte_tier')?>" class="nav-link text-white">
				Plan tier
			</a>
		</li>
		<li>
			<a href="<?=base_url('operation')?>" class="nav-link text-white">
				Operations
			</a>
		</li>
		<li>
			<a href="#" class="nav-link text-white">
				Products
			</a>
		</li>
	</ul>
	<hr>

</div>
<script src="<?=base_url('/assets/sidebar/sidebars.js')?>"></script>




