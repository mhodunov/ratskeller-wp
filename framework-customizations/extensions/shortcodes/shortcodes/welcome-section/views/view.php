<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$section_title = $atts['section_title'];
$section_content = $atts['section_content'];
$button_url = $atts['button_url'];
$button_text = $atts['button_text'];
$rotated_text = $atts['rotated_text'];
$image = $atts['image'];
?>

<section class="section-welcome">
	<div class="section-welcome__text-row">
		<h2 class="section-title"><?php echo $section_title ?></h2>
		<div class="section-text"><?php echo $section_content ?></div>
		<a href="<?php echo $button_url ?>" class="primary-button"><?php echo $button_text ?></a>
	</div>
		<img src="/wp-content/themes/ratskeller-wp/img/Bierglas.png" alt="ratskeller beer bird" class="section-welcome__bird">
		<img src="<?php echo $image['url'] ?>" alt="<?php echo $section_title ?>" class="section-welcome__image">
		<div class="section-welcome__decorative-block">
			<p class="rotated-text section-welcome__additional-text"><?php echo $rotated_text ?></p>
		</div>
</section>