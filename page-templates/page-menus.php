<?php
/**
 * Template Name: Menus
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); 

				// $brunchMenu = get_field('dinner_menu');
				// $lunchMenu = get_field('drink_menu');
				// $dinnerMenu = get_field('drink_menu');
				// $drinkMenu = get_field('drink_menu');

				$brunchimage = get_field('brunch_menu');
				$lunchimage = get_field('lunch_menu_image');
				$dinnerimage = get_field('dinner_menu_image');
				$drinkimage = get_field('drink_menu_image');

				$brunch_menu_link = get_field('brunch_menu_links_to');
				$lunch_menu_link = get_field('lunch_menu_links_to');
				$dinner_menu_link = get_field('dinner_menu_links_to');
				$drink_menu_link = get_field('drink_menu_links_to');
				

				if( is_page('Brunch Menu') ) {
					$menu_pdf = get_field('brunch_menu_pdf');
				} elseif( is_page('Lunch Menu') ) {
					$menu_pdf = get_field('lunch_menu_pdf');
				} elseif( is_page('Supper Menu') ) {
					$menu_pdf = get_field('dinner_menu_image');
				} elseif( is_page('Drink Menu') ) {
					$menu_pdf = get_field('drink_menu_image');
				}
				// $brunch_menu_pdf = get_field('brunch_menu_pdf');
				// $lunch_menu_pdf = get_field('lunch_menu_pdf');
				// $dinner_menu_pdf = get_field('dinner_menu_image');
				// $drink_menu_pdf = get_field('drink_menu_image');

				// $menu_picture = get_field('menu_picture');
				// $extra_menu_image = get_field('extra_menu_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)

				?>
				<section class="page-contents">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content menus">
						<?php the_content(); ?>

						<?php if(is_page('menus')) : ?>
							<div class="smenu-item">
								<div class="menu-top-button">
									<div class="small-button">
										<a href="<?php echo $brunch_menu_link; ?>">BRUNCH MENU</a>
									</div>
								</div>
								<div class="menu-image"><?php echo wp_get_attachment_image( $brunchimage, $size ); ?></div>
							</div>

							<div class="smenu-item">
								<div class="menu-top-button">
									<div class="small-button">
										<a href="<?php echo $dinner_menu_link; ?>">DINNER MENU</a>
									</div>
								</div>
								<div class="menu-image"><?php echo wp_get_attachment_image( $dinnerimage, $size ); ?></div>
							</div>

							<div class="smenu-item">
								<div class="menu-top-button">
									<div class="small-button">
										<a href="<?php echo $drink_menu_link; ?>">DRINK MENU</a>
									</div>
								</div>
								<div class="menu-image"><?php echo wp_get_attachment_image( $drinkimage, $size ); ?></div>
								
							</div>

						<?php else: ?>

							<div class="menu-top-button-page">
								<div class="small-button">
									<a href="<?php echo $menu_pdf; ?>">DOWNLOAD MENU</a>
								</div>
							</div>

							<div class="menu-image"><?php echo wp_get_attachment_image( $menu_picture, $size ); ?></div>
						

						<?php endif; ?>
					</div>
				</section>
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- wrapper -->
<?php
get_footer();
