<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ratskeller-wp
 */

?>

	<footer id="colophon" class="site-footer fw-container">
	
		<h2 class="section-title">Kontakt & Anfahrt</h2>
		<div class="footer__content">
			<ul class="footer__contacts-container">
				<li class="footer__contacts-item"><span class="footer__icon map-icon"></span><?php echo fw_get_db_settings_option('address') ?></li>
				<li class="footer__contacts-item"><span class="footer__icon email-icon"></span><a href="mailto:<?php echo fw_get_db_settings_option('mail') ?>"></a><?php echo fw_get_db_settings_option('mail') ?></li>
				<li class="footer__contacts-item"><span class="footer__icon user-icon"></span><?php echo fw_get_db_settings_option('facebook_person') ?></li>
				<li class="footer__contacts-item"><span class="footer__icon phone-icon"></span><a href="tel:<?php echo fw_get_db_settings_option('phone') ?>"></a><?php echo fw_get_db_settings_option('phone') ?></li>
				<li class="footer__contacts-item"><span class="footer__icon fb-icon"></span><a href="<?php echo fw_get_db_settings_option('facebook') ?>">Ratskeller auf Facebook</a></li>
			</ul>
			<div class="footer__map">

			</div>
			<img src="/wp-content/themes/ratskeller-wp/img/Steuerrad.png" alt="ratskeller bird" class="footer__bird">
			<div class="footer__text">
				<p class="footer__text--bold">Anfahrtshinweise für unsere Appartement-Gäste</p>
				<p class="footer__text--normal">Nutzen Sie bitte den Parkplatz mit der Adresse XYZ, Waren (Müritz)</p>
			</div>
			</div>
		<div class="footer__absolute white-text">
			<div class="footer__absolute-logo">
				<p>Ratskeller</p>
				<p>zu Waren (Müritz)</p>
			</div>
			<p class="footer__absolute-hours">
				Täglich für Sie geöffnet von <span class="footer-hour"><?php echo fw_get_db_settings_option('open_hours_from') ?></span> bis <span class="footer-hour"><?php echo fw_get_db_settings_option('open_hours_to') ?></span> Uhr</p>
			<div class="footer__absolute-nav">
				<a href="#" class="footer__link">Impressum</a>
				<a href="#" class="footer__link">Datenschutz</a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
