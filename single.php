<?php get_header();?>
<div class="single_post clear_fix">
  <div class="content">
    <img src="<?php echo the_post_thumbnail_url();?>" alt="">
    <h4><?php the_title();?></h4>
    <?php the_content();?>
  </div>

  <?php get_sidebar();?>
</div>
<?php get_footer();?>