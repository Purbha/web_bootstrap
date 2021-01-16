<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Split Buttons</h2>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Sony</button>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        	<span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Tablet</a></li>
            <li><a href="#">Smartphone</a></li>
        </ul>
    </div>
</div>
</body>
</html>