<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$section_title = $atts['section_title'];
$section_content = $atts['section_content'];
$button_url = $atts['button_url'];
$button_text = $atts['button_text'];
$image_one = $atts['image_one'];
$image_two = $atts['image_two'];
$image_three = $atts['image_three'];
$image_four = $atts['image_four'];
?>

<section class="section-appartments">
        <div class="section-appartments__container custom-container">
        <div class="section-appartments__container__decor-right"></div>
        <div class="section-appartments__container__decor-left"></div>
    <div class="section-appartments__left-images">
        <div class="section-appartments__image-one"><?php if (!empty($image_one)) {
                        echo wp_get_attachment_image($image_one['attachment_id'], 'large-extra');
                    } ?></div>
        <div class="section-appartments__image-two"><?php if (!empty($image_two)) {
                        echo wp_get_attachment_image($image_two['attachment_id'], 'large-extra');
                    } ?></div>
    </div>
    <div class="section-appartments__text-wrapper">
        <h2 class="section-title white-text"><?php echo $section_title ?></h2>
        <div class="section-text white-text"><?php echo $section_content ?></div>
        <a href="<?php echo $button_url ?>" class="secondary-button"><?php echo $button_text ?></a>
    </div>
    <div class="section-appartments__right-images">
        <div class="section-appartments__image-three"><?php if (!empty($image_three)) {
                        echo wp_get_attachment_image($image_three['attachment_id'], 'large-extra');
                    } ?></div>
        <div class="section-appartments__image-four"><?php if (!empty($image_four)) {
                        echo wp_get_attachment_image($image_four['attachment_id'], 'large-extra');
                    } ?></div>
    </div>
    <div class="section-appartments__decoration-line"></div>
    </div>
</section>