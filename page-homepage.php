<?php
/* Template Name: Home page */
get_header(); ?>
<header>
  <input id="burger" type="checkbox" />

  <label for="burger">
      <span></span>
      <span></span>
      <span></span>
  </label>
  <nav class="container">
    <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/logo.jpg" alt="Logo">
    
      <?php wp_nav_menu(); ?>
      <!-- <li><a class="active" href="#">Home</a></li>
      <li><a href="#">Menu link</a></li>
      <li><a href="#">Menu link</a></li>
      <li><a href="#">Menu link</a></li> -->
      <li class="button"><a href="<?php the_field('button_link'); ?>"><?php $CTAtext = get_field( 'button_text' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'button_text' , 'option' );
      } else{
        echo 'Button';
      } ?></a></li>
    
  </nav>
</header>
<section class="big-slider">
    <div class="big-slider_object">
        <img class="mySlides" src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/objekat.jpg" alt="Gallery image">
        <img class="mySlides" src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/objekat.jpg" alt="Gallery image">
    <div class="text">
        <h1><?php $CTAtext = get_field( 'head_title' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'head_title' , 'option' );
      } else{
        echo 'Nullam in nisl posuere';
      } ?></h1>
        <p><?php $CTAtext = get_field( 'paragraph' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'paragraph' , 'option' );
      } else{
        echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit.';
      } ?></p>
    </div>
      <a class="prev" onclick="plusDivs(-1)">&#10094;</a>
      <a class="next" onclick="plusDivs(1)">&#10095;</a>
    </div>
    <a class="button-slider" href="<?php the_field('button_slider_link'); ?>"><?php $CTAtext = get_field( 'paragraph' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'paragraph' , 'option' );
      } else{
        echo '<span>Ut sed odio quis</span><span>Suspendisse sagittis felis</span>';
      } ?></a>
</section>
<!--What we do-->
<section class="what-we-do">
  <div data-aos="fade-right" class="container">
    <h1><?php $CTAtext = get_field( 'what_we_do_h1' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'what_we_do_h1' , 'option' );
      } else{
        echo 'Curabitur lacus ipsum';
      } ?></h1>
    <p class="first"><?php $CTAtext = get_field( 'what_we_do_first_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'what_we_do_first_p' , 'option' );
      } else{
        echo 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.';
      } ?></p>
    <p><?php $CTAtext = get_field( 'what_we_do_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'what_we_do_p' , 'option' );
      } else{
        echo 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.';
      } ?></p>
  </div>
  <div class="box-three" data-aos="fade-left" data-aos-delay="1200">
  <div class="box-three_items" data-aos="fade-left" data-aos-delay="600">
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/Rectangle 7.jpg" alt="images">
      <span class="number">01</span>
      <h2><?php $CTAtext = get_field( 'box-three_items_one_h2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'box-three_items_one_h2' , 'option' );
      } else{
        echo 'lacus';
      } ?></h2>
      <p><?php $CTAtext = get_field( 'box-three_items_one_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'box-three_items_one_p' , 'option' );
      } else{
        echo 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...';
      } ?></p>
      <span class="line"></span>
    </div>
    <div class="box-three_items" data-aos="fade-left" data-aos-delay="900">
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/Rectangle 6.jpg" alt="images">
      <span class="number">02</span>
      <h2><?php $CTAtext = get_field( 'box-three_items_two_h2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'box-three_items_two_h2' , 'option' );
      } else{
        echo 'lacus';
      } ?></h2>
      <p><?php $CTAtext = get_field( 'box-three_items_two_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'box-three_items_two_p' , 'option' );
      } else{
        echo 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...';
      } ?></p>
      <span class="line"></span>
    </div>
    <div class="box-three_items" data-aos="fade-left" data-aos-delay="1200">
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/Rectangle 5.jpg" alt="images">
      <span class="number">03</span>
      <h2><?php $CTAtext = get_field( 'box-three_items_three_h2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'box-three_items_three_h2' , 'option' );
      } else{
        echo 'lacus';
      } ?></h2>
      <p><?php $CTAtext = get_field( 'box-three_items_three_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'box-three_items_three_p' , 'option' );
      } else{
        echo 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...';
      } ?></p>
      <span class="line"></span>
    </div>
  </div>
  <span class="vertical-line"></span>
