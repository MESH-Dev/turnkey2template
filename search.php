<?php get_header(); ?>


<main id="content">

	<div class="container">
		<div class="row">
			<div class="columns-9">
				<?php if ( have_posts() ) : ?>
					<h1><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="post">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<p class="postinfo">By <?php the_author(); ?> | Categories: <?php the_category(', '); ?> | <?php comments_popup_link(); ?></p>
							<?php the_content('Read more &#8658'); ?>
						</div>

					<?php endwhile; ?>

				<?php else : ?>
					<h1>Nothing Found</h1>
					<p>Nothing matched your search criteria. Please try again with some different keywords.</p>

					<?php get_search_form(); ?>
				<?php endif; ?>
			</div>
			<div class="columns-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
