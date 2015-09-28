
<html>
<head>
<title>Welcome to Toy Robot</title>
</head>


<body>
<form name="frmNew" action="" method="post">
	<link href="css/main.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery.1.10.2.js"></script>
	
    <div class="viewport">
        
    </div>
    <div class="command">
        <input type="button" value="Place Robot" class="place">
        <input type="button" value="Turn Right" class="right">
        <input type="button" value="Turn Left" class="left">
        <input type="button" value="Move" class="move">
        <input type="button" value="Save" onClick="save();">
		
        <div class="coordinate-now">
            <h2></h2>
        </div>
    </div>
</form>
</body>
</html>


<?php
	require_once "main.php";
?>
