<?php get_header(); ?>

	<div id="top" class="clearfix">
  	<?php xx_initiateTop(); ?>
  </div>

	<div id="content" class="row">
  	<div class="col-12">
  
			<?php if ( ! have_posts() ) : ?>
          <h1>Not Found</h1>
            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>
      <?php endif; ?>
      
			<?php if (!is_front_page()) : ?>
    
      <?php while ( have_posts() ) : the_post(); ?>      
      <div class="post">        
        <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
            <?php the_excerpt(); ?>
        <?php else : ?>
            <?php the_content('Read More'); ?>
        <?php endif; ?>    
      </div><!-- post -->
      <?php endwhile; ?>
      
      <?php endif; ?>
    </div>
    
  </div>
  

<?php get_footer(); ?>