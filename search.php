<?php get_header() ?>

  <div id="content" class="two-thirds">
    <h2>검색 결과</h2>
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
            <?php the_title()?>
          </a>
        </li>
        <?php
          endwhile;
        ?>
      </ul>

  </div><!-- #content-->      

  <?php get_sidebar() ?>

  <?php get_footer() ?>