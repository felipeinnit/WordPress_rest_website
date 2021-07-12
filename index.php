<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!-- HERO LOOP -->
		<?php query_posts( 'posts_per_page=1&category_name=menu&orderby=rand' ); ?>
		<?php
			if(have_posts() ) : while(have_posts() ) : the_post(); ?>

			<!-- loop content -->

			<div class="hero">
			<div class="hero-inner">
				<h1 class="hero-text lowercase">
					<span class="hero-sitename"><?php bloginfo('name') ?></span> <?php the_title(); ?>
				</h1>
				<p class="hero-description lowercase">
				<span class="magenta"><?php bloginfo('name') ?></span> <?php bloginfo('description') ?>.
				</p>
			</div>
		</div>
			
		<?php endwhile;
			endif;
		?>

<?php query_posts( 'posts_per_page=1&post_type=intro' ); ?>
		<?php
			if(have_posts() ) : while(have_posts() ) : the_post(); ?>
		<!-- TODO DYNAMIC p2  14-->
			<div class="intro" id="intro">
				<div class="intro-inner">
					<h2 class="intro-title">
						<?php the_title(); ?>
					</h2>
					<div class="intro-description">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

		<?php endwhile;
			endif;
		?>

		<div class="section-heading" id="food">
			<?php get_category_description('category_name=menu'); ?>
		</div>

		<div class="food-grid grid">
			<?php
			query_posts('posts_per_page=20&category_name=menu');
			if ( have_posts() ) :
				
				/* Start the Loop */
				while ( have_posts() ) :
					$item_number =1;
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
					$item_number++;

				endwhile;
				the_posts_navigation();

			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>

		<div class="section-heading" id="directions">
			<?php get_category_description('post_type=location'); ?>
		</div>


		<!-- DIRECTION -->
		<div class="locations">
		<?php query_posts( 'post_type=location' ); ?>
		<?php
			if(have_posts() ) : while(have_posts() ) : the_post(); ?>

			<div class="locations grid">
				<div class="map">
					<div class="map-inner">
						<?php if(get_field('map') ) : ?>
							<?php the_field('map'); ?>
						<?php endif; ?>	
					</div>
				</div>

				<div class="location-info">
					<div class="location-description">
							<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
							<?php endwhile; endif; ?>
	</main><!-- #main -->

<?php
get_footer();
