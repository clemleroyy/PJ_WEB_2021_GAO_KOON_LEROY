<?php
   session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RIEN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<?php
   // Set session variables (variables globales)
   $_SESSION['co'] = 0;

   ?>
	<p>TEST</p>
	<?php
		echo $_SESSION['co'];
	?>
	<a href="testindex.php">test</a>
</body>
</html>