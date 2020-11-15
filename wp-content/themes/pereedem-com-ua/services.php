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
	<div class="content-section-services">
            <?php
            $args = array(
                'post_type' => 'types-mov',
//                        'category__in' => 3, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                'showposts' => "", //сколько показать статей
                'orderby' => "data", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    $image = get_sub_field('image');
                    $alt = $image['alt'] ?>
                    <a href="<?php the_permalink(); ?>" class="container">
                        <div class="content-single-our-service">
                            <div class="img-ou-service">
                                <img src="<?php the_field('kartinka_dlya_tipa_perevozki') ?>">
                            </div>
                            <div class="content-our-service">
                                <h2>
                                    <?php the_title() ?>
                                </h2>
                                <?php the_field('opisanie_tipa_perevozki_na_glavnuyu') ?>
                            </div>
                        </div>
                    </a>
                <?php }
            }
            wp_reset_query(); ?>
	</div>
	<div class="services-description container opisanie_avtopark">
		<article>
            <?php
            $content = get_the_content('читать далее');
            echo apply_filters( 'the_content', $content );
            ?>
		</article>
	</div>
</section>
<?php
//get_sidebar();
get_footer();