<?php
	session_start();

	class Page {

		function header() {
			echo <<< html
<!doctype html>
<html lang="ru">
	<head>
		<title>Доска бесплатных объявлений | Event.ru</title>
		<meta charset="utf-8">

		<link rel='icon' href='favicon.ico' type='image/x-icon'>
		<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

		<meta http-equiv='pragma' content='no-cache'>

		<meta http-equiv="refresh" content="">

		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='author' content=''>
		<meta name='keywords' content='' lang='ru'>
		<meta name='keywords' content='' lang='en'>
		<meta name='description' content=''>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
		<meta name='HandheldFriendly' content='true'>

		<link rel="stylesheet" type="text/css" href="style/reset.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>

		<div class="container">
html;
		}

		function menu($login) {
			#if (empty($_SESSION['email']) && empty($_SESSION['password']))
			if (!$login)
				# если пользователь не вошёл - отображаем элементы для регистрации: боковой меню и модальное окно
				echo <<< html
<div class="sign-window">
	<header>Регистрация<span class="close"></span></header>
	<form method='post' action='mvc/controller.php' accept-charset="utf-8">
		<label for="name">Имя</label>
		<input id="name" type="text" name="name" placeholder="Введите ваше имя">

		<label for="surname">Фамилия</label>
		<input id="surname" type="text" name="surname" placeholder="Введите вашу фамилию">

		<label for="tel">Телефон</label>
		<input id="tel" type="tel" name="tel" placeholder="Введите ваш телефона">

		<label for="password">Пароль</label>
		<input id="password" type="password" name="password" placeholder="Введите ваш пароль">

		<input type="submit" name="login" value="Зарегистрироваться">
	</form>
</div>
<div class="left-login">
	<header>Вход</header>
	<form method='post' action='mvc/controller.php' accept-charset="utf-8">
		<label for="tel">Телефон</label>
		<input id="tel" type="tel" name="tel" placeholder="Введите ваш телефона">

		<label for="password">Пароль</label>
		<input id="password" type="password" name="password" placeholder="Введите ваш пароль">

		<input class="login-button" type="submit" name="login" value="Войти">
		<input class="sign-button" type="button" value="Регистрация">
	</form>
</div>
html;
			else # отображаем меню зарегестрированного пользователя
				echo <<< html
<div class="menu">
	<header>
		<figure class="profile">
			<img src="/picture/4jbZ3U-CrIU big.jpg" alt="Дмитрий Должанский" title="Дмитрий Должанский">
			<figcaption>
				<span>Дмитрий</span>
				<span>Должанский</span>
			</figcaption>
		</figure>
		<span class="location">г. Санкт-Питербург</span>
	</header>

	<main>
	</main>

	<footer>

	</footer>
</div>
html;

# backdrop отображается в любом случае
			echo <<< html
<div class="backdrop"></div>
html;
		}


		function footer() {
			echo <<< html
		</div>

		<script src='script/lib/jquery-3.2.1.min.js'></script>
		<script src='script/main.js'></script>
	</body>
</html>
html;
		}


	}