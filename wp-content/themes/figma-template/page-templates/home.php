<?php
/**
 * Template Name: Template Home
 *
 * @package UnderStrap
 */
//Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$title = get_field('hero_title');
$subtitle = get_field('sub_title');
$herobg = get_field('hero_background');
$link = get_field('month_relevant_cta');

$quick_links_1 = get_field('quick_links_1');
$quick_links_2 = get_field('quick_links_2');
$quick_links_3 = get_field('quick_links_3');
$quick_links_4 = get_field('quick_links_4');
$quick_links_5 = get_field('quick_links_5');

$quick_links_1_image = get_field('quick_links_1_image');
$quick_links_2_image = get_field('quick_links_2_image');
$quick_links_3_image = get_field('quick_links_3_image');
$quick_links_4_image = get_field('quick_links_4_image');
$quick_links_5_image = get_field('quick_links_5_image');




$container = get_theme_mod('understrap_container_type');
if( is_front_page() ) {
	get_template_part('globable-templates/hero');
}
?>

<div class="header-hero px-4 py-5 text-left" style="background-image: url(<?php echo $herobg; ?>)" >
	<div class="container d-flex h-100">
		<div class="row w-100" >
			<div class="col align-self-center">
				<h1 class="hero-title">
				<?php
				echo $title;?>
				</h1>
				<h3 class="hero-subtitle">
				<?php
				echo $subtitle;?>
				</h3>
			</div>
			<div class="col align-self-center cta-list">
				<a href="#" class="hero-button">Book A Tour</a>
				<a  href="#" class="hero-button">Apply to Enrol</a>
				<?php

				if( $link ):
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="hero-button hero-cta-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="quick-links hero px-4 py-5">
	<div class="container">
		<h2 class="text-center">Quick Links</h2>
					<ul class="d-flex justify-content-around quick-links-ul">

		<?php
		if( $quick_links_1 ):
			$link_url = $quick_links_1['url'];
			$link_title = $quick_links_1['title'];
			$link_target = $quick_links_1['target'] ? $link['target'] : '_self';
			?>
			<li>
			<img class="link-img" src = "<?php echo $quick_links_1_image;?>"/>
			<a class="link-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			</li>
			<?php endif; ?>

		<?php
		if( $quick_links_2 ):
			$link_url = $quick_links_2['url'];
			$link_title = $quick_links_2['title'];
			$link_target = $quick_links_2['target'] ? $link['target'] : '_self';
			?>
			<li>
			<img class="link-img" src = "<?php echo $quick_links_2_image;?>"/>
			<a class="link-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			</li>
			<?php endif; ?>

		<?php
		if( $quick_links_3 ):
			$link_url = $quick_links_3['url'];
			$link_title = $quick_links_3['title'];
			$link_target = $quick_links_3['target'] ? $link['target'] : '_self';
			?>
			<li>
			<img class="link-img" src = "<?php echo $quick_links_3_image;?>"/>
			<a class="link-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			</li>
			<?php endif; ?>

		<?php
		if( $quick_links_4 ):
			$link_url = $quick_links_4['url'];
			$link_title = $quick_links_4['title'];
			$link_target = $quick_links_4['target'] ? $link['target'] : '_self';
			?>
			<li>
			<img class="link-img" src = "<?php echo $quick_links_4_image;?>"/>
			<a class="link-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			</li>
			<?php endif; ?>

		<?php
		if( $quick_links_5 ):
			$link_url = $quick_links_5['url'];
			$link_title = $quick_links_5['title'];
			$link_target = $quick_links_5['target'] ? $link['target'] : '_self';
			?>
			<li>
			<img class="link-img" src = "<?php echo $quick_links_5_image;?>"/>
			<a class="link-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			</li>
			<?php endif; ?>
		</ul>
	</div>

</div>

<?php
get_footer();
?>
