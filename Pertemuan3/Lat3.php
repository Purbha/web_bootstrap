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
<div class="container">
    <h3>Contoh Tabel Sederhana</h3>
    <table class="table">
    <thead>
        <tr><th>Nama Depan</th><th>Nama Belakang</th><th>Hobi</th></tr>
    </thead>
    <tbody>
        <tr><td>Irsyad</td><td>Purbha</td><td>DOTA</td></tr>
        <tr><td>Almaira</td><td>Salsabila</td><td>Nyanyi, Nulis, Main Saper2an</td></tr>
        <tr><td>Inara</td><td>Rahmadina</td><td>Ngintilin Kaka Alma</td></tr>
    </tbody>
    </table>
    
    <h3>Contoh Tabel Bordered</h3>
    <table class="table table-bordered">
    <thead>
        <tr><th>Nama Depan</th><th>Nama Belakang</th><th>Hobi</th></tr>
    </thead>
    <tbody>
        <tr><td>Irsyad</td><td>Purbha</td><td>DOTA</td></tr>
        <tr><td>Almaira</td><td>Salsabila</td><td>Nyanyi, Nulis, Main Saper2an</td></tr>
        <tr><td>Inara</td><td>Rahmadina</td><td>Ngintilin Kaka Alma</td></tr>
    </tbody>
    </table>
    <h3>Contoh Tabel Hover</h3>
    <table class="table table-hover">
    <thead>
        <tr><th>Nama Depan</th><th>Nama Belakang</th><th>Hobi</th></tr>
    </thead>
    <tbody>
        <tr><td>Irsyad</td><td>Purbha</td><td>DOTA</td></tr>
        <tr><td>Almaira</td><td>Salsabila</td><td>Nyanyi, Nulis, Main Saper2an</td></tr>
        <tr><td>Inara</td><td>Rahmadina</td><td>Ngintilin Kaka Alma</td></tr>
    </tbody>
    </table>
    
    <h3>Contoh Contextual Tabel</h3>
    <table class="table">
    <thead>
        <tr><th>Nama Depan</th><th>Nama Belakang</th><th>Hobi</th></tr>
    </thead>
    <tbody>
        <tr class="table-primary"><td>Irsyad</td><td>Purbha</td><td>DOTA</td></tr>
        <tr class="table-info"><td>Almaira</td><td>Salsabila</td><td>Nyanyi, Nulis, Main Saper2an</td></tr>
        <tr class="table-danger"><td>Inara</td><td>Rahmadina</td><td>Ngintilin Kaka Alma</td></tr>
    </tbody>
    </table>
</div>
</body>
</html>
