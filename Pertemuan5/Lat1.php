<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pertemuan 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('../inc/inc.php'); ?>
</head>
<body> 
<!--
	REFERENSI
	https://www.w3schools.com/bootstrap4/bootstrap_cards.asp
-->
<div class="container">
	<h2>Card Image</h2>
    <div class="row">
        <div class="col-sm-6">
            <p>Posisi Image Diatas</p>
            <div class="card">
                <img src="gambar1.jpg" class="card-img-top" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Dota 2</h4>
                    <p class="card-text">Tunduk dari Malaysia, Indonesia Juara Dua Turnamen Dota</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>        
        </div>
        
        <div class="col-sm-6">
            <p>Posisi Image Dibawah</p>
            <div class="card" style="width:400px">
                <div class="card-body">
                    <h4 class="card-title">Dota 2</h4>
                    <p class="card-text">Tunduk dari Malaysia, Indonesia Juara Dua Turnamen Dota</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
                <img class="card-img-bottom" src="gambar2.jpg" alt="Card image" style="width:100%">
            </div>        
        </div>
    </div>
</div>
</body>
</html>
