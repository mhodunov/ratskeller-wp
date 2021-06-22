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
	<div class="section-beer__image-one">	<?php if (!empty($image_one)) {
                echo wp_get_attachment_image($image_one['attachment_id'], 'large-extra');
            } ?></div>
	<div class="section-beer__image-three">	<?php if (!empty($image_three)) {
                echo wp_get_attachment_image($image_three['attachment_id'], 'large-extra');
            } ?></div>
	<div class="section-beer__image-two">	<?php if (!empty($image_two)) {
                echo wp_get_attachment_image($image_two['attachment_id'], 'large-extra');
            } ?></div>
	<div class="section-beer__text">
		<h2 class="section-title"><?php echo $section_title ?></h2>
		<div class="section-text"><?php echo $section_content ?></div>
	</div>
	<div class="section-beer__additional-text"><?php echo $section_additional_text ?></div>
</section>