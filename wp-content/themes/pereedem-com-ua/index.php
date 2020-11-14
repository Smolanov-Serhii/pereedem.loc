<?php
/**
 * The main template file
 * Template Name: Главная
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
        <section class="">
            <div class="content-header-text">
                <div class="reklama_parts container_header_flex">
                    <?php
                    $args = array(
                        'post_type' => 'costs',
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
                            <div class="reklama_single">
							<span>
							    <img src="<?php the_field('kartinka_dlya_kartinki_mashiny_v_tarify');?>" alt="<?php the_field('opisanie_kartinki') ?>">
                            </span>
                                <a class="item_lnk" href="<?php the_permalink(); ?>"></a>
                                <p class="tarif">Тариф</p>
                                <p class="tarif_price"><?php the_field('czena') ?></p>
                                <p class="tarif_description">грн/час</p>
                                <p class="tarif_description"><?php the_field('gruzopodyomnost_i_obyom') ?><sup>3</sup></p>
<!--                                <div class="button-zakaz_reklama">-->
<!--                                    ЗАКАЗАТЬ АВТО-->
<!--                                </div>-->
                            </div>
                        <?php }
                    }
                    wp_reset_query(); ?>
                </div>
                <div class="reklama_parts container_header_flex">

                        <?php
                        $args = array(
                            'post_type' => 'movers',
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
                                <a href="<?php the_permalink(); ?>" class="reklama_single_gruzchiki">
                                            <span class="first-child">
                                                <img src="<?php the_post_thumbnail_url(); ?>">
                                                <div class="ablolute_price_gruz">
                                                    <div class="absolute_price">
                                                        <?php the_field('czena_uslug_gruzchikov_na_glavnuyu') ?>
                                                    </div>
                                                    <div class="absolute_description">
                                                    грн/час
                                                    </div>
                                                </div>
                                            </span>
                                                <span class="group">
                                                <div class="table_header">
                                                    <?php the_field('tekst_na_glavnuyu') ?>
                                                </div>
                                            </span>
                                    <?php }
                                    }
                                    wp_reset_query(); ?>
                                </a>
                </div>
                </span>
            </div>
        </section>
    </div>
</section>
<section class="devider">
    <div class="container_index container">
        <?php
        $content = get_the_content('читать далее');
        echo apply_filters( 'the_content', $content );
        ?>
    </div>
</section>
<section class="content-perevezeno">
    <div class="benefits">
        <div class="benefits__inner">
            <h2 class="benefits__header">
                ПЕРЕВЕЗЕНО
            </h2>
            <div class="benefits__element">
                <img class="benefits__icon" src="<?php echo get_template_directory_uri()?>/src/img/home.png" alt="Сотрудники">
                <p class="benefits__number">163</p>
                <p class="benefits__title">КВАРТИР</p>
            </div>
            <div class="benefits__element">
                <img class="benefits__icon" src="<?php echo get_template_directory_uri()?>/src/img/office.png" alt="Проекты">
                <p class="benefits__number">105</p>
                <p class="benefits__title">ОФИСОВ</p>
            </div>
            <div class="benefits__element">
                <img class="benefits__icon" src="<?php echo get_template_directory_uri()?>/src/img/gruz.png" alt="Опыт">
                <p class="benefits__number">520</p>
                <p class="benefits__title">ГРУЗОВ</p>
            </div>
        </div>
    </div>
</section>
<section class="pre-service" style="background-image: url('<?php echo get_template_directory_uri()."/src/img/pre-service-background.jpg" ?>')">
    <div class="pre-service-container container">
        <div class="pre-service-container-text">
            Ежеденевно выполняем до 30 перевозок
            Посмотрите, как решаем задачи клиентов на реальных заказах
        </div>
    </div>
</section>
<section class="additional-services">
    <h2 class="teg_h1" class="blue-article">дополнительные услуги</h2>
    <div class="additional-services container">
        <article>Так-же хотим предоставим Вам дополнительные услуги для обеспечения целостности Ваших ценных и хрупких вещей. Упавковка в гофрокартон, транспортную плёнку, коробки. Все эти услугиВы можете оговорить при заказе машины.</article>
        <div class="additional-services-description-content">
            <?php
            $args = array(
                'post_type' => 'services',
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
                    <a href="<?php the_permalink(); ?>" class="additional-services-description-content-container">
                        <span class="additional-services-description-content-container_img"><img src="<?php the_field('service_kartinka_na_glavnuyu') ?>" alt="<?php the_field('service_tekst_na_glavnuyu') ?>">
                        <div class="additional-services-carts">
                        <h3><?php the_field('service_zagolovok_dlya_glavnoj_straniczy') ?></h3>
                        <hr>
                            <span>
                                <?php the_field('service_tekst_na_glavnuyu') ?>
                            </span>
                        </div>
                    </a>
                <?php }
            }
            wp_reset_query(); ?>
        </div>
    </div>
</section>

<?php
//get_sidebar();
get_footer();
