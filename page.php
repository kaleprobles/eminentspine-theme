<?php get_header(); ?>

<main style="padding: 40px;">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <div>
      <?php the_content(); ?>
    </div>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>