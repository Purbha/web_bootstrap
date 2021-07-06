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
<div class="container">
	<h2>Button Group</h2>
    <p>
	    Bootstrap allows you to group a series of buttons together (on a single line) in a button group.
	    The "btn-group" class creates a button group.
        Use a "div" element with class "btn-group" to create a button group.
    </p>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Samsung</button>
        <button type="button" class="btn btn-primary">Sony</button>
    </div>
</div>
<div class="container">
    <h2>Button Groups - Set Sizes</h2>
    <p>
    	Add class <code>.btn-group-*</code> to size all buttons in a button group.
    	Instead of applying button sizes to every button in a group, use class <code>.btn-group-lg|sm|xs</code>
        to size all buttons in the group.
    </p>
    <h3>Large Buttons:</h3>
    <div class="btn-group btn-group-lg">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Samsung</button>
        <button type="button" class="btn btn-primary">Sony</button>
    </div>
    <h3>Default Buttons:</h3>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Samsung</button>
        <button type="button" class="btn btn-primary">Sony</button>
    </div>
    <h3>Small Buttons:</h3>
    <div class="btn-group btn-group-sm">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Samsung</button>
        <button type="button" class="btn btn-primary">Sony</button>
    </div>
    <h3>Extra Small Buttons:</h3>
    <div class="btn-group btn-group-xs">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Samsung</button>
        <button type="button" class="btn btn-primary">Sony</button>
    </div>
</div>
<div class="container">
    <h2>Vertical Button Group</h2>
    <p>
    	Bootstrap also supports vertical button groups.
        Use the <code>.btn-group-vertical</code> class to create a vertical button group.
    </p>
    <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Samsung</button>
        <button type="button" class="btn btn-primary">Sony</button>
    </div>
</div>
<div class="container-fluid bg-4 text-center">
	<p>
    	Bootstrap Theme Made By Teknik Informatika<br>
        Email: <a href="mailto:irsyadpurbha@gmail.com">irsyadpurbha@gmail.com</a>
    </p> 
</div>
</body>
</html>