</section>
<!--End-->
<!--Testamonials-->
<section class="testimonials">
  <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/objekat.jpg" alt="testimonials-img">
  <div class="container">
    <h1><?php $CTAtext = get_field( 'testimonial_title' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'testimonial_title' , 'option' );
      } else{
        echo 'Lorem';
      } ?></h1>
    <span class="line"></span>
  </div>
  <div class="testimonials-list">
    <p><?php $CTAtext = get_field( 'testimonial_one_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'testimonial_one_p' , 'option' );
      } else{
        echo 'Lorem ipsum dolor sit amet.';
      } ?></p>
    <p><?php $CTAtext = get_field( 'testimonial_one_work_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'testimonial_one_work_p' , 'option' );
      } else{
        echo 'PopArt Studio';
      } ?></p>
  </div>
  <div class="testimonials-list">
    <p><?php $CTAtext = get_field( 'testimonial_second_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'testimonial_second_p' , 'option' );
      } else{
        echo 'Lorem...';
      } ?></p>
    <p><?php $CTAtext = get_field( 'testimonial_second_work_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'testimonial_second_work_p' , 'option' );
      } else{
        echo 'PopArt Studio';
      } ?></p>
  </div>
  <a class="prev" onclick="plusDivs(-1)">&#10094;</a>
  <a class="next" onclick="plusDivs(1)">&#10095;</a>
</section>
<!--End-->
<!-- Gallery Section -->
<section class="gallery">
  <h2><?php $CTAtext = get_field( 'gallery_title' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'gallery_title' , 'option' );
      } else{
        echo 'Gallery';
      } ?></h2>
  <p><?php $CTAtext = get_field( 'gallery_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'gallery_p' , 'option' );
      } else{
        echo 'Ut sed odio quis sem bibendum tristique';
      } ?></p>
  <div class="gallery-row clearfix">
    <div class="gallery-image" data-aos="fade-in" data-aos-delay="300">
      <span class="overlay"></span>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/image1.jpg" alt="Gallery image">
    </div>
    <div class="gallery-image" data-aos="fade-in" data-aos-delay="600">
    <span class="overlay"></span>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/image2.jpg" alt="Gallery image">
    </div>
    <div class="gallery-image" data-aos="fade-in" data-aos-delay="900">
    <span class="overlay"></span>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/image3.jpg" alt="Gallery image">
    </div>
    <div class="gallery-image" data-aos="fade-in" data-aos-delay="1200">
    <span class="overlay"></span>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/image4.jpg" alt="Gallery image">
    </div>
  </div>
</section> <!-- END Gallery -->
<!-- Find Us Section -->
<section class="find-us">
  <div class="find-us__content">
    <div class="find-us__image">
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/find-us.jpg" alt="Find Us">
    </div>
    <div class="find-us__text">
      <h2><?php $CTAtext = get_field( 'find_us_title' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'find_us_title' , 'option' );
      } else{
        echo 'lorem us';
      } ?></h2>
      <p><?php $CTAtext = get_field( 'find_us_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'find_us_p' , 'option' );
      } else{
        echo 'Aenean rutrum eros sed scelerisque posuere. Curabitur dapibus pharetra neque sed ultrices. Vestibulum ante
        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean viverra et lacus vitae tempus.
        Aliquam luctus sapien ut dolor eleifend tristique. Vestibulum viverra auctor ex eget porttitor. Morbi
        imperdiet
        dolor eget feugiat tincidunt. Donec sagittis nunc lorem, ut faucibus tellus scelerisque mollis. Sed ac sapien
        gravida, mattis sapien aliquet, dictum leo. Pellentesque sed pellentesque ex, id rhoncus diam.';
      } ?></p>
      <div class="flytime">
        <div class="airplane-icon" data-aos="fade-left" data-aos-delay="200">
          <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/airplane-icon.png"
            alt="airplane icon">
          <p><?php $CTAtext = get_field( 'find_us_place_1' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'find_us_place_1' , 'option' );
      } else{
        echo 'Novi Sad';
      } ?></p>
          <span><?php $CTAtext = get_field( 'find_us_time_1' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'find_us_time_1' , 'option' );
      } else{
        echo '2 h 42 min';
      } ?></span>
        </div>
        <div class="airplane-icon" data-aos="fade-left" data-aos-delay="400">
          <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/airplane-icon.png"
            alt="airplane icon">
          <p><?php $CTAtext = get_field( 'find_us_place_2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'find_us_place_2' , 'option' );
      } else{
        echo 'Novi Sad';
      } ?></p>
          <span><?php $CTAtext = get_field( 'find_us_time_2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'find_us_time_2' , 'option' );
      } else{
        echo '2 h 42 min';
      } ?></span>
        </div>
        <div class="airplane-icon" data-aos="fade-left" data-aos-delay="600">
          <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/airplane-icon.png"
            alt="airplane icon">
          <p><?php $CTAtext = get_field( 'find_us_place_3' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'find_us_place_3' , 'option' );
      } else{
        echo 'Novi Sad';
      } ?></p>
          <span><?php $CTAtext = get_field( 'find_us_time_3' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'find_us_time_3' , 'option' );
      } else{
        echo '2 h 42 min';
      } ?></span>
        </div>
      </div>
    </div>
  </div>
