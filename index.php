<?php get_header() ?>

  <div id="content" class="two-thirds">
    
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            echo '<h2>'; 
              the_title();       
            echo '</h2>';
            the_content();
        endwhile;
      else :
          _e( '내용이 없습니다.', 'alikerock_portfolio' );
      endif;
    ?>
      
  </div><!-- #content-->      

  <?php get_sidebar() ?>

  <?php get_footer() ?>