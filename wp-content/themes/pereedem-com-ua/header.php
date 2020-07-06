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
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pereedem-com-ua' ); ?></a>
    <div class="container class-flex">
        <section class="logo">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
            endif;
            $pereedem_com_ua_description = get_bloginfo( 'description', 'display' );
            if ( $pereedem_com_ua_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $pereedem_com_ua_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif; ?>
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

