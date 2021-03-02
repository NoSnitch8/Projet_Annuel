<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>DNA: Home</title>
	<?php include('includes/bootstrap.php'); ?>
<style>
	.bg{
		background: #2F669C;
	}
</style>
</head>
<body class="bg mw-100 mh-100">
	<?php include('includes/header.php'); ?>
	<!--Carousel -->
	<div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
		<ol class="carousel-indicators">
			<li data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"></li>
			<li data-bs-target="#carouselIndicators" data-bs-slide-to="1"></li>
			<li data-bs-target="#carouselIndicators" data-bs-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="3000">
				<a href="ac_valhalla.php"><img src="https://www.actugaming.net/wp-content/uploads/2020/04/assassins-creed-valhalla-key-art-e1588261446136.jpg" height="848px" class="d-block w-100"></a>
			</div>
			<div class="carousel-item" data-bs-interval="3000">
				<img src="https://images6.alphacoders.com/112/thumb-1920-1124721.png" height="848px" class="d-block w-100">
			</div>
			<div class="carousel-item" data-bs-interval="3000">
				<img src="https://images8.alphacoders.com/109/thumb-1920-1099422.jpg" height="848px" class="d-block w-100">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselIndicators" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</a>
	</div>
	<!--Fin Carousel -->

</body>
</html>
