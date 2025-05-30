<?php 
/*
Template Name: Template Contact
*/ 
get_header();?>
<main>
  <section class="page_banner"
    style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/page_banner.jpg')">
    <h4>contact us</h4>
  </section>

  <section class="contact clear_fix">
    <div class="contact_form">
      <h4>get in touch</h4>
      <form action="">
        <input type="text" name="name" id="name" placeholder="Enter name" />
        <input type="email" name="email" id="email" placeholder="Enter email" />
        <textarea name="message" id="message" placeholder="Entre message"></textarea>

        <input type="submit" value="Send" />
      </form>
    </div>
    <div class="contact_address">
      <h4>our address</h4>
      <ul>
        <li><i class="fa-solid fa-location-dot"></i><span>Address:</span> Sydney, Australia</li>
        <li><i class="fa-solid fa-envelope"></i><span>Email:</span> info@simple.com</li>
        <li><i class="fa-solid fa-phone"></i><span>Phone:</span> 11223344</li>
        <li><i class="fa-solid fa-earth-europe"></i><span>Web:</span> www.simple.com</li>
      </ul>
    </div>
  </section>

  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29206.38516544443!2d90.41039225!3d23.790201300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a0f70deb73%3A0x30c36498f90fe23!2sGulshan%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1746543497482!5m2!1sen!2sbd"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</main>
<?php get_footer();?>