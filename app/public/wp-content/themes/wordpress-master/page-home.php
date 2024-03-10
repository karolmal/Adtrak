<?php 
/**
 * 	Template Name: Home
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>
	<div id="service-list">
		<div class="container px-0">
			<div class="row g-3 g-lg-5 mt-0">
				<div class="col-12 mt-0">
					<div class="bg-white p-5" style="transform: translateY(-50%); width: fit-content;">
					<h2 >Our Range of Kitchens</h2>
					</div>
					
				</div>
				<?php if (have_rows('service_list', 11)) : ?>



					<?php while (have_rows('service_list', 11)) : the_row(); ?>

						<div class="col-lg-4">

							<div style="position: relative;">
								<img src="<?php the_sub_field('background_image'); ?>" style="max-width: 450px;" width="100%" height="100%">
								<a href="<?php the_sub_field('url'); ?>" class="bg-white p-3 d-flex flex-column text-decoration-none" style="position: absolute; left: 0; bottom: 0;">
									<div class="d-flex align-items-center">
										<p class="me-3 systems-title"><?php the_sub_field('title'); ?></p>
										<img src="/wp-content/uploads/2024/03/icons8-arrow-50.png" width="27px" alt="">
									</div>
									<p class="systems-subtitle">KITCHENS</p>
								</a>
							</div>

						</div>

					<?php endwhile; ?>



				<?php endif; ?>


			</div>
		</div>
	</div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>