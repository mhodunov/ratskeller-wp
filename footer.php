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
			<li><span class="map-icon"></span><?php echo fw_get_db_settings_option('address') ?></li>
			<li><span class="email-icon"></span><a href="mailto:<?php echo fw_get_db_settings_option('mail') ?>"></a><?php echo fw_get_db_settings_option('mail') ?></li>
			<li><span class="user-icon"></span><?php echo fw_get_db_settings_option('facebook_person') ?></li>
			<li><span class="phone-icon"></span><a href="tel:<?php echo fw_get_db_settings_option('phone') ?>"></a><?php echo fw_get_db_settings_option('phone') ?></li>
			<li><span class="fb-icon"></span><a href="<?php echo fw_get_db_settings_option('facebook') ?>">Ratskeller auf Facebook</a></li>
		</ul>
		<div class="footer__map">

		</div>
		<div class="footer__text">
			<img src="" alt="" class="footer__bird">
			<p><strong>Anfahrtshinweise für unsere Appartement-Gäste</strong></p>
			<p>Nutzen Sie bitte den Parkplatz mit der Adresse XYZ, Waren (Müritz)</p>
		</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
