<!DOCTYPE html>
<html>
<head>
	<base href="<?=((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/'?>">
	<title>promo_secretychefa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

  	<div class="wrapper">
    <div class="content-nav">
      <div class="content-stock">     
        Акція з 12.10.2020 <br>
        по 08.11.2020
      </div>

      <ul class="content__list">
        <li class="content__list__item"><a href="#">Офіційні правила</a></li>
        <li class="content__list__item"><a href="#">Переможці</a></li>
      </ul>
    </div>

    <div class="content-body">
      <div class="content-card__wrap">
        <div class="content-card">
					<div class="content-card__image">
						<img src="assets/img/product.png" alt="">
						<img src="assets/img/1.png" alt="" class="content-card__num">
					</div>
          <div class="content-card__title">
            Купуй акційну <br>
          продукцію
          </div>
        </div>
  
        <div class="content-card">
					<div class="content-card__image">
						<img src="assets/img/vizitka.png" alt="">
						<img src="assets/img/2.png" alt="" class="content-card__num">
					</div>
          <div class="content-card__title">
            Реєструй <br>
            код
          </div>
        </div>
  
        <div class="content-card">
					<div class="content-card__image">
						<img src="assets/img/lottery.png" alt="">
						<img src="assets/img/3.png" alt="" class="content-card__num">
					</div>
          <div class="content-card__title">
            Ставай <br>
            учасником
          </div>
        </div>
  
        <div class="content-card">
			<div class="content-card__image">
				<img src="assets/img/present.png" alt="">
				<img src="assets/img/4.png" alt="" class="content-card__num">
			</div>
			<div class="content-card__title">Вигравай <br>
				подарунки <br>щотижня
          	</div>
        </div>
      </div>
      <div class="content-center">
        <div class="content__logo">
          <img src="assets/img/secrets-logo.png" alt="">
        </div>
        <p class="content__btn ocform">
          Зареєструвати код
        </p>
        <div class="content-descr ocform">
          Готуй на пательні, в духовці та <br>
          <span>вигравай подарунки</span>
        </div>
      </div>  
      <div class="content-image">
        <img src="assets/img/content-image.png" alt="">
      </div>
    </div>

		</div>

	<div class="wrap">
		<!-- Start Main Area -->
		<div class="main-area">

			<div class="main-areaa__wrap">
				<div class="main-areaa__top">

					<div class="main-area__title">
						<div class="main-area__title__text">
							<span>вигравай</span> подарунки від		
						</div>

						<div class="main-area__title__logo">
							<img src="assets/img/tefal-logo.png" alt="">
						</div>						 
					</div>

					<div class="main-areaa__image">
						<img src="assets/img/400present.png" class="main-areaa__image__present" alt="">
						<img src="assets/img/bg-line.png" class="main-areaa__line" alt="">
					</div>
				</div>
				<div class="main-areaa__bottom">
					<div class="main-areaa__bottom__left">
						<img src="assets/img/secrets-logo.png" alt="">
						<img src="assets/img/svoya-logo.png" alt="">
					</div>
					<div class="main-areaa__bottom__right">
						<div class="main-area__atb">
								для покупців <br>
								мережі магазинів
								<img src="assets/img/atb-logo.png" alt="">
						</div>
					</div>
				</div>
			</div>

		<!-- Start Form Area -->
		<div class="form-area">
			<div class="form-block">
				<div class="close ocform">
					<span></span>
					<span></span>
				</div>
				<form action="assets/php/formHandler.php" method="POST">
					<p class="form-title">РЕЄСТРАЦІЯ КОДУ</p>
					<input type="text" name="name"  placeholder="Вкажіть ім'я та прізвище">
					<input class="phone" type="text" name="phone" placeholder="Номер телефону">
					<input type="text" name="code"  placeholder="Акційний код">
					<div>
						<input type="checkbox" id="checkbox1" required name="check">
						<label for="checkbox1">Я даю згоду на обробку персональних даних</label>
					</div>
					<span class="result-text"></span>
					<button>Зареєструвати код</button>
				</form>
			</div>
		</div>
		<!-- End Form Area -->	
	</div>
	<!-- End Main Area -->

	<!-- Start Footer -->
	<div class="footer">
		<img src="assets/img/border-footer.png" alt="" class="footer__dashed">
		<div class="container">
			<div class="footer__top">
				<div class="footer__social">
					<a target="_blank" href="https://www.instagram.com/sekreti_chefa/"><img src="assets/img/instagram.png" alt=""></a>
					<a target="_blank" href="https://www.facebook.com/secretychefa"><img src="assets/img/fb.png" alt=""></a>
				</div>
				<a href="tel:0800500001" class="footer__phone">
					Гаряча лінія: 0 800 500 001
				</a>
			</div>
			<hr class="footer__hr">
			<div class="footer__bottom">
				<div class="footer__descr">
					<p>
						Акція проводиться на всій території України, за винятком тимчасово окупованих територій України, на якій органи державної влади України тимчасово не здійснюють свої повноваження (частини Донецької та Луганської областей), АР Крим.
					</p>
					<p>
						Послуга тільки для повнолітніх абонентів усіх національних GSM операторів. Вартість sms на номер 2909 для абонентів мережі ПрАТ «Київстар» складає 1,00 грн., ПрАТ «ВФ Україна» (ТМ Vodafone) складає  1,00 грн., ТОВ «лайфселл» складає 1,00 грн.. Тариф зазначено з урахуванням ПДВ та ПФ.  Технічна підтримка ТОВ "ЛЕОНКОМ УКРАЇНА". 01133, Україна, м. Київ, вул. Євгена Коновальця, б.32В, офіс 122. Номер технічної підтримки +380 (044) 392 92 00, у будні з 9.00 до 18.00. Дзвінки згідно тарифів Вашого оператора.
					</p>
					<p>
						Подарунки Акції складають: Cковорідка 24 см Origins Tefal (загальна кількість 200 шт.); Форма для запікання Tefal MasterSeal прямокутна 2 л, (загальна кількість 200 шт.)
					</p>
					
				</div>
				<a target="_blank" href="https://lioncom.pro/">
					<div class="footer__copy">
						<p>
							Виконавець акції
						</p>
						<img src="assets/img/lioncom-logo.svg" alt="lioncom">
					</div>
				</a>
			</div>
		</div>
	</div>
	<!-- End Footer -->
	</div>
	<!-- Scripts -->

	<!-- JQuery -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<!-- MainJS -->
	<script src="assets/js/main.js" type="text/javascript"></script>
	<!-- FormJS -->
	<script src="assets/js/form.js" type="text/javascript"></script>
	<!-- MaskedInputJQuery -->
	<script src="assets/js/jquery.maskedinput.min.js" type="text/javascript"></script>
	
</body>
</html>