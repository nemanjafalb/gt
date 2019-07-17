<?php
/* Template Name: Home page */
get_header(); ?>
<header>
  <nav>
    <li><img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/logo.jpg" alt="Logo"></li>
    <ul>
      <li><a href="#">Home</a><span class="space">/</span></li>
      <li><a href="#">Menu link</a><span class="space">/</span></li>
      <li><a href="#">Menu link</a><span class="space">/</span></li>
      <li><a href="#">Menu link</a><span class="space">/</span></li>
      <li class="button"><a href="#">Button</a></li>
    </ul>
  </nav>
</header>
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
</section><!-- END Projects -->