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

// echo '<pre>';
// print_r($menu_picture);
// echo '</pre>';
						?>

						<a href="<?php echo $menu_pdf['url'];?>">Download Menu (pdf)</a>
						<div class="clear"></div><br>
						<div class="menu-image"><img src="<?php echo $menu_picture['url'];?>"></div>
					</div>
				</section>
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- wrapper -->
<?php
get_footer();
