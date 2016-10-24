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
<?

		$fullbeginner='Full Beginner';
		$elementary='Elementary';
		$upperelementary='Upper-Elementary';
		$pre='Pre-Intermediate';
		$inter='Intermediate';
		$fullbeginner='Upper-Intermediate';
		$fullbeginner='Advanced';
		$fullbeginner='Proficiency';
	if($_POST['sub']){
		$b1 = $_POST['sel'];
		if(($b1==$fullbeginner)||($b1==$elementary) ||($b1==$upperelementary)||($b1==$pre))
		{
			echo 'К сожалению, мы не рекомендуем Вам пользоваться услугами Work and Travel на данный момент.';
		}
		else
		{
			echo 'Поздравляем, Вашего уровня аглийского достаточно для сотрудничества с Work and Travel!';
		}
	}
		
	$number = $_POST['inp'];
	$select = $_POST['sel'];
	
	$text[] = 'Restaurant Worker';
    $text[] = 'Housekeeping';
    $text[] = 'Chocolateer	';
    $text[] = 'Cleaner';
    $text[] = 'Food Prep';
	$text[] = 'Lifeguard';
	$text[] = 'Team Member ';
	$text[] = 'Ride Operator';
	$text[] = 'Cashier';

	for($i=1;$i<=$number;$i++)
		{
			srand ((double) microtime() * 1000000);
			$random_number = rand(0,count($text)-1);
			echo "<br>" . ($text[$random_number]); 
	}
	
		
?>
	</body>
</html>