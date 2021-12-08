<?php
   session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RIEN</title>
</head>
<body>
	<?php
   // Set session variables (variables globales)
   $_SESSION['co'] = 1;

   ?>
	<p>TEST</p>
	<?php
		echo $_SESSION['co'];
	?>
	<a href="testindex.php">test</a>
</body>
</html>