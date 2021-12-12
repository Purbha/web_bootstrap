<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pertemuan 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('../inc/inc.php'); ?>
  	<style>
		.warna_dasar {
			background-color: #9FF;
			padding: 5px;
		}
	</style>
</head>
<body>
<!--
	REFERENSI
	https://www.w3schools.com/bootstrap4/bootstrap_typography.asp
-->

<div class="container">
    <h1>Latihan 3 <small>Bootstrap 4 Text/Typography</small></h1>
    <p align="justify">Berikut ini contoh paragraf yang menggunakan blockquote.</p><hr>
    <blockquote class="blockquote">
        <p align="justify">
            <strong>Jakarta</strong> - Perkembangan <mark>eSports</mark> di Indonesia memang belum sebesar
            negara-negara maju. Namun, satu per satu tim <mark>eSports</mark> asal Indonesia mulai 
            menunjukkan tajinya.
        </p>    
	    <footer class="blockquote-footer">Muhammad Alif Goenawan - detikInet</footer>
    </blockquote>
    <br>
    <p align="justify">
        <kbd>Nah</kbd>, setelah Elite8 Esports, kini giliran tim Pondok Gaming BarracX
        yang ingin menjajal kemampuan mereka dalam turnamen internasional
        <abbr title="Defense Of The Ancients" class="warna_dasar">DOTA</abbr>.
        Bertajuk Galaxy Battle Season 2, kejuaraan ini merupakan salah satu turnamen major
        yang telah masuk dalam kalender <abbr title="Defense Of The Ancients" class="warna_dasar">DOTA</abbr>
        Pro Circuit.
    </p>
    <footer>Muhammad Alif Goenawan - detikInet</footer>
</div>
</body>
</html>