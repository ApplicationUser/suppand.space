<?php
	session_start();
	require_once 'mvc/view.php';

	if (isset($_GET['login']) && $_GET['login'] == 'true')
		$login = true;

	$page = new Page();

	$page -> header(); # + параметры meta-тегов

	if ($login)
		$page -> menu(true);
	else
		$page -> menu(false);
?>

<section class="main">
	<header>
		<?php if ($login) {
			echo "<div class=\"open-menu\"></div>";
			echo "<h1>Suppand.space</h1>";
			echo "<section class=\"profile\"><figure><img src=\"/picture/4jbZ3U-CrIU.jpg\" alt=\"\"><figcaption>Profile</figcaption></figure></section><section class=\"profile-menu\"><span>Ваш баланс: 531</span><a href=\"\">Настройки</a><a class=\"exit\" href=\"\">Выйти</a></section>";
		} else {
			echo "<h1 class=\"padding\">Suppand.space</h1>";
		}
		?>
	</header>

	<main>
		<div>
		<?php
			if (!$login)
				echo <<< html
			<section class="alert">
				<span></span>
				<p>Для того, чтобы использовать все возможности сайта <a href="">войдите</a> или <a href="">зарегистрируйтесь</a>.</p>
			</section>
html;
		?>
			<form id="search" method='post' action='mvc/controller.php' accept-charset="utf-8"></form>

			<div class="search">
				<input type="text" form="search" name="query" autocomplete="off" placeholder="Поиск...">
				<input type="button">
				<input type="submit" form="search" name="search_go" value="">
			</div>

			<div class="view">
				<a href="">Подать новое объявление</a>
				<div>
					<button class="active"></button>
					<button></button>
					<button></button>
				</div>
			</div>

			<div class="content one-style">
			<?php
				for ($i = 0, $j = 25; $i < 25; $i++, $j--) {
					$views = rand(0, 100);
					echo <<< product
				<div class="product">
					<header>
						<span>Продаю плюшевого мишку</span>
					</header>
					<figure>
						<img src="/picture/iwOucu1g9Hw.jpg" alt="Продаю плюшевого мишку" title="Продаю плюшевого мишку">
						<figcaption>
							<span>500 Р (договорная)</span>
							<span>Украина. Донецк</span>
							<div>
								<span class="rate" title="Рейтинг: {$j}">{$j}</span>
								<span class="views" title="Просмотры: {$views}">{$views}</span>
							</div>
						</figcaption>
					</figure>
					<footer>
						<span>Опубликовано: 13.10.2017 в 3:27</span>
					</footer>
				</div>
product;
}
			?>
			</div>
			<footer>Copyright &copy; 2017 Дмитрий Должанский, <br>по всем вопросам пишите на <span>dimkabelkin1@gmail.com</span></footer>
		</div>

		<div class="parameter-search">
			<span>Категория</span>
			<div class="change-category-parameters">
				<select id="cat0" name="cat0">
					<option selected="selected" disabled="disabled">Выберите категорию</option>
					<option value="0">Компьютеры и ноутбуки</option>
					<option value="1">Бытовая техника, интерьер</option>
					<option value="2">Телефоны MP3, GPS</option>
					<option value="3">ТВ, аудио/видео, фото</option>
					<option value="4">Игры, подарки, гаджеты</option>
					<option value="5">Программное обеспечение</option>
					<option value="6">Компьютерные комплектующие</option>
					<option value="7">Активный отдых, туризм и хобби</option>
					<option value="8">Товары для детей</option>
					<option value="9">Спортивные товары</option>
					<option value="10">Автотовары</option>
					<option value="11">Одежда и обувь</option>
					<option value="12">Косметика и парфюмерия</option>
					<option value="13">Офис, школа, книги</option>
					<option value="14">Зоотовары</option>
					<option value="15">Ювелирные украшения</option>
					<option value="16">Оружие</option>
					<option value="17">Товары для дома</option>
					<option value="18">Дача, сад, огород</option>
					<option value="19">Инструменты и оборудование</option>
					<option value="20">Распродажа</option>
					<option value="21">Алкогольные напитки и продукты</option>
				</select>
			</div>
			<span>Страна</span>
			<div class="change-country-parameters">
				<select id="country" name="country">
					<option selected="selected" disabled="disabled">Выберите страну</option>
					<option value="0">Россия</option>
					<option value="1">Украина</option>
				</select>
			</div>
			<span>Цена</span>
			<div class="change-price-parameters">
				<div>
					<label for="from_price">От:</label>
					<input id="from_price" min="0" autocomplete="off" type="number" name="from_price">
				</div>
				<div>
					<label for="to_price">До:</label>
					<input id="to_price" min="0" autocomplete="off" type="number" name="to_price">
				</div>
			</div>
			<div class="accept">
				<button>Применить</button>
			</div>
		</div>
	</main>
</section>

<?php
	$page -> footer();

	unset($page);