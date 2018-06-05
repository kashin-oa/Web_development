<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles\main.css">
	<link rel="stylesheet" type="text/css" href="styles\gallery.css">
</head>
<body>

<header>
	<div id="menu">
		<ul>
			<?php include 'header.php'; ?>
		</ul>
	</div>
	<img id="logo" src="/images/logo.png" alt="logo">
</header>

<main>
	<div id="did_you_know">
		<p>Знаете ли вы?</p>
		<div>...</div>
	</div>
	<div id="content_container">
		<div id="gallery">
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_01.jpg" alt="gallery_01"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_02.jpg" alt="gallery_02"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_03.jpg" alt="gallery_03"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_04.jpg" alt="gallery_04"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_05.jpg" alt="gallery_05"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_06.jpg" alt="gallery_06"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_07.jpg" alt="gallery_07"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_08.jpg" alt="gallery_08"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_09.jpg" alt="gallery_09"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_10.jpg" alt="gallery_10"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_11.jpg" alt="gallery_11"></a>
			<a class="gallery_container" href="#"><img src="images\gallery\gallery_12.jpg" alt="gallery_12"></a>
		</div>
		<div id="modal_background">
			<img id="modal_image" src="" alt="IMAGE">
			<div class="side_control" id="left_control"><span><</span></div>
			<div class="side_control" id="right_control"><span>></span></div>
		</div>
	</div>
</main>

<footer>
	<div>
		<p>ООО "Компания" © 2018</p>
	</div>
</footer>

<script type="text/javascript" src="\js\main.js"></script>
<script type="text/javascript" src="\js\gallery.js"></script>

</body>
</html>