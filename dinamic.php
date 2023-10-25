<!DOCTYPE html>
<html lang = "en">
<head>
	<meta name = "viewport" content="width=device-width, initial-sclae=1.0">
	<meta charset = "UTF-8">
	<title>Pagina Dinamica</title>
	<script src="script1.js" defer></script>
</head>
<body>
	<p>ip: <?php echo $_SERVER["REMOTE_ADDR"]; ?></p>
	<p>data: <span id="data"></span></p>
	<p>hora: <span id="hora"></span></p>
</body>
</html>
