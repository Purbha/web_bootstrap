<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pertemuan 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('../inc/inc.php'); ?>
</head>
<body>
<!--
	REFERENSI
	https://www.w3schools.com/bootstrap4/bootstrap_tables.asp
-->
<div class="container-fluid">
	<div class="jumbotron">
		<h1>Bootstrap Images</h1> 
  		<p>Contoh image class dalam bootstrap.</p>
	</div>
    <!--
    https://stackoverflow.com/questions/23153497/
    bootstrap-row-class-contains-margin-left-and-margin-right-which-creates-problems
    -->
    
  	<div class="row">
    	<div class="col-sm-3 text-center" style="background-color:lavender;">
	    	<img src="pic1.png" class="rounded" alt="My Little Pony 1" width="200" height="115">
    	</div>
    	<div class="col-sm-3 text-center" style="background-color:lavenderblush;">
    		<img src="pic2.jpg" class="rounded-circle" alt="My Little Pony 2" width="200" height="115">
    	</div>
    	<div class="col-sm-3 text-center" style="background-color:lavender;">
    		<img src="pic3.jpg" class="img-thumbnail" alt="My Little Pony 3" width="200" height="115">
    	</div>
  	</div>
</div>
</body>
</html>
