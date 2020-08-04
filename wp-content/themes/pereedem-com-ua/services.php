<?php
/**
 * The main template file
 * Template Name: Услуги
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pereedem.com.ua
 */


?>
<?php get_header(); ?>
		<div class="class-width">
			<section class="content-header">
				<div class="content-header-text">
					<span class="text">
						Подготовка к перевозкам это не маловажная часть переезда. Начинать нужно с упаковки предметов и обеспечение целостности при переезде.
					</span>
					<br>
					<span class="color-text">
						Мы Вам в этом поможем!
					</span>
				</div>
				<div class="header-button">
					<span class="header-button-text">
						Рассчитаем стоимость перевозки вашего груза за 15 минут
					</span>
					<span class="header-button-button">
						<div class="button-zakaz">
							РАСЧИТАТЬ СТОИМОСТЬ
						</div>
					</span>
				</div>
			</section>
		</div>
	</section>
<section class="devider" style="background-color: white;">
	<div class="container">
		<h1>Компания <strong>pereedem.kiev.ua</strong> предоставляет весь перечень услуг в сфере грузоперевозок и переездов, а также доставки мало и крупногабаритных грузов, предметов и мебели, переезд офиса или квартиры. Вам достаточно обратиться к оператору, и он Вас сориентирует в услугах и ценах, чтобы Вы как клиент не задумывались об этом.</h1>
	</div>
</section>
<section class="our-services">
	<div class="content-section-services light-light-gray">
		<div class="container">
			<h2>
				УПАКОВКА
			</h2>
			<div class="content-single-our-service">
				<div class="img-ou-service">
					<img src="<?php echo get_template_directory_uri()?>/src/img/service_upakovka.jpg" alt="Упаковка грузов и вещей в плёнку и коробки компанией pereedem.kiev.ua">
				</div>
				<div class="content-our-service section-row">
					<p>Очень важным этапом для переезда является упаковка вещей и предметов по коробкам для избежания их повреждения. Компания предоставляет такую услугу как упаковка в коробки, стрейч пленку или пленку с пузырьками. Все что Вам необходимо то это при заказе услуг уведомить об этом оператора и сагласовать перечень всех необходимых Вам услуг, это обеспечит сохранность Ваших вещей и хорошего настроения при переезде.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="content-section-services">
		<div class="container">
			<h2>
				РАЗБОРКА МЕБЕЛИ
			</h2>
			<div class="content-single-our-service section-reverse">
				<div class="img-ou-service">
					<img src="<?php echo get_template_directory_uri()?>/src/img/service-razborka.jpg" alt="Услуги по разборук и сборке корпусной и мягкой мебели сотрудниками компании pereedem.kiev.ua">
				</div>
				<div class="content-our-service">
					<p>Часто получается так что вроде-бы все учли, и машину вызвали и грузчиков наняли, но вот незадача, некоторая мебель не пролазиет в дверной проем либо в коридоре с ней не розвернуться. И в этом случае необходимо разбирать крупногабаритную мебель, такую как: шкафы-купе, угловой диван, и т.п.. Наши специалисты Вам в этом помогут так как имеют опыт и инструмент. Что-бы учесть такой нюанс Вам необходимо просто сказать об этом оператору.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="content-section-services light-light-gray">
		<div class="container">
			<h2>
				ГРУЗЧИКИ
			</h2>
			<div class="content-single-our-service">
				<div class="img-ou-service">
					<img src="<?php echo get_template_directory_uri()?>/src/img/service-gruzchiki.jpg" alt="Предоставление услуги грузчиков по выносу и заносу личных вещей, строительных материалов, мебели компанией pereedem.kiev.ua">
				</div>
				<div class="content-our-service section-row">
					<p>В штате компании имеются опытные, внимательные и аккуратные грузчики. Заранее можно попросить оператора чтобы приехали грузчики и помогли разобрать, упаковать и вынести Ваши вещи на улицу до прибытия машины, это сэкономит Ваше и наше время, и сэкономит Вам Ваши средства и время.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="services-description container opisanie_avtopark">
		<article>
			Для Вашего удобства компания предлагает полный перечень услуг по переезду: офисов, квартир, транспортировке предметов быта, корпусной мебели, мягкой мебели, строительных и других крупногабаритных предметов и материалов. Все что требуется, то это позвонить или оставить заявку оператору и он Вам предложит услуги компании для максимального Вашего комфорта. С нами Вам не придется ни о чем думать, достаточно озвучить нам Ваши пожелания.
		</article>
	</div>
</section>
<?php
//get_sidebar();
get_footer();