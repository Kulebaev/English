<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Репетитор по английскому языку Ольга Балабанова</title>
	<link rel="preload" as="font" href="font/roboto-black.woff" type="font/woff" crossorigin="anonymous">
	<link rel="preload" as="font" href="font/roboto-bold.woff" type="font/woff" crossorigin="anonymous">
	<link rel="preload" as="font" href="font/roboto-regular.woff" type="font/woff" crossorigin="anonymous">
	<link rel="preload" as="font" href="font/roboto-black.woff2" type="font/woff" crossorigin="anonymous">
	<link rel="preload" as="font" href="font/roboto-bold.woff2" type="font/woff" crossorigin="anonymous">
	<link rel="preload" as="font" href="font/roboto-regular.woff2" type="font/woff" crossorigin="anonymous">

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/font.css">

	<script src="js/script.js" defer></script>
	<script src="js/jquery-3.5.1.js" defer></script>
</head>

<body>

	
	<div class="main_conteiner">
		<header class="header">
			<div class="top_block fixed">
				<button class="btn-reset burger header__burger"></button>

				<nav class="nav_menu">
					<ul class="nav_list reset-list">
						<li class="list_class">
							<a href="#services" class="nav_link" class="smooth-scroll">Услуги</a>
						</li>
						<li class="list_class">
							<a href="#portfolio" class="nav_link" class="smooth-scroll">Направление</a>
						</li>
						<li class="list_class">
							<a href="#price" class="nav_link" class="smooth-scroll">Обо мне</a>
						</li>
					</ul>
				</nav>

				<a href="tel:+74999955577" class="phone">+7 (499) 995-55-77</a>
				<div class="footer_bc nav_foot">
					<ul class="social">
						<li>
							<a href="https://vk.com/write15415479" class="vk" aria-label="Вконтакте"
								alt="Вконтакте"></a>
						</li>
						<li>
							<a href="tg://resolve?domain=troubleolga" class="fb" aria-label="tg" alt="tg"></a>
						</li>
						<li>
							<a href="https://wa.me/79099100464" class="inst" aria-label="whats" alt="whats"></a>
						</li>
					</ul>
				</div>
				<button class="btn btn_head header_btn btn-reset" onclick="openPopup()">Записаться на занятие</button>
			</div>
		</header>
		<section class="central_block">
			<span class="fly_tag fly_tag-braces">though</span>
			<span class="fly_tag fly_tag-div">tough</span>
			<span class="fly_tag fly_tag-hash">through</span>
			<span class="fly_tag fly_tag-div2">thought</span>
			<span class="fly_tag fly_tag-closed">thorough</span>
			<div class="about_container fixed">
				<div class="about_info">
					<h1 class="info_title">
						Изучи английский язык <br>с репетитором
						<span class="info_desc">в совершенстве онлайн за 4 месяца</span>
					</h1>
					<button class="btn btn_fill about_btn btn-reset">Записаться на пробный урок</button>
				</div>
				<img src="img/desctop/Flag.png" alt="man" class="about_img">
				<picture class="about_svg"></picture>
			</div>
		</section>
		<section id="services" class="main_block">
			<div class="doing fixed">
				<h2 class="doing_h2">Уроки со мной это:</h2>
				<a name="services"></a>
				<ul class="doing_list-main">
					<li class="doing_list-item">
						<div class="doing_block doing_list-1">Большой выбор программ</div>
					</li>
					<li class="doing_list-item">
						<div class="doing_block doing_list-2">Индивидуальный подход</div>
					</li>
					<li class="doing_list-item">
						<div class="doing_block doing_list-3">Проверка домашнего задания</div>
					</li>
					<li class="doing_list-item">
						<div class="doing_block doing_list-4">Работа над ошибками</div>
					</li>
				</ul>
				<button class="btn_main btn_fill about_btn btn-reset">Узнать уровень Английского</button>
			</div>
		</section>

		<div id="popup-container" class="popup-container">
					<?php include 'popup.php'; ?>
				</div>
		<section id="portfolio" class="work">
			<div class="work_main fixed">
				<h2 class="work_h2-main">Нас объединяет любовь к английскому языку​​​​​​​</h2>
				<div class="work_text">
					<!--<button class="btn_work-left btn-reset"></button>-->
					<div class="work_list">
						<img src="img/desctop/Layer1.png" alt="#" class="work_img">
						<span class="work_desc"><br>Для детей и подростков</span>
					</div>
					<div class="work_list">
						<img src="img/desctop/Layer2.png" alt="#" class="work_img">
						<span class="work_desc">Для взрослых</span>
					</div>
					<div class="work_list">
						<img src="img/desctop/Layer3.png" alt="#" class="work_img">
						<span class="work_desc">Подготовка к экзаменам</span>
					</div>
					<!--<button class="btn_work-right btn-reset"></button>-->
				</div>
				<button class="btn_work btn_fill about_btn btn-reset">Записаться на занятие</button>
			</div>
		</section>
		<section id="price" class="advertising_bot">
			<div class="advertising_text fixed">
				<span class="fly_tag-main fly_tag-braces-main">the</span>
				<span class="fly_tag-main fly_tag-div-main">at</span>
				<span class="fly_tag-main fly_tag-hash-main">in</span>
				<span class="fly_tag-main fly_tag-div2-main">a</span>
				<span class="fly_tag-main fly_tag-closed-main">an</span>
				<div class="ad_text">

					<h2 class="ad_h3">Многолетний опыт дистанционных занятий с учащимися.*</h2>
					<span class="ad_span">*Программа предназначена для пользователей с начальным уровнем владения языком
						и направлена на развитие разговорной речи, навыков восприятия языка на слух, чтения, устного и
						письменного перевода. Содержит полный курс грамматики, подкреплённый системой упражнений и
						тестов.<br>
						<br>Программа предназначена для пользователей с начальным уровнем владения языком и направлена
						на развитие разговорной речи, навыков восприятия языка на слух, чтения, устного и письменного
						перевода. Содержит полный курс грамматики, подкреплённый системой упражнений и тестов.<br>
						<br>Типичный пользователь программы - человек, уже изучавший английский язык ранее, в школе или
						институте, но неудовлетворённый своими возможностями в языке.<br>
						<br>Программа предназначена для пользователей с начальным уровнем владения языком и направлена
						на развитие разговорной речи, навыков восприятия языка на слух, чтения, устного и письменного
						перевода. Содержит полный курс грамматики, подкреплённый системой упражнений и тестов.
					</span>
				</div>
			</div>
		</section>
		<footer class="foter">
			<div class="footer_top fixed">
				<nav class="footer_nav">
					<ul class="footer_nav-list reset-list">
						<li class="footer_list"><a href="#services" class="smooth-scroll">Услуги</a></li>
						<li class="footer_list"><a href="#portfolio" class="smooth-scroll">Направление</a></li>
						<li class="footer_list"><a href="#price" class="smooth-scroll">Обо мне</a></li>
					</ul>
				</nav>
				<ul class="footer_contact">
					<li class="tel">
						<i class="icon icon-phone">&#xe800;</i>
						<a href="tel:+74999957755">+7 (499) 995-77-55</a>
					</li>
					<li class="mail">
						<i class="icon icon-mail-alt">&#xf0e0;</i>
						<a href="mailto:dmitry@alekseev.com">OlgaB@gmail.com</a>
					</li>
				</ul>

				<div class="footer_bc">
					<ul class="social">
						<li>
							<a href="https://vk.com/write15415479" class="vk" aria-label="Вконтакте"
								alt="Вконтакте"></a>
						</li>
						<li>
							<a href="tg://resolve?domain=troubleolga" class="fb" aria-label="tg" alt="tg"></a>
						</li>
						<li>
							<a href="https://wa.me/79099100464" class="inst" aria-label="whats" alt="whats"></a>
						</li>
					</ul>
				</div>
			</div>
			<button id="scrollToTopButton" class="scroll-to-top-button"></button>
			<div class="footer_bot">
				© Ольга Балабанова, 2023
			</div>
		</footer>
	</div>
</body>

</html>