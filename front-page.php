<?php get_header() ?>
  <?php wp_login_form() ?>
  <div id="content" class="two-thirds">
   
  <h2>Lastest Works</h2>

  <?php
        query_posts( array(
          'category_name'  => 'works',
          'posts_per_page' => 3
        ) );
      ?>
      <ul>
        <?php
          // The Loop
          while ( have_posts() ) : the_post();
        ?>
        <li>

          <a href="<?php the_permalink(); ?>">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail( array( 50, 50 ) );
              }
            ?>
          </a>
        </li>
        <?php
          endwhile;
        ?>
      </ul>
      <?php wp_reset_query(); ?>
      
  </div><!-- #content-->      

  <?php get_sidebar() ?>

  <?php get_footer() ?>