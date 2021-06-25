<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$small_text = $atts['small_text'];
$large_text = $atts['large_text'];
$slider = $atts['slider'];
$logo = $atts['logo'];
?>

<section class="section-hero">
		
	<div class="custom-container section-hero-container">
	<div class="section-hero__texture-block"></div>
	<span class="section-hero__decoration"><svg class="swiper-next">
		<use href="/wp-content/themes/ratskeller-wp/img/sprite.svg#arrow-circle"></use>
	</svg></span>
	<div class="section-hero__image">
		<div class="section-hero__logo"><?php if (!empty($logo)) {
                echo wp_get_attachment_image($logo['attachment_id'], 'large-extra');
            } ?>
		</div>
		
		<div class="swiper-container">
  		<div class="swiper-wrapper">
		
				<?php foreach ($slider as $key => $slide) {
							$image = $slide['image'];
										?>
				<div class="section-hero__slider swiper-slide" style="background-image: linear-gradient(180deg, #03457400 0%, #03395F58 55%, #034574AC 100%), url(<?php echo $image['url'] ?>)">
				</div>
								<?php } ?>
		</div>
			</div>
	</div>
	<div class="section-hero__blue-block"></div>

	<div class="section-hero__text">
		<span class="section-hero__text--small white-text"><? echo $small_text ?></span>
		<span class="section-hero__text--large white-text"><? echo $large_text ?></span>
	</div>
</div>
</section>