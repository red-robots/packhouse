<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

// pull homepage
$post = get_post(2); 
setup_postdata( $post );
 
	$hero = get_field('hero');
	$size = 'full';
	$hero_text = get_field('hero_text');
 
wp_reset_postdata();

?>

<section class="hero">
	<?php echo wp_get_attachment_image( $hero, $size ); ?>
	<div class="hero-text">
		<?php echo $hero_text; ?>
	</div>
</section>
<div class="hero-pusher"></div>
<?php

get_footer();
