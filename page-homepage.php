<?php
/* Template Name: Home page */
get_header(); ?>
<header>
  <nav class="container">
    <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/logo.jpg" alt="Logo">
    <ul>
      <li><a class="active" href="#">Home</a></li>
      <li><a href="#">Menu link</a></li>
      <li><a href="#">Menu link</a></li>
      <li><a href="#">Menu link</a></li>
      <li class="button"><a href="#">Button</a></li>
    </ul>
  </nav>
</header>
<section class="big-slider">
    <div class="big-slider_object">
        <img class="mySlides" src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/objekat.jpg" alt="Gallery image">
        <img class="mySlides" src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/objekat.jpg" alt="Gallery image">
    <div class="text">
        <h1>Nullam in nisl posuere</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
      <a class="prev" onclick="plusDivs(-1)">&#10094;</a>
      <a class="next" onclick="plusDivs(1)">&#10095;</a>
    </div>
    <a class="button-slider" href="#"><span>Ut sed odio quis</span><span>Suspendisse sagittis felis</span></a>

    <!-- <div class="big-slider_object">
        <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/objekat.jpg" alt="Gallery image">
    <div class="text">
        <h1>Nullam in nisl posuere</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>    
    </div>
    </div> -->
</section>
<!--Whar we do-->
<section class="what-we-do">
  <div class="container">
    <h1>Curabitur lacus ipsum</h1>
    <p class="first">In maximus blandit tortor, ut efficitur tortor suscipit vitae.</p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
  </div>
  <div class="box-three">
  <div class="box-three_items">
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/Rectangle 7.jpg" alt="images">
      <span class="number">01</span>
      <h2>lacus</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
      <span class="line"></span>
    </div>
    <div class="box-three_items">
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/Rectangle 6.jpg" alt="images">
      <span class="number">02</span>
      <h2>lacus</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
      <span class="line"></span>
    </div>
    <div class="box-three_items">
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/Rectangle 5.jpg" alt="images">
      <span class="number">03</span>
      <h2>lacus</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
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
    <h1>Lorem</h1>
    <span class="line"></span>
  </div>
  <div class="testimonials-list">
    <p>Lorem ipsum dolor sit amet.</p>
    <p>PopArt Studio</p>
  </div>
  <div class="testimonials-list">
    <p>Lorem.</p>
    <p>PopArt Studio</p>
  </div>
  <a class="prev" onclick="plusDivs(-1)">&#10094;</a>
  <a class="next" onclick="plusDivs(1)">&#10095;</a>
</section>
<!--End-->
<!-- Gallery Section -->
<section class="gallery">
  <h2>Gallery</h2>
  <p>Ut sed odio quis sem bibendum tristique</p>
  <div class="gallery-row clearfix">
    <div class="gallery-image">
      <span class="overlay"></span>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/image1.jpg" alt="Gallery image">
    </div>
    <div class="gallery-image">
    <span class="overlay"></span>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/image2.jpg" alt="Gallery image">
    </div>
    <div class="gallery-image">
    <span class="overlay"></span>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/image3.jpg" alt="Gallery image">
    </div>
    <div class="gallery-image">
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
      <h2>lorem us</h2>
      <p>Aenean rutrum eros sed scelerisque posuere. Curabitur dapibus pharetra neque sed ultrices. Vestibulum ante
        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean viverra et lacus vitae tempus.
        Aliquam luctus sapien ut dolor eleifend tristique. Vestibulum viverra auctor ex eget porttitor. Morbi
        imperdiet
        dolor eget feugiat tincidunt. Donec sagittis nunc lorem, ut faucibus tellus scelerisque mollis. Sed ac sapien
        gravida, mattis sapien aliquet, dictum leo. Pellentesque sed pellentesque ex, id rhoncus diam.</p>
      <div class="flytime">
        <div class="airplane-icon">
          <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/airplane-icon.png"
            alt="airplane icon">
          <p>Novi Sad</p>
          <span>2 h 42 min</span>
        </div>
        <div class="airplane-icon">
          <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/airplane-icon.png"
            alt="airplane icon">
          <p>Novi Sad</p>
          <span>2 h 42 min</span>
        </div>
        <div class="airplane-icon">
          <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/airplane-icon.png"
            alt="airplane icon">
          <p>Novi Sad</p>
          <span>2 h 42 min</span>
        </div>
      </div>
    </div>
  </div>
</section> <!-- END Find Us -->
<!-- Projects Section -->
<section class="projects">
  <div class="container">
    <h2>Suspendisse sagittis felis non</h2>
    <p>Phasellus sollicitudin purus sed faucibus hendrerit. Vivamus ultrices lacinia mollis.</p>
    <div class="projects-items clearfix">
      <div class="project-item">
        <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/project1.jpg" alt="Project 1">
      <h3>sagittis non</h3>
      <span>Pellentesque sed pellentesque ex, id rhoncus diam. Donec at felis pretium, consectetur erat vel, imperdiet diam.</span>
      </div>
      <div class="project-item">
        <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/project2.jpg" alt="Project 2">
      <h3>lorem bike</h3>
      <span>Pellentesque sed pellentesque ex, id rhoncus diam. Donec at felis pretium, consectetur erat vel, imperdiet diam.</span>
      </div>
      <div class="project-item">
        <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/project3.jpg" alt="Project 3">
      <h3>river felis</h3>
      <span>Pellentesque sed pellentesque ex, id rhoncus diam. Donec at felis pretium, consectetur erat vel, imperdiet diam.</span>
      </div>
      <div class="project-item">
        <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/project4.jpg" alt="Project 4">
      <h3>lux isse</h3>
      <span>Pellentesque sed pellentesque ex, id rhoncus diam. Donec at felis pretium, consectetur erat vel, imperdiet diam.</span>
      </div>
    </div>
  </div>
</section>
<section class="latest-news">
  <div class="news-header">
    <h1>Last news</h1>
  </div>
  <div class="latest-news_three">
    <div class="container">
      <h2>Quiskue vel lectus</h2>
      <p class="date">February 10, 2016</p>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/latest-news1.jpg" alt="">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, aspernatur.</p>
      <a href="#">Continue</a>
    </div>
    <div class="container">
      <h2>Quiskue vel lectus</h2>
      <p class="date">February 10, 2016</p>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/latest-news2.jpg" alt="">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, aspernatur.</p>
      <a href="#">Continue</a>
    </div>
    <div class="container">
      <h2>Quiskue vel lectus</h2>
      <p class="date">February 10, 2016</p>
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/latest-news3.jpg" alt="">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, aspernatur.</p>
      <a href="#">Continue</a>
    </div>
  </div>
</section>
<section class="subscribe">
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, similique.</p>
  <form>
    <input type="email" name="emailaddress" placeholder="Enter e-mail">
    <a href="#">Subscribe</a>
  </form>
</section>
<!-- END Projects -->
<script src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/js/slider.js"></script>


