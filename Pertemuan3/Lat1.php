<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 1</title>
    <?php include('../inc/inc.php'); ?>
</head>
<body>
<div class="container-fluid pt-2">
	<div class="row">
    	<div class="col-sm-3">
       		<h4>DOTA 2</h4>
      		<ul class="nav nav-pills flex-column">
            	<li class="nav-item">
      				<a class="nav-link" href="#">Berita</a>
    			</li>
            	<li class="nav-item">
      				<a class="nav-link active" href="#">Jadwal</a>
    			</li>
            	<li class="nav-item">
      				<a class="nav-link" href="#">Tutorial</a>
    			</li>
            	<li class="nav-item">
      				<a class="nav-link" href="#">Leaderboard</a>
    			</li>
      		</ul>
      		<div class="input-group input-group-sm mt-3">
    			<span class="input-group-text">Search</span><input type="text" class="form-control">
  			</div>
  		</div>
    	<div class="col-sm-9">
      		<h4>Berita Seputar DOTA</h4>
      		<hr>
		    <?php include('contentlat1.php'); ?>    
     	</div>
    </div>
</div>
<footer class="container-fluid p-5 mt-2 text-center bg-light">
	<p>
    	Bootstrap Theme Made By
        <a href="mailto:irsyadpurbha.fst@uia.ac.id">irsyadpurbha.fst@uia.ac.id</a><br>
        <i class="bi bi-apple"></i> Copyright @2021 - All Rights Reserved
  	</p>
</footer>
</body>
</html>
