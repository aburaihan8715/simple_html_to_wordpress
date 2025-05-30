<?php get_header();?>

<div class="page_box clear_fix">
  <div class="page_left">
    <h2><?php the_title();?></h2>
    <?php the_content();?>
  </div>
  <div class="sidebar">
    <?php dynamic_sidebar('sidebar_1');?>
  </div>
</div>

<?php get_footer();?>