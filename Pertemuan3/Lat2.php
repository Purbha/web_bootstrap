<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2</title>
    <?php include('../inc/inc.php'); ?>
</head>
<body>
<div class="mb-2 p-5 text-white rounded" style="background:url('bg_header.jpg')">
    <h1>Dota 2 Forum Indonesia</h1>
    <p>Download Apps Detikcom Sekarang</p>
</div>
<div class="container-fluid pt-2">
	<div class="row">
    	<div class="col-sm-3">
            <?php include('sidecontent.php'); ?>    
        </div>
    	<div class="col-sm-9">
      		<h4>Berita Seputar DOTA</h4>
      		<hr>
		    <?php include('contentlat2.php'); ?>    
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
