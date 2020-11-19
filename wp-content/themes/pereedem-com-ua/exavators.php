<?php
/**
 * The main template file
 * Template Name: Аренда экскаватора
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
<?php get_header('exavator'); ?>
    <div class="class-width">
        <section class="content-header">
            <?php the_field('opisanie_v_shapku');?>
        </section>
    </div>
    </section>
    <section class="our-services">
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