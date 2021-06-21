<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$small_text = $atts['small_text'];
$large_text = $atts['large_text'];
$bg_image = $atts['background_image'];
$logo = $atts['logo'];
?>

<section class="section-hero">
	<div class="section-hero__image">
		<div class="section-hero__logo"><?php if (!empty($logo)) {
                echo wp_get_attachment_image($logo['attachment_id'], 'large-extra');
            } ?>
	</div>
	</div>
	<div class="section-hero__blue-block"></div>
	<div class="section-hero__texture-block"></div>
	<div class="section-hero__text">
		<span class="section-hero__text--small white-text"><? echo $small_text ?></span>
		<span class="section-hero__text--large white-text"><? echo $large_text ?></span>
	</div>
</section>