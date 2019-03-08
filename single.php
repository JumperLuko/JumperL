<?php get_header(); ?>
<div class="h1 center items-center col-12 title centerText"><span class="wow tada"><?php the_title(); ?></span></div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <span style="width:100%;background-color: #c5c5c5;padding:50px;;"><?php comments_template(); ?></span>
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no page was found!</p>
      </article>
<?php endif; ?>
<?php get_footer(); ?>
</body>
</html>
