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
<section id="header" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
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

