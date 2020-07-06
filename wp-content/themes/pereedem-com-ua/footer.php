<footer>
    <div class="footer-all-content container">
        <div class="footer-left-side">
            <div class="footer-logo">
                <img src="img/logo-footer.svg" alt="Грузоперевозки https://pereedem.kiev.ua логотип подвал">
            </div>
            <div class="footer-nav">
                <ul>
                    <li><a href="https://pereedem.kiev.ua/index.html" class="active-footer-nav">Главная</a></li>
                    <li><a href="https://pereedem.kiev.ua/about.html">О нас</a></li>
                    <li><a href="https://pereedem.kiev.ua/avtopark.html">Автопарк</a></li>
                    <li><a href="https://pereedem.kiev.ua/services.html">Услуги</a></li>
                    <li><a href="https://pereedem.kiev.ua/price.html">Цены</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-right-side">
            <div class="phone"><a href="tel: +380667159235"><h6>+38 (066) 715-92-35</h6></a></div>
            <div class="phone"><a href="tel: +380639377790"><h6>+38 (063) 937-77-90</h6></a></div>
            <div class="phone"><a href="tel: +380974114720"><h6>+38 (097) 411-47-20</h6></a></div>
        </div>
    </div>
    <div class="copyright">
        <span>&copy; 2019 pereedem.kiev.ua</span>
    </div>
</footer>
<div class="forma-top">
    <form action="mail.php" method="post">
        <span>ЗАКАЗАТЬ ПРОСЧЕТ</span>
        <div class="phone"><a href="tel: +380974114720"><h6>+38 (097) 411-47-20</h6></a></div>
        <div class="phone"><a href="tel: +380667159235"><h6>+38 (066) 715-92-35</h6></a></div>
        <div class="phone"><a href="tel: +380639377790"><h6>+38 (063) 937-77-90</h6></a></div>

        <div class="social_modal">
            <span class="telegram"><a href="https://t-do.ru/pereedemkievua"></a></span>
            <span class="viber"><a href="viber://add?number=380667159235"></a></span>
            <span class="facebook"><a href="https://www.facebook.com/pereedem.kiev.ua/" ></a></span>
            <span class="instagram"><a href="https://www.instagram.com/pereedem.kiev.ua/" ></a></span>
            <!-- <li class="mobile"><a href="tel:+380672114343" ></a></li> -->
        </div>
        <!-- <input type="text" name="name" placeholder="ИМЯ:" required>
         <input type="email" name="email" placeholder="E-MAIL" required>
         <input type="text" name="phone" placeholder="ТЕЛЕФОН" required>
         <textarea rows="10" cols="45" name="message" placeholder="ВВЕДИТЕ ТЕКСТ СООБЩЕНИЯ:"></textarea>
         <input class="zakaz-phone-button" type="submit" value="ОТПРАВИТЬ"> -->
        <img src="img/cancel.svg" class="forma-top-cencel">
    </form>
</div>
<section class="bottom_batton">
    <ul class="b-menu bottomLeft">
        <li class="share right">
            <ul class="submenu">
                <li class="telegram"><a href="https://t-do.ru/pereedemkievua"></a></li>
                <li class="viber"><a title="Viber" href="viber://add?number=380667159235"></a></li>
                <li class="facebook"><a href="https://www.facebook.com/pereedem.kiev.ua/" ></a></li>
                <li class="instagram"><a href="https://www.instagram.com/pereedem.kiev.ua/" ></a></li>
                <!-- <li class="mobile"><a href="tel:+380672114343" ></a></li> -->
            </ul>
        </li>
    </ul>
</section>
<section class="phone_choise-action phone_choise">
    <div class="phone_choise_phone phone_choise_phone-hide">
        <a href="tel: +380974114720"><img src="img/kyivstar.svg">(097) 411-47-20</a>
        <a class="position-cancel" href="tel: +380667159235"><img src="img/MTS.svg">(066) 715-92-35</a>
        <a href="tel: +380639377790"><img src="img/life.svg">(063) 937-77-90</a>
    </div>
    <div class="phone_btton_click phone_choise">

    </div>
    <section class="button-cancel phone_choise_phone-hide">
    </section>
</section>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pereedem.com.ua
 */


?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pereedem-com-ua' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'pereedem-com-ua' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'pereedem-com-ua' ), 'pereedem-com-ua', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
