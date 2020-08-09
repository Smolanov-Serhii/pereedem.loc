<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pereedem.com.ua
 */

?>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <script
                src="https://code.jquery.com/jquery-2.2.4.min.js"
                integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>

<body>
<?php ?>
    <section id="header" class="costs-header" style="background-image: url('<?php the_field('custom-costs-header'); ?>');">
        <div id="page" class="site">
            <div class="container class-flex">
                <section class="logo">
                    <?php the_custom_logo(); ?>
                </section>
                <nav class="nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </nav>
                <section class="contacts">
                    <div class="contacts_phones">
                        <div class="phone"><a href="tel: +380667159235"><h6>+38 (066) 715-92-35</h6></a></div>
                        <div class="phone"><a href="tel: +380639377790"><h6>+38 (063) 937-77-90</h6></a></div>
                        <div class="phone"><a href="tel: +380974114720"><h6>+38 (097) 411-47-20</h6></a></div>
                    </div>
                </section>
            </div>
<!--            <div class="header_title">-->
<!--                <h1>--><?php //the_title(); ?><!--</h1>-->
<!--            </div>-->
</section>
    <main id="costs" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );

//            the_post_navigation(
//                array(
//                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'pereedem-com-ua' ) . '</span> <span class="nav-title">%title</span>',
//                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'pereedem-com-ua' ) . '</span> <span class="nav-title">%title</span>',
//                )
//            );

            // If comments are open or we have at least one comment, load up the comment template.
//            if ( comments_open() || get_comments_number() ) :
//                comments_template();
//            endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
