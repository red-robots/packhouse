<?php
/**
 * Template Name: Contact
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>
				<section class="page-contents">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="contact-left">
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
					
					<div class="contact-right">
						<?php the_field('map') ?>
					</div>
				</section>
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- wrapper -->
<?php
get_footer();
