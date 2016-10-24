<!DOCTYPE html>
	<head>
			<link href="../static/css/bootstrap.min.css" rel="stylesheet">
			<link href="../static/css/new_style.css" rel="stylesheet">
			<meta charset="utf-8">
			<title> PHP </title>
			<Meta charset= "utf-8">
			<Meta name="Author" content="Никонов Кирилл">
			<link rel="shortcut icon" href="../static/images/elephpant_small.png" type="image/png">
			
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
      <a class="navbar-brand" href="index.php">PHP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Главная</a></li>


        <li><a href="whattoread.php">Что почитать?</a></li>
		<li><a href="whattodownload.php">Что скачать?</a></li>
        <li><a href="contacts.php">Контакты</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

	<?php
	$books = $_POST["number_"];
		for($i=1;$i<=$books;$i++)
	{
		echo 'Книга ' . rand(1, 14) . '</br>';
	}
	?>
	Перечень книг:
	<a href="http://fkn.ktu10.com/?q=node/2276">PHP books</a>
	
	</body>
</html>
