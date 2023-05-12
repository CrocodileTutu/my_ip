<?php
/*
 * This shows my IP
 * 
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My IP</title>
	<meta charset="UTF-8">
    <link href="style_my_ip" rel="stylesheet">
</head>
<body>
    <div>
        <br>
        <br>
        <center>
            <b><?php echo $_SERVER['REMOTE_ADDR'] ?></b>
        </center>
    </div>
</body>
</html>
