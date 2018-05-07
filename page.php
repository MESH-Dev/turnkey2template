<?php get_header(); ?>

<div class="columns-7">

		<?php
		$classes = '';
	  if (have_rows('page_columns')):
		  $rows = get_field('page_columns');
			$row_count = count($rows);
			?>
			<main class="main-content" id="content">
				<?php
				$callout = get_field('page_callout');
				if ($callout) {
					?>
					<h4 class="page-callout"><?php the_field('page_callout'); ?></h4>
						<hr class="callout-hr">
					<?php
				}
				if($row_count == 1){
					 $classes= 'class="content columns-12"';
				} elseif($row_count == 2){
				  $classes='class="content columns-6"';
			  }
				 while(have_rows('page_columns')):the_row();
			//         // display a sub field value
					//   $content = the_sub_field('column_content'); ?>
						  <div <?php echo $classes ?>>
							<?php the_sub_field('column_content'); ?>
						  </div>
					  <?php
				 endwhile;?>
				 </main>
			 <!-- <//?php get_footer(); ?> -->
		<?php endif; ?>
		<?php get_footer(); ?>
</div>
</div><!--close row-->
</div><!--close container-->
</body>
</html>
