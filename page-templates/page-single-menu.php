<?php
/**
 * Template Name: Single Menu
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>
				<section class="page-contents">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); 

						$menu_picture = get_field('menu_picture');
						$menu_pdf = get_field('menu_pdf');
						$size = 'full';

						?>

						<a href="<?php echo $menu_pdf;?>">Download Menu (pdf)</a>
						<div class="clear"></div>
						<div class="menu-image"><?php echo wp_get_attachment_image( $menu_picture, $size ); ?></div>
					</div>
				</section>
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- wrapper -->
<?php
get_footer();
