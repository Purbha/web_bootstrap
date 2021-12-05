<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pertemuan 1</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<?php
	$bootstrap_url = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/';
	$jquery_url = 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/';
	$popper_url = 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/';
	$fa_url = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/';
	?>
    <link rel="stylesheet" href="<?=$bootstrap_url;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$fa_url;?>font-awesome.min.css">
    <script src="<?=$jquery_url;?>jquery.min.js"></script>
    <script src="<?=$popper_url;?>popper.min.js"></script>
    <script src="<?=$bootstrap_url;?>js/bootstrap.min.js"></script>
</head>
<body>
<!--
	REFERENSI
	https://www.w3schools.com/bootstrap4/bootstrap_containers.asp
-->
<div class="container-fluid">
	<h1>Latihan 2</h1>
	<p>
    	Halaman bootstrap kedua.<br>
        Ini adalah contoh paragraf sederhana yang ada didalam container-fluid.
    </p>
</div>
<div class="container">
	<h1>Latihan 2</h1>
	<p>
    	Halaman bootstrap kedua. <br>
        Ini adalah contoh paragraf sederhana yang ada didalam container.
    </p>
</div>
</body>
</html> 