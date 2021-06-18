<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$small_text = $atts['small_text'];
$large_text = $atts['large_text'];
$image = $atts['image'];
?>

<section class="section-hero">
	<div class="section-hero__icon"></div>
	<div class="section-hero__image">
		<?php if (!empty($image)) {
                echo wp_get_attachment_image($image['attachment_id'], 'large-extra');
            } ?>
	</div>
	<div class="section-hero__text">
		<span><? echo $small_text ?></span>
		<span><? echo $large_text ?></span>
	</div>
</section>