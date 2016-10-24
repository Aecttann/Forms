<!DOCTYPE html>
	<head>
			<link href="../static/css/bootstrap.min.css" rel="stylesheet">
			<link href="../static/css/new_style.css" rel="stylesheet">
			<meta charset="utf-8">
			<title> WaT </title>
			<Meta charset= "utf-8">
			<Meta name="Author" content="Черникова Анастасия">
			<link rel="shortcut icon" href="../static/images/wat.jpg" type="image/jpg">
			
	</head>
	<body >
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">WaT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Главная</a></li>

        <li><a href="go.php">Куда можно поехать?</a></li>
		<li><a href="random.php">Мне повезёт!</a></li>
        <li><a href="contacts.php">Контакты</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>	
	<h3>Сколько вакансий предложить Вам?</h3>
	<form  action= "handler.php" method="POST" name="form">
	<input type="text" onkeyup="validate(this)" name="inp"> <script> function validate(inp) { inp.value = inp.value.replace(/[^\d,.]*/g, '') .replace(/([,.])[,.]+/g, '$1') .replace(/^[^\d]*(\d+([.,]\d{0,5})?).*$/g, '$1'); } </script>
	<h3>Какой у Вас уровень английского?</h3>
	<select name="sel">
		<option value="Full Beginner">Full Beginner</option>
		<option value="Elementary">TosElementaryhiba</option>
		<option value="Upper-Elementary">Upper-Elementary</option>
		<option value="Pre-Intermediate">Pre-Intermediate</option>
		<option value="Intermediate">Intermediate</option>
		<option value="Upper-Intermediate">Upper-Intermediate</option>
		<option value="Advanced">Advanced</option>	
		<option value="Proficiency">Proficiency</option>
	</select>
	<h3>Вы были за границей?</h3>
	<p><input type="radio" name="h001" value="First"><font>Да, был(а)</font></p>
	<p><input type="radio" name="h001" value="Second"><font>Нет, не был(а)</font></p>
	<p><input type="submit" name="sub"></p>
	</form>
	
	
	</body>
</html>
