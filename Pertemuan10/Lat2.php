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
</body>
</html>
