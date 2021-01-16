<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latihan Template 1</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="../fontawesome/css/brands.min.css">    
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
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
	.bg-4 {
    	background-color: #2f2f2f;
      	color: #fff;
  	}
	.container-fluid {
		padding-top:70px;
		padding-bottom:70px;
	}
	.navbar {
      	padding-top: 15px;
      	padding-bottom: 15px;
      	border: 0px;
    	border-radius: 0px;
      	margin-bottom: 0px;
      	font-size: 12px;
      	letter-spacing: 5px;
  	}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a class="navbar-brand" href="#">Dota 2</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    	<span class="navbar-toggler-icon"></span>
  	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
    	<ul class="navbar-nav ml-auto">
      		<li class="nav-item"><a class="nav-link" href="#">Menu 1</a></li>
      		<li class="nav-item"><a class="nav-link" href="#">Menu 1</a></li>
      		<li class="nav-item"><a class="nav-link" href="#">Menu 1</a></li>
    	</ul>
  	</div> 
</nav>
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
    <a href="#" class="btn btn-default btn-lg">
    	<span class="fas fa-search"></span> Search
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
	<div class="row">
    	<div class="col-sm-4">
            <img src="img/Col1.jpg" alt="Gambar 1" class="img-thumbnail" style="width:100%">
            <p class="text-justify">
                Hero ini adalah hero yang diprioritaskan untuk secepat mungkin mendapatkan gold yang banyak.
                Kebutuhan item hero ini sangat banyak dan bahkan sangat mahal.
                Hero ini akan sangat kuat di late game. Apabila ngefarmnya jago, hero ini bisa kuat di mid game.
                Contohnya: Shadow Fiend, Antimage, Troll Warlord, dll.
            </p>
        </div>
        <div class="col-sm-4"> 
            <img src="img/Col2.jpg" alt="Gambar 2" class="img-thumbnail" style="width:100%">
            <p class="text-justify">
                Support adalah hero yang bertugas untuk menjaga Carry.
                Support dibedakan menjadi Semi-Support dan Hard Support.
                Kalau Semi-Support, dia membantu untuk support, tapi gak sampe seluruh game.
                Kalau Hard Support, ini kasian banget.
                Dia rela itemnya gak jadi demi si Carry, rela mati demi lindungi si Carry,
                rela gak farm demi si Carry, ngeward juga dll. Contoh Support: Crystal Maiden,
                Witch Doctor, Ogre Magi, Winter Wyvern, dll.
            </p>
        </div>
        <div class="col-sm-4"> 
            <img src="img/Col3.jpg" alt="Gambar 3" class="img-thumbnail" style="width:100%">
            <p class="text-justify">
                Initiator adalah Hero yang tugasnya adalah untuk Open War (membuka peperangan).
                Contohnya seperti Spirit Breaker, Axe, Faceless Void, Tide Hunter, dll.
                Pasti seringkan melihat Spirit Breaker tiba-tiba menghilang dari lane,
                kemudian dia menabrak salah satu teammatemu? Itu namanya Open War :)
            </p>
        </div>
	</div>
</div>
<div class="container-fluid bg-4 text-center">
	<p>
    	Bootstrap Theme Made By Teknik Informatika<br>
        Email: <a href="mailto:irsyadpurbha@gmail.com">irsyadpurbha@gmail.com</a>
    </p> 
</div>>
</body>
</html>
