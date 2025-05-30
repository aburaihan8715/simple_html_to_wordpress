<div class="blogs clear_fix">
  <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
  ?>
  <div class="single_blog">
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php the_post_thumbnail('', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
    <div class="blog_meta">
      <?php the_author_posts_link();?>
      <a href=""><?php the_date('M d')?></a>
      <?php the_category();?>
    </div>

    <?php the_excerpt();?>
    <a class="fill_btn" href="<?php the_permalink(); ?>">read more</a>
  </div>
  <?php
      }
      wp_reset_postdata();
    }
  ?>
</div>