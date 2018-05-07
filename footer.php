

<footer class="site-footer">
   <?php
   if (have_rows('page_columns')) { ?>
      <div class="cards fixed left">
         <?php
         $phone = get_field('phone_number', 'option');
         $email = get_field('email_address', 'option');
         ?>
         <p class="address"><span class="line-one"><?php the_field('address_line_1', 'option'); ?></span><span class="divider"> | </span><span class="line-two"><?php the_field('address_line_2', 'option'); ?></span></p>
         <p class="info-item"><span class="line-one"><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></span><span class="divider"> | </span><span class="line-two"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span></p>
      </div>
      <div class="cards fixed right">
         <div class="footer social">
            <?php
            if (have_rows('social_nav', 'options')):
               while (have_rows('social_nav', 'options')): the_row();
                  $icon = get_sub_field('social_icon');
                  $url = get_sub_field('social_url');
                  ?>
                  <a href="<?php echo $url ?>" target="_blank"><i class="<?php echo $icon ?>"></i></a>
               <?php endwhile;
            endif;
            ?>
           <!-- <a href="https://www.facebook.com/elkcityrecords/" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
           <a href="https://www.instagram.com/ecrecords/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
           <a href="https://www.yelp.com/biz/elk-city-records-charleston" target="_blank"><i class="fa fa-lg fa-yelp"></i></a> -->
         </div>
        <p><span class="mesh info-item">Website by <a href="http://meshfresh.com" target="_blank">MESH</a></span></p>
      </div>
   <?php }; ?>
</footer>

<?php wp_footer(); ?>
