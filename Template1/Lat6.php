<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latihan Template 1</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('../inc/inc.php'); ?>
    <style>
    .bg-1 {
		color: #666;
		background-color: #CCC;
		padding-bottom:10px;
	}
    .bg-2 {
		color: #900;
		background-color: #FF0;
	}
    .bg-3 {
		color: #FFC;
		background-color: #906;
	}
	.container-fluid {
		padding-top:70px;
		padding-bottom:70px;
	}
    </style>
</head>
<body>
<div class="container text-center bg-1">
	<h3>Defense Of The Ancient</h3>
  	<img src="img/logo.jpg" alt="Logo" width="350" height="350" class="rounded-circle">
	<h3>Keep Calm And Play DOTA 2</h3>
</div>
<div class="container-fluid bg-2 text-center">
	<h3>Apa Itu DOTA 2?</h3>
	<p class="text-justify">
    	Dota 2 adalah sebuah permainan multiplayer online battle arena,
        merupakan sekuel dari Defense of the Ancients mod pada Warcraft 3 :
        Reign of Chaos dan Warcraft 3 : The Frozen Throne. DotA 2 dikembangkan oleh Valve Corporation,
        terbit juli 2013 dota 2 dapat dimainkan secara gratis pada operation system Microsoft Windows,
        OS X and Linux. Dota 2 dapat dimainkan secara eksklusif melalui distributor resmi valve, Steam.
	</p>
    <a href="https://www.google.co.id" class="btn btn-info btn-lg" target="_blank">
    	<span class="fa fa-search"></span> Search
  	</a>
</div>
<div class="container-fluid bg-3 text-center">
	<h3>Jumlah Pemain</h3>
	<p class="text-justify">
    	Dota 2 dimainkan oleh 2 team yang beranggota 5 orang pemain,
        setiap tim memiliki markas yang berada dipojok peta,
        setiap markas memiliki satu bangunan bernama "Ancient",
        Di mana tim harus berusaha menghancurkan "Ancient" tim lainnya agar dapat memenangkan pertandingan.
        Setiap pemain mengontrol satu karakter "Hero" yang berfokus pada menaikan level,
        mengumpulkan gold, membeli item dan melawan tim lawan untuk menang.
	</p>
</div>
</body>
</html>
