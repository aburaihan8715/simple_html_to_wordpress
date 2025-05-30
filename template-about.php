<?php 
/*
Template Name: Template About
*/ 
get_header();?>
<main>
  <section class="page_banner"
    style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/page_banner.jpg')">
    <h4>About us</h4>
  </section>
  <section class="about_area clear_fix">
    <div class="about">
      <h4>about us</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut
        libero, magnam non totam
        consectetur velit reprehenderit soluta officiis minima tempora.
      </p>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut
        libero, magnam non totam
        consectetur velit reprehenderit soluta officiis minima tempora.
      </p>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut
        libero, magnam non totam
        consectetur velit reprehenderit soluta officiis minima tempora.
      </p>
    </div>
    <div class="sidebar">
      <?php dynamic_sidebar('sidebar_1');?>
    </div>
  </section>
</main>
<?php get_footer();?>