</section> <!-- END Find Us -->
<!-- Projects Section -->
<section class="projects">
  <div class="container">
    <h2><?php $CTAtext = get_field( 'project_title' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'project_title' , 'option' );
      } else{
        echo 'Suspendisse sagittis felis non';
      } ?></h2>
    <p><?php $CTAtext = get_field( 'project_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'project_p' , 'option' );
      } else{
        echo 'Phasellus sollicitudin purus sed faucibus hendrerit. Vivamus ultrices lacinia mollis.';
      } ?></p>
    <div class="projects-items clearfix">
      <div class="project-item" data-aos="fade-up" data-aos-delay="300">
        <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/project1.jpg" alt="Project 1">
      <h3><?php $CTAtext = get_field( 'project_title_1' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'project_title_1' , 'option' );
      } else{
        echo 'sagittis non';
      } ?></h3>
      <span><?php $CTAtext = get_field( 'project_p_1' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'project_p_1' , 'option' );
      } else{
        echo 'Pellentesque sed pellentesque ex, id rhoncus diam. Donec at felis pretium, consectetur erat vel, imperdiet diam.';
      } ?></span>
      </div>
      <div class="project-item" data-aos="fade-up" data-aos-delay="600">
        <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/project2.jpg" alt="Project 2">
      <h3><?php $CTAtext = get_field( 'project_title_2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'project_title_2' , 'option' );
      } else{
        echo 'lorem bike';
      } ?></h3>
      <span><?php $CTAtext = get_field( 'project_p_2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'project_p_2' , 'option' );
      } else{
        echo 'Pellentesque sed pellentesque ex, id rhoncus diam. Donec at felis pretium, consectetur erat vel, imperdiet diam.';
      } ?></span>
      </div>
      <div class="project-item" data-aos="fade-up" data-aos-delay="900">
        <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/project3.jpg" alt="Project 3">
      <h3><?php $CTAtext = get_field( 'project_title_3' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'project_title_3' , 'option' );
      } else{
        echo 'river felis';
      } ?></h3>
      <span><?php $CTAtext = get_field( 'project_p_3' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'project_p_3' , 'option' );
      } else{
        echo 'Pellentesque sed pellentesque ex, id rhoncus diam. Donec at felis pretium, consectetur erat vel, imperdiet diam.';
      } ?></span>
      </div>
      <div class="project-item" data-aos="fade-up" data-aos-delay="1200">
        <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/project4.jpg" alt="Project 4">
      <h3><?php $CTAtext = get_field( 'project_title_4' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'project_title_4' , 'option' );
      } else{
        echo 'lux isse';
      } ?></h3>
      <span><?php $CTAtext = get_field( 'project_p_4' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'project_p_4' , 'option' );
      } else{
        echo 'Pellentesque sed pellentesque ex, id rhoncus diam. Donec at felis pretium, consectetur erat vel, imperdiet diam.';
      } ?></span>
      </div>
    </div>
  </div>
</section>
<!--Latest news-->
<section class="latest-news">
  <div class="news-header">
    <h1><?php $CTAtext = get_field( 'latest_news_title' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'latest_news_title' , 'option' );
      } else{
        echo 'Last news';
      } ?></h1>
  </div>
  <div class="latest-news_three">
    <div class="container" data-aos="fade-right" data-aos-delay="300">
      <h2><?php $CTAtext = get_field( 'latest_news_1_title' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'latest_news_1_title' , 'option' );
      } else{
        echo 'Quiskue vel lectus';
      } ?></h2>
      <p class="date"><?php $CTAtext = get_field( 'latest_news_date_1' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'latest_news_date_1' , 'option' );
      } else{
        echo 'February 10, 2016';
      } ?></p>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/latest-news1.jpg" alt="">
      <p><?php $CTAtext = get_field( 'latest_news_p_1' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'latest_news_p_1' , 'option' );
      } else{
        echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, aspernatur.';
      } ?></p>
      <a href="<?php the_field('latest_news_link_1'); ?>">Continue</a>
    </div>
    <div class="container" data-aos="fade-right" data-aos-delay="600">
      <h2><?php $CTAtext = get_field( 'latest_news_2_title' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'latest_news_2_title' , 'option' );
      } else{
        echo 'Quiskue vel lectus';
      } ?></h2>
      <p class="date"><?php $CTAtext = get_field( 'latest_news_date_2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'latest_news_date_2' , 'option' );
      } else{
        echo 'February 10, 2016';
      } ?></p>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/latest-news2.jpg" alt="">
      <p><?php $CTAtext = get_field( 'latest_news_p_2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'latest_news_p_2' , 'option' );
      } else{
        echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, aspernatur.';
      } ?></p>
      <a href="<?php the_field('latest_news_link_2'); ?>">Continue</a>
    </div>
    <div class="container" data-aos="fade-right" data-aos-delay="900">
      <h2><?php $CTAtext = get_field( 'latest_news_3_title' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'latest_news_3_title' , 'option' );
      } else{
        echo 'Quiskue vel lectus';
      } ?></h2>
      <p class="date"><?php $CTAtext = get_field( 'latest_news_date_3' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'latest_news_date_3' , 'option' );
      } else{
        echo 'February 10, 2016';
      } ?></p>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/latest-news3.jpg" alt="">
      <p><?php $CTAtext = get_field( 'latest_news_p_3' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'latest_news_p_3' , 'option' );
      } else{
        echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, aspernatur.';
      } ?></p>
      <a href="<?php the_field('latest_news_link_3'); ?>">Continue</a>
    </div>
  </div>
</section>
<!--End-->
<!--Subscribe-->
<section class="subscribe">
  <p><?php $CTAtext = get_field( 'subscribe_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'subscribe_p' , 'option' );
      } else{
        echo 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, similique.';
      } ?></p>
  <form>
    <input type="email" name="emailaddress" placeholder="Enter e-mail">
    <a href="#">Subscribe</a>
  </form>
</section>
<!--End-->
<!--Footer-->
<section class="footer">
  <div class="container">
    <div class="footer-for">
      <div class="footer-logo">
        <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/logo.jpg" alt="logo">
      </div>
      <div class="catagory">
      <div class="footer-one">
        <h3><?php $CTAtext = get_field( 'subscribe_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'subscribe_p' , 'option' );
      } else{
        echo 'Popart studio';
      } ?></h3>
        <a href="<?php the_field('footer_category_one_link_1'); ?>"><?php $CTAtext = get_field( 'footer_category_one_1' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'footer_category_one_1' , 'option' );
      } else{
        echo 'Link 1';
      } ?></a>
        <a href="<?php the_field('footer_category_one_link_2'); ?>"><?php $CTAtext = get_field( 'footer_category_one_2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'footer_category_one_2' , 'option' );
      } else{
        echo 'Link 2';
      } ?></a>
        <a href="<?php the_field('footer_category_one_link_3'); ?>"><?php $CTAtext = get_field( 'footer_category_one_3' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'footer_category_one_3' , 'option' );
      } else{
        echo 'Link 3';
      } ?></a>
      </div>
      <div class="footer-two">
        <h3><?php $CTAtext = get_field( 'subscribe_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'subscribe_p' , 'option' );
      } else{
        echo 'Follow us';
      } ?></h3>
        <a href="<?php the_field('footer_category_two_link_1'); ?>"><?php $CTAtext = get_field( 'footer_category_two_1' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'footer_category_two_1' , 'option' );
      } else{
        echo 'Link 1';
      } ?></a>
        <a href="<?php the_field('footer_category_two_link_2'); ?>"><?php $CTAtext = get_field( 'footer_category_two_2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'footer_category_two_2' , 'option' );
      } else{
        echo 'Link 2';
      } ?></a>
        <a href="<?php the_field('footer_category_two_link_3'); ?>"><?php $CTAtext = get_field( 'footer_category_two_3' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'footer_category_two_3' , 'option' );
      } else{
        echo 'Link 3';
      } ?></a>
      </div>
      <div class="footer-three">
        <h3><?php $CTAtext = get_field( 'subscribe_p' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'subscribe_p' , 'option' );
      } else{
        echo 'Contact us';
      } ?></h3>
        <a href="<?php the_field('footer_category_three_link_1'); ?>"><?php $CTAtext = get_field( 'footer_category_three_1' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'footer_category_three_1' , 'option' );
      } else{
        echo 'Narodnog Fronta';
      } ?></a>
        <a href="<?php the_field('footer_category_three_link_2'); ?>"><?php $CTAtext = get_field( 'footer_category_three_2' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'footer_category_three_2' , 'option' );
      } else{
        echo 'Novi Sad';
      } ?></a>
        <a href="<?php the_field('footer_category_three_link_3'); ?>"><?php $CTAtext = get_field( 'footer_category_three_3' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'footer_category_three_3' , 'option' );
      } else{
        echo '+381 63 123456';
      } ?></a>
      </div>
      </div>
    </div>
    <div class="copy-right">
      <p><?php $CTAtext = get_field( 'copyright' , 'option');
      if (!empty($CTAtext)) {
        the_field( 'copyright' , 'option' );
      } else{
        echo 'Copyright © PopArt Studio 2017.All rights reserved. PopArt';
      } ?></p>
    </div>
  </div>
</section>
<!--Script JS-->
<script src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/js/slider.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/js/main.js"></script>
<!-- END Projects -->