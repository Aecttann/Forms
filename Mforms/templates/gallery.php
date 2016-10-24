<!DOCTYPE html>
	<head>
			
			<link href="../static/css/new_style.css" rel="stylesheet">
			<meta charset="utf-8">
			<title> Cats </title>
			<Meta charset= "utf-8">
			<Meta name="Author" content="Гридин Михаил">
			<link rel="shortcut icon" href="../static/images/icon.jpg" type="image/jpg">
			
	</head>
	<body >
	<ul id="nav">
	<li>
		<a href="index.php" title="Вернуться на главную страницу">Главная</a>
	</li>
	<li>
		<a href="breeds.php" title="Видео">Породы</a>

	</li>
	<li>
		<a href="gallery.php" title="Галерея">Галерея</a>
		<ul>

		</ul>
	</li>
	<li>
		<a href="contacts.php" title="Как с нами связаться">Контакты</a>

	</li>
		</li>
</ul>
	
	
	<form  action= "catrand.php" method="POST" name="form">
	<h4>How mach text need to print?</h4>
	<input type="text" onkeyup="validate(this)" name="inp"> <script> function validate(inp) { inp.value = inp.value.replace(/[^\d,.]*/g, '') .replace(/([,.])[,.]+/g, '$1') .replace(/^[^\d]*(\d+([.,]\d{0,5})?).*$/g, '$1'); } </script>
	<h4>Select how print text</h4>
<input type="radio" name="b001" value="First"><font>text</font>
<input type="radio" name="b001" value="Second"><font>check</font>
<input type="radio" name="b001" value="Last"><font>radio</font>
	<h4>Input text</h4>
	<input type="text" name="inp1">
	<input type="text" name="inp2">
	<input type="text" name="inp3">
	<p><input type="submit"></p>	
	</form>
	


	
	</body>
</html>
