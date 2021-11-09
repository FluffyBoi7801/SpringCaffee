<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>SpringCoffee</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div class="contactWithUsMob">
		<div>
			<div>
				<img src="images/icons/closeBlack.svg" onclick="mobileContactClose()">
			</div>
		</div>
			<img src="images/icons/communication.svg">
			<p>
				Оставьте свой телефон и мы перезвоним
			</p>
			<form method="post" action="request.php">
				<input type="text" name="name" placeholder="Ваше имя" required="true">
				<input type="text" name="phone" placeholder="Ваш телефон" required="true">
				<input class="contact + cleanButton" type="submit" value="Отправить">
			</form>
	</div>
<!-- 	Main START    -->
	<div class="mobileMenu">
		<div>
			<img class="logo" src="images/logo.svg"/>
			<div class="mobileNav" onclick="mobileMenuClose()">
				<img src="images/icons/close.svg">
			</div>
		</div>
		<div class="mobList">
			<a href="#benefit" onclick="mobileMenuClose()">Выгода</a>
			<a href="#strategy" onclick="mobileMenuClose()">Стратегия</a>
			<a href="#garanty" onclick="mobileMenuClose()">Гарантия</a>
			<a href="#tariffs" onclick="mobileMenuClose()">Тарифы</a>
			<a href="#faq" onclick="mobileMenuClose()">FAQ</a>
			<a href="#about" onclick="mobileMenuClose()">О нас</a>
		</div>
	</div>
	<div id="head">
		<img class="bgImageBeansHead" src="images/coffeBeansBackground.png">
		<header>
			<img class="logo" src="images/logo.svg"/>
			<nav>
				<ul>
					<li><a href="#benefit">Выгода</a></li>
					<li><a href="#strategy">Стратегия</a></li>
					<li><a href="#garanty">Гарантия</a></li>
					<li><a href="#tariffs">Тарифы</a></li>
					<li><a href="#faq">FAQ</a></li>
					<li><a href="#about">О нас</a></li>
				</ul>
			</nav>
			<div class="mobileNav" onclick="mobileMenuOpen()">
				<img src="images/icons/mobileMenu.svg">
			</div>
		</header>
		<div class="factory">
			<p>ПРОИЗВОДСТВО</p>
			<p>И ПРОДВИЖЕНИЕ</p>
			<p>КОФЕЙНЫХ</p>
			<p>АППАРАТОВ</p>
			<p class="sub">Мы не просто любим кофе, мы вкладываем часть души!</p>
			<div class="contact" onclick="mobileContactOpen()">Связаться с нами</div>
		</div>
		<img class="bgImageHand" src="images/hand.png">
	</div>
	<div id="machine">
		<div class="boxer">
			<div class="header">
				<p>ЧТО ТАКОЕ КОФЕЙНЯ</p>
				<p class="subtext">САМО-ОБСЛУЖИВАНИЯ?</p>
			</div>
		</div>
		<div class="cards">
			<div class="cardsField">
				<div class="card">
					<p>0 сотрудников</p>
					<img src="images/stickers/1.png"/>
				</div>
				<div class="card">
					<p>Недорогая аренда</p>
					<img src="images/stickers/2.png"/>
				</div>
				<div class="card">
					<p>Низкая<br>себестоимость</p>
					<img src="images/stickers/3.png"/>
				</div>
				<div class="card">
					<p>Никаких проблем<br>с сотрудниками</p>
					<img src="images/stickers/4.png"/>
				</div>
				<div class="card">
					<p>Пассивный доход</p>
					<img src="images/stickers/5.png"/>
				</div>
				<div class="card + orange">
					<p>До 200% в год</p>
					<img src="images/stickers/6.png"/>
				</div>
				<div class="card">
					<p>30 минут в день<br>на ведение бизнеса</p>
					<img src="images/stickers/7.png"/>
				</div>
				<div class="card + green">
					<p>Помощь<br>в оформлении<br>и ведении бизнеса</p>
					<img src="images/stickers/8.png"/>
				</div>
			</div>
			<img src="images/coffeeMachiche.png" class="coffemchn">
		</div>
	</div>
	<div id="benefit">
		<div class="boxer">
			<div class="header">
				<p>ПОЧЕМУ РАБОТАТЬ</p>
				<em>С НАМИ </em><em class="subtext">ВЫГОДНО?</em>
			</div>
		</div>
		<div class="cards + short">
			<div class="card">
				<img src="images/icons/heart.png"/>
				<p>Работа с нами</p>
				<p class="sub">Максимально гибкий подход, 
					вы берете на себя только те вопросы, 
					которыми хотите заниматься, 
					все остальное мы берем на себя, 
					возможен вариант инвестирования</p>
			</div>
			<div class="card + black">
				<img src="images/icons/error.png"/>
				<p>Собственный<br>бизнес</p>
				<p class="sub">Оформление, время на регулярный контроль, 
				документооборот, поиск поставщиков</p>
			</div>
			<div class="card + black">
				<img src="images/icons/error.png"/>
				<p>Приобретение<br>франшизы</p>
				<p class="sub">Регулярные взносы, требования франчайзи, 
				которые мешают<br>развиваться</p>
			</div>
		</div>
		<div class="margin-28">
			<div class="contact" onclick="mobileContactOpen()">Связаться с нами</div>
		</div>
	</div>
	<div id="strategy">
		<div class="boxer">
			<div class="header">
				<em>НАША </em><em class="subtext">СТРАТЕГИЯ</em>
			</div>	
		</div>
		<div class="cards + margin-64">
			<div class="card + cardBigF + cardBig + white">
				<img style="width: 58px;" class="icon" src="images/icons/first.svg"/>
				<div class="text">
					<h1 class="blackText">Покупка автоматов</h1>
					<p class="blackText">Какой то текст, который должен тут быть. Какой то текст, который должен тут быть
					Какой то текст, который должен тут бытьКакой то текст, который должен тут быть</p>
				</div>
			</div>
			<img class="arrow" width="100px" src="images/icons/arrow.svg"/>
			<div class="card + cardBigS + cardBig + transparent">
				<img style="width: 58px;" class="icon" src="images/icons/second.svg"/>
				<div class="text">
					<h1>Развитие сети</h1>
					<p>Какой то текст, который должен тут быть. Какой то текст, который должен тут быть. Какой то текст, который должен тут быть. Какой то текст, который должен тут быть</p>
				</div>
			</div>
		</div>
		<img class="bgImage" src="images/circle.png">
		<div class="calc">
			<img src="images/icons/calculator.svg"/>
			<div class="calcBody">
				<div class="calcHeader">
					<h1>Калькулятор<br>расчета<br>выгодности</h1>
					<div class="profit">
						<em id="prof">249 000</em><em> ₽</em>
						<p>Прибыль</p>
						<em class="investment" id="invest">34 000</em><em class="investment"> ₽</em>
						<p class="forHide">Вложение</p>
					</div>
				</div>
				<div class="inputBody">
					<label for="calculate" class="calculate">
					<p>0 ₽</p>
					<p>10 000 000 ₽</p>
					</label>
					<div class="inputBody">
						<img src="images/icons/slider.svg" class="sliderStart">
						<input id="calculate" type="range" value="34" style="--value:34;">
						<img src="images/icons/slider.svg" class="sliderEnd">
					</div>
				</div>
				<p>Вложение</p>
				<div class="contact + white + flex-center" onclick="mobileContactOpen()">Инвестировать</div>
			</div>
		</div>
		<img class="bgImageBeans" src="images/beans.png">
	</div>
	<div id="garanty">
			<div class="cardsParent">
				<div class="header">
					<em>ДОВЕРИЕ И </em><em class="subtext">ГАРАНТИЯ</em>
				</div>
				<div class="garantiesCards">
				<div class="garantyCard">
					<img src="images/icons/physics.svg">
					<p>Собственное<br>производство<br>автоматов</p>
				</div>
				<div class="garantyCard">
					<img src="images/icons/card.svg">
					<p>Опытная команда</p>
				</div>
				<div class="garantyCard">
					<img src="images/icons/globus.svg">
					<p>Более 500<br>собственных точек</p>
				</div>
				<div class="garantyCard">
					<img src="images/icons/textbook.svg">
					<p>Опыт в обслуживании<br>вендинговых автоматов</p>
				</div>
				<div class="garantyCard">
					<img src="images/icons/rating.svg">
					<p>Лучшие поставщики</p>
				</div>
			</div>
		</div>
	</div>
	<div id="tariffs">
		<div class="cards + margin-4">
			<div class="cardsParent">
				<div class="header">
					<em>НАШЕ </em><em class="subtext">ОБОРУДОВАНИЕ</em>
				</div>
				<div class="machines">
					<div class="machineCard">
						<img src="images/coffeeMachiche__.png"/>
						<div class="cardContent">
							<h1>Аппарат “Эконом”</h1>
							<p>Максимально гибкий подход, вы берете на себя только те вопросы, которыми хотите заниматься, 
							все остальное мы берем на себя, возможен вариант инвестирования</p>
							<div>
								<em>34 000</em><em> ₽</em>
							</div>
							<div class="contact + black + whiteText" onclick="mobileContactOpen()">Купить</div>
						</div>
					</div>
					<div class="machineCard + orange">
						<img src="images/coffeeMachiche__.png"/>
						<div class="cardContent">
							<h1>Аппарат “Стандарт”</h1>
							<p>Максимально гибкий подход, вы берете на себя только те вопросы, которыми хотите заниматься, 
							все остальное мы берем на себя, возможен вариант инвестирования</p>
							<div>
								<em>55 000</em><em> ₽</em>
							</div>
							<div class="contact + black + whiteText" onclick="mobileContactOpen()">Купить</div>
						</div>
					</div>
					<div class="machineCard + purple">
						<img src="images/coffeeMachiche__.png"/>
						<div class="cardContent">
							<h1>Аппарат “Люкс”</h1>
							<p>Максимально гибкий подход, вы берете на себя только те вопросы, которыми хотите заниматься, 
							все остальное мы берем на себя, возможен вариант инвестирования</p>
							<div>
								<em>75 000</em><em> ₽</em>
							</div>
							<div class="contact + black + whiteText" onclick="mobileContactOpen()">Купить</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<img class="bgImageBeansBottom" src="images/beansBottom.png">
	</div>
	<div id="faq">
		<div class="boxer">
			<div class="header">
				<em>ВОПРОС </em><em class="subtext">ОТВЕТ</em>
			</div>
		</div>
		<img class="bgImageDecorations" src="images/faqDecoratoins.png">
		<div class="questions">
			<div class="wrapper">
				<hr>
				<div id="qstBlk1" class="qstBlock1 hidden">
					<div>
						<img src="images/icons/add.svg" class="qst1"/>
						<h1>Как оформить все нужные документы?</h1>
					</div>
					<p>Спрос на кофе в России растёт с каждым годом, данный автомат позволит получать пассивный доход. Доставим по вашему адресу полностью проверенный и готовый к работе вендинговый кофейный автомат Jofemar G250. Данный автомат хорошо зарекомендовал себя в работе, и является одним из самых популярных среди кофейных автоматов.</p>
				</div>
				<hr>
				<div id="qstBlk2" class="qstBlock2 hidden">
					<div>
						<img src="images/icons/add.svg" class="qst2"/>
						<h1>Где искать подходящее помещение?</h1>
					</div>
					<p>Спрос на кофе в России растёт с каждым годом, данный автомат позволит получать пассивный доход. Доставим по вашему адресу полностью проверенный и готовый к работе вендинговый кофейный автомат Jofemar G250. Данный автомат хорошо зарекомендовал себя в работе, и является одним из самых популярных среди кофейных автоматов.</p>
				</div>
				<hr>
				<div id="qstBlk3" class="qstBlock3 hidden">
					<div>
						<img src="images/icons/add.svg" class="qst3"/>
						<h1>Какой апарат выбрать для старта?</h1>
					</div>
					<p>Спрос на кофе в России растёт с каждым годом, данный автомат позволит получать пассивный доход. Доставим по вашему адресу полностью проверенный и готовый к работе вендинговый кофейный автомат Jofemar G250. Данный автомат хорошо зарекомендовал себя в работе, и является одним из самых популярных среди кофейных автоматов.</p>
				</div>
				<hr>
				<div id="qstBlk4" class="qstBlock4 hidden">
					<div>
						<img src="images/icons/add.svg" class="qst4"/>
						<h1>Обслуживание и гарантии на наши кофейные апараты.</h1>
					</div>
					<p>Спрос на кофе в России растёт с каждым годом, данный автомат позволит получать пассивный доход. Доставим по вашему адресу полностью проверенный и готовый к работе вендинговый кофейный автомат Jofemar G250. Данный автомат хорошо зарекомендовал себя в работе, и является одним из самых популярных среди кофейных автоматов.</p>
				</div>
				<hr>
				<div id="qstBlk5" class="qstBlock5 hidden">
					<div>
						<img src="images/icons/add.svg" class="qst5"/>
						<h1>Какой кофе мы предоставляем.</h1>
					</div>
					<p>Спрос на кофе в России растёт с каждым годом, данный автомат позволит получать пассивный доход. Доставим по вашему адресу полностью проверенный и готовый к работе вендинговый кофейный автомат Jofemar G250. Данный автомат хорошо зарекомендовал себя в работе, и является одним из самых популярных среди кофейных автоматов.</p>
				</div>
				<hr>
				<div id="qstBlk6" class="qstBlock6 hidden">
					<div>
						<img src="images/icons/add.svg" class="qst6"/>
						<h1>Какой кофе мы предоставляем.</h1>
					</div>
					<p>Спрос на кофе в России растёт с каждым годом, данный автомат позволит получать пассивный доход. Доставим по вашему адресу полностью проверенный и готовый к работе вендинговый кофейный автомат Jofemar G250. Данный автомат хорошо зарекомендовал себя в работе, и является одним из самых популярных среди кофейных автоматов.</p>
				</div>
				<hr>
				<div id="qstBlk7" class="qstBlock7 hidden">
					<div>
						<img src="images/icons/add.svg" class="qst7"/>
						<h1>Еще какой то вопрос?</h1>
					</div>
					<p>Спрос на кофе в России растёт с каждым годом, данный автомат позволит получать пассивный доход. Доставим по вашему адресу полностью проверенный и готовый к работе вендинговый кофейный автомат Jofemar G250. Данный автомат хорошо зарекомендовал себя в работе, и является одним из самых популярных среди кофейных автоматов.</p>
				</div>
				<hr>
			</div>
		</div>
	</div>
	<div id="about">
		<img class="bgImageCoffee" src="images/coffee.png">
		<div>
			<div class="header">
				<em>О НАС</em>
			</div>
			<div class="aboutContainer">
				<p>
				Спрос на кофе в России растёт с каждым годом, данный автомат позволит получать пассивный доход. Доставим по вашему адресу полностью проверенный и готовый 
				к работе вендинговый кофейный автомат Jofemar G250. Данный автомат хорошо зарекомендовал себя в работе, и является одним из самых популярных среди кофейных автоматов.
				</p>
				<p class="subInfo">
				Высота торгового автомата 1,5 метра. Антивандальный корпус выполнен из прочной 1,5 мм стали с антикоррозийной обработкой, взломать такой аппарат гораздо сложнее, чем ряд его менее защищенных.
				</p>
				<div class="multLogos">
					<img src="images/logoBottom.png">
					<img src="images/logoBottom.png">
					<img src="images/logoBottom.png">
				</div>
			</div>
		</div>
	</div>
	<div id="ready">
		<div class="boxer">
			<div class="header">
				<div>
					<h1>Готовы начать<br>сотрудничество?</h1>
					<img src="images/stickers/smile.png"/>
				</div>
				<p>Оставьте свой номер телефона и в ближайшее<br>время мы вам перезвоним</p>
			</div>
			<form method="post" action="request.php">
				<input type="text" name="name" placeholder="Ваше имя" required="true">
				<input type="text" name="phone" placeholder="Ваш телефон" required="true">
				<input class="contact + cleanButton" type="submit" value="Отправить">
			</form>
		</div>
		<img class="bgImageBeansForm" src="images/beansForm.png">
		<img class="bgImagePacketOfCoffee" src="images/packetOfCoffee.png">
	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>