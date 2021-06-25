<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$section_title = $atts['section_title'];
$section_content = $atts['section_content'];
$section_additional_text = $atts['section_additional_text'];
$image_one = $atts['image_one'];
$image_two = $atts['image_two'];
$image_three = $atts['image_three'];
?>

<section class="section-beer">
	<div class="custom-container section-beer__container">
		<div class="section-beer__container__decor-right"></div>
		<div class="section-beer__container__decor-left"></div>
	<div class="section-beer__image-one" data-aos="zoom-in" data-aos-duration="2000">	<?php if (!empty($image_one)) {
                echo wp_get_attachment_image($image_one['attachment_id'], 'large-extra');
            } ?></div>
	<div class="section-beer__image-three" data-aos="zoom-in" data-aos-duration="2000">	<?php if (!empty($image_three)) {
                echo wp_get_attachment_image($image_three['attachment_id'], 'large-extra');
            } ?></div>
	<div class="section-beer__image-two" data-aos="zoom-in" data-aos-duration="2000">	<?php if (!empty($image_two)) {
                echo wp_get_attachment_image($image_two['attachment_id'], 'large-extra');
            } ?></div>
	<div class="section-beer__text" data-aos="fade-up" data-aos-duration="2000">
		<h2 class="section-title"><?php echo $section_title ?></h2>
		<div class="section-text"><?php echo $section_content ?></div>
	</div>
	<div class="section-beer__additional-text" data-aos="fade-up" data-aos-duration="2000"><?php echo $section_additional_text ?></div>
	<div class="section-beer__decoration" data-aos="fade-up" data-aos-duration="2000"></div>
	</div>
</section>