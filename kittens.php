<!DOCTYPE html>
<head>
	<title>Питомник британских кошек "Twix"</title>
	<meta charset="utf-8">
	<meta name="description" content=""/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="onas.html">О нас</li>
				<li><a href="kontakts.html">Контакты</a></li>
				<li><a href="kittens.php">Хочу котенка</li>
			</ul>
		</nav>
	</header>
	<div class="logo2">
		<a href="index.html"><img src="img/logo 2.png"/></a>
	</div>
	<div class="heading">
		Хочу котенка
	</div>
	<div class="inscriptionas">
		<form>
		<input type="text" placeholder="Введите искомое слово" id="poisk"></form>
		Выбор котенка:
		<div id="spiski">
			<?
			require_once ("script.php");
	  	$articles = kittens_all($db);?>
	  <ul>
			<?php foreach($articles as $a): ?>
	  <li><?=$a["kitten"]?></li>
	  <?php endforeach;?>
	  </ul>
	</div><script type="text/javascript" src="script.js"></script>
	</div>
	<footer>
		<div class="vk">
		</div>
		<div class="fb">
		</div>
		<div class="wp">
		</div>
	</footer>
</body>
</html>
