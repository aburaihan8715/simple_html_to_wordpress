<?php 
/*
Template Name: Template Blogs
*/ 
get_header();?>
<main>
  <!-- banner -->
  <div class="owl-carousel owl-theme">
    <div class="carousel_item">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/banner1.jpg" alt="banner image" />
    </div>
    <div class="carousel_item">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/banner2.jpg" alt="banner image" />
    </div>
    <div class="carousel_item">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/banner3.jpg" alt="banner image" />
    </div>
  </div>
  <!-- blogs -->
  <section class="blogs_area clear_fix">
    <div class="latest_blogs">
      <h2>Category : <?php single_cat_title();?></h2>
      <?php get_template_part('template-parts/content','blogs');?>
    </div>
    <?php get_sidebar();?>
  </section>
</main>
<?php get_footer();?>