<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pertemuan 9</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('../inc/inc.php'); ?>
    <style>
		.jumbotron { 
  			background-color: #3C53DB;
			color: #ffffff;
			margin-bottom:0px;`	
		}
		.container-fluid {
    		padding: 60px 50px;
  		}
		/*
		font: [ [ <'font-style'> || <'font-variant'> || <'font-weight'> ]?
		<'font-size'> [ / <'line-height'> ]? <'font-family'> ] | caption | icon | menu |
		message-box | small-caption | status-bar | inherit
		*/
		body {
    		font: 400 15px Lato, sans-serif;
    		line-height: 1.8;
    		color: #818181;
  		}
	</style>
</head>
<body>
<div class="jumbotron text-center">
	<h1>DOTA 2 <i class="fa fa-napster"></i></h1> 
  	<p>Turnamen Dunia Dota 2 Terancam Gagal Digelar, Kenapa?</p>
    <form class="form-inline justify-content-center">
    	<input type="email" class="form-control" size="50" placeholder="Masukan Email" required>
        <button type="button" class="btn btn-info">Subscribe Berita</button>
  	</form>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<ul class="navbar-nav">
    	<li class="nav-item">
      		<a class="nav-link" href="#">Menu 1</a>
    	</li>
    	<li class="nav-item">
      		<a class="nav-link" href="#">Menu 2</a>
    	</li>
    	<li class="nav-item">
      		<a class="nav-link" href="#">Menu 3</a>
    	</li>
    	<li class="nav-item">
      		<a class="nav-link" href="#">Menu 4</a>
    	</li>
  	</ul>
</nav>
<div id="contact" class="container-fluid bg-grey">
	<h2 class="text-center">Hubungi Kami</h2>
  	<div class="row">
    	<div class="col-sm-5">
      		<p>Anda bisa menghubungi kami 24 jam setiap hari (kecuali hari libur)</p>
      		<p><span class="fa fa-map-marker"></span> Jetiwaringin, Pondok Gede</p>
      		<p><span class="fa fa-phone"></span> +62 81211683690</p>
      		<p><span class="fa fa-envelope"></span> irsyadpurbha.fst@uia.ac.id</p>
    	</div>
    	<div class="col-sm-7">
      		<div class="row">
        		<div class="col-sm-6 form-group">
          			<input class="form-control" id="name" name="name" placeholder="Name"
                    	type="text" required>
        		</div>
        		<div class="col-sm-6 form-group">
          			<input class="form-control" id="email" name="email" placeholder="Email"
                    	type="email" required>
        		</div>
      		</div>
      		<textarea class="form-control" id="comments" name="comments" placeholder="Comment"
            	rows="5"></textarea>
            <br>
      		<div class="row">
        		<div class="col-sm-12 form-group">
                    <div class="btn-group pull-right">
        				<button type="button" class="btn btn-primary">Kirim</button>
        				<button type="button" class="btn btn-primary">Batal</button>
        				<button type="button" class="btn btn-primary">Ubah</button>
    				</div>
        		</div>
      		</div>
    	</div>
  	</div>
</div>
<div class="container text-center">
	<h3><a href="#"><span class="fa fa-android"></span></a></h3>
  	<p>Bootstrap Theme Made By <a href="#">irsyadpurbha.fst@uia.ac.id</a></p>
</div>
</body>
</html>
