<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('../inc/inc.php'); ?>
</head>
<body>
<div class="container">
    <h2>Nesting Button Groups</h2>
    <p>Nest button groups to create drop down menus.</p>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Samsung</button>
        <div class="btn-group">
	        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
       			Sony <span class="caret"></span>
       		</button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Tablet</a></li>
                <li><a href="#">Smartphone</a></li>
            </ul>
    	</div>
    </div>
</div>

</body>
</html>
