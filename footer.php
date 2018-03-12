<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */
$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
$email = get_field('email', 'option');
$spam = antispambot($email);
$hours = get_field('hours', 'option');
$instagram_link = get_field('instagram_link', 'option');
$twitter_link = get_field('twitter_link', 'option');
$facebook_link = get_field('facebook_link', 'option');
$google_analytics = get_field('google_analytics', 'option');
$sitemap = get_field('sitemap_link', 'option');
$reservation_link = get_field('reservation_link', 'option');

$treehouse_kitchen = get_field('treehouse_kitchen', 'option');
$mayo_bird = get_field('mayo_bird', 'option');
$summit_room = get_field('summit_room', 'option');
$joe_nosh = get_field('joe_nosh', 'option');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if( !is_page('reservations') ) { ?>
		<div class="res-wrap">
			<div class="reservation-wrapper  bounceInUp">
				<div class="request-res">
					<a href="<?php echo $reservation_link; ?>" >
						REQUEST A RESERVATION
					</a>
				</div>
			</div>
		</div>
	<?php } ?>
		<div class="wrapper">
			
			<section class='footer-col-1 foot-col'>
				<div class="item">
					<h3>COME SEE US</h3>
					<?php echo $address; ?>
				</div>
				
				
			</section>

			<section class='footer-col-2 foot-col'>
				<div class="item">
					<h3>HOURS</h3>
					<?php echo $hours; ?>
				</div>
				
			</section>

			<section class='footer-col-3 foot-col'>
				
				<div class="item">
					<h3>CONTACT</h3>
					<?php echo '(p) ' . $phone; ?>
					<br>
					<?php echo '(e) <a href="mailto:'. $spam . '">' . $spam . '</a>'; ?>
				</div>
				<div class="item">
					<div class="social">
						<i class="fa fa-instagram fa-2x" aria-hidden="true">
							<a title="Instagram"  href="<?php echo $instagram_link; ?>"></a>
						</i>
						<i class="fa fa-twitter fa-2x" aria-hidden="true">
							<a title="Twitter"  href="<?php echo $twitter_link; ?>"></a>
						</i>
						<i class="fa fa-facebook fa-2x" aria-hidden="true">
							<a title="Facebook" href="<?php echo $facebook_link; ?>"></a>
						</i>
					</div>
				</div>
				
			</section>

			<section class='footer-col-4 foot-col'>
				<h3 class="center">WE PROUDLY SUPPORT</h3>
				<div class="behailu">
					<a target="_blank" href="http://www.behailuacademy.org/">
						<img src="<?php bloginfo('template_url'); ?>/images/behailu.png">
					</a>
				</div>
			</section>

			<div class="swoosh">
				<img src="<?php bloginfo('template_url');?>/images/swoosh.png">
			</div>

			<section class="foot-col group-start">
				
				<div class="img-center">
					<h3 class="center">A PART OF</h3>
					<div class="rollover">
						<a href="<?php echo $treehouse_kitchen; ?>" target="_blank">
							<img alt="Tree House Kitchen" title="Tree House Kitchen" src="<?php bloginfo('template_url'); ?>/images/tree-house-kitchen.png">
						</a>
					</div><!-- roll over -->
				</div>
			</section>
			<div class="group-item">
				<div class="img-summit rollover">
					<a href="<?php echo $summit_room; ?>" target="_blank">
						<img alt="Summit Room" title="Summit Room" src="<?php bloginfo('template_url'); ?>/images/summit-room.png">
					</a>
				</div>
			</div>
			<div class="group-item ">
				<div class="img-joe rollover">
					<a href="<?php echo $joe_nosh; ?>" target="_blank">
						<img alt="Joe and Nosh" title="Joe and Nosh" src="<?php bloginfo('template_url'); ?>/images/joe-and-nosh.png">
					</a>
				</div>
			</div>
			<div class="group-item ">
				<div class="img-mayo rollover">
					<a href="<?php echo $mayo_bird; ?>" target="_blank">
						<img alt="Mayobird" title="Mayobird" src="<?php bloginfo('template_url'); ?>/images/mayobird.png">
					</a>
				</div>
			</div>
			
		</div><!-- wrapper -->

		<section class="creds">
			site by <a href="http://bellaworksweb.com" target="_blank">Bellaworks</a> | <a href="<?php the_field('sitemap_link','option'); ?>">sitemap</a>
		</section>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php 

wp_footer(); 

the_field('google_analytics', 'option');

?>

</body>
</html>
