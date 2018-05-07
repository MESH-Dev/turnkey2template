<?php /*
* Template Name: Instagram Feed Page
*/ get_header(); ?>

<div class="columns-7">
	<main class="main-content" id="content">
		<?php
		$callout = get_field('page_callout');
		if ($callout) {
			?>
			<h4 class="page-callout"><?php the_field('page_callout'); ?></h1>
				<hr class="callout-hr">
			<?php
		} ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php $instagram = getInstagram(); $i=0;?>
		<div id="instafeed">
		<?php foreach($instagram as $instafeed) {  $i++;?>
		<div class="half ig-card">
			<div class="instagram-image">
				<a href="<?php echo $instagram[$i]->link; ?>" target="_blank">
					<img src="<?php echo $instagram[$i]->images->standard_resolution->url; ?>">
				</a>
			</div>
			<div class="instagram-caption">
				<p><?php echo $instagram[$i]->caption->text; ?></p>
			</div>
		</div>
		<?php } ?>
	</div>
	</main>
	<?php get_footer(); ?>
</div>
