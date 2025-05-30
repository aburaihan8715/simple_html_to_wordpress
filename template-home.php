<?php 
/*
Template Name: Template Home
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
  <!-- services -->
  <?php get_template_part('template-parts/content','services');?>


  <!-- blogs -->
  <section class="blogs_area clear_fix">
    <div class="latest_blogs">
      <h2>Latest blogs</h2>
      <div class="single_blog">
        <h4>blog title</h4>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/service1.jpg" alt="blog image" />
        <div class="blog_meta">
          <a href="#">admin</a>
          <a href="#"><span>3</span> september</a>
          <a href="#"><span>5</span> comments</a>
        </div>

        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Inventore repellendus voluptatem repellat. Assumenda quisquam
          illum commodi magni dolor adipisci, porro dolorem vitae,
          voluptatibus maiores omnis exercitationem mollitia ipsum
          aliquam modi.
        </p>
        <a class="fill_btn" href="#">read more</a>
      </div>
      <div class="single_blog">
        <h4>blog title</h4>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/service2.jpg" alt="blog image" />
        <div class="blog_meta">
          <a href="#">admin</a>
          <a href="#"><span>3</span> september</a>
          <a href="#"><span>5</span> comments</a>
        </div>

        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Inventore repellendus voluptatem repellat. Assumenda quisquam
          illum commodi magni dolor adipisci, porro dolorem vitae,
          voluptatibus maiores omnis exercitationem mollitia ipsum
          aliquam modi.
        </p>
        <a class="fill_btn" href="#">read more</a>
      </div>
    </div>
    <?php get_sidebar();?>
  </section>

</main>
<?php get_footer();?>