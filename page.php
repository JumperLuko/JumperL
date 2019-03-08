<?php get_header(); ?>
<div class="h1 center items-center col-12 title centerText"><span class="wow tada"><?php the_title(); ?></span></div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no page was found!</p>
      </article>
<?php endif; ?>
<?php get_footer(); ?>
</body>
</html>
