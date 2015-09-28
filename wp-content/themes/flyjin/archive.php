<?php get_header(); ?>

	<main role="main">

<h1>!ARCHIVES</h1>
    
		<section>

			<h1>Archives</h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			
			<?php the_post(); ?>

		</section>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
