<!DOCTYPE html>
	<head>
			<link href="../static/css/new_style.css" rel="stylesheet">
			<meta charset="utf-8">
			<title> Cats </title>
			<Meta charset= "utf-8">
			<Meta name="Author" content="Гридин Михаил">
			<link rel="shortcut icon" href="../static/images/icon.jpg" type="image/jpg">
			<script type="text/javascript">
var a,b;
function uncheck_radio(c) {
    if (a != c) {b = 0;a = c};
    b ^= 1;
    c.checked = b
};
</script>
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
	
	
<?php
	$number = $_POST['inp'];	
	$numberone = $_POST['inp1']; 
	$numbertwo = $_POST['inp2']; 
	$numberthree = $_POST['inp3'];
	for($i=1;$i<=$number;$i++)
		{
			switch($_POST['b001']) {
				case "First":
				{
					echo $numberone . " "; 
					echo $numbertwo . " "; 
					echo $numberthree . "</br>";
					break;
				}
				case "Second":
				{
					echo "<input type=checkbox name=c001 value=First><font>".$numberone."</font>"; 
					echo "<input type=checkbox name=c001 value=Second><font>".$numbertwo."</font>"; 
					echo "<input type=checkbox name=c001 value=Third><font>".$numberthree."</br></font>";
					break;
				}
				case "Last":
				{
					echo "<input type=radio onclick=uncheck_radio(this) value=First name=h001>" .$numberone; 
					echo "<input type=radio onclick=uncheck_radio(this) value=Second name=h001>".$numbertwo; 
					echo "<input type=radio onclick=uncheck_radio(this) value=Third name=h001	>".$numberthree."</br>";
					break;
				}
			}			
	}
?>
</body>
</html>



