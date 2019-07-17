<?php
/* Template Name: Greentest */
?>
<?php wp_head(); ?>
    <header>
        <nav class="container">
            <div class="logo">
                <img src="/gt/wp-content/themes/gt/images/logo.jpg" alt="logo">
            </div>
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Menu link</a></li>
                <li><a href="#">Menu link</a></li>
                <li><a href="#">Menu link</a></li>
                <li><button><a href="">Button</a></button></li>
            </ul>
        </nav>
    </header>    
	<section class="big-slider">
        <div class="container">
            <h1>Nullam in nisl posuere</h1>
            <p>In maximus blandit tortor, ut efficitur tortor suscipit vitae.</p>
        </div>
        <div class="slider">
            <div class="left"></div>
            <div class="right"></div>
            <img src="/gt/wp-content/themes/gt/images/objekat.jpg" alt="slika">
            
            <!-- <img src="" alt="slika"> -->
        </div>
        <div class="buttom">
            <button>Ut sed odio quis
                <hr>
                    Suspendisse sagittis felis
            </button>
        </div>
    </section>
    <section class="what-we-do">
        <div class="container">
            <h1>Curabitur lacus ipsum</h1>
            <p>In maximus blandit tortor, ut efficitur tortor suscipit vitae.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="box-three">
            <div class="space-div">
                <img src="/gt/wp-content/themes/gt/images/image1.jpg" alt="">
                <span>01</span>
                <h2>lacus</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
            </div>
            <div class="space-div">
                <img src="/gt/wp-content/themes/gt/images/image1.jpg" alt="">
                <span>01</span>
                <h2>lacus</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
            </div>
            <div class="space-div">
                <img src="/gt/wp-content/themes/gt/images/image1.jpg" alt="">
                <span>01</span>
                <h2>lacus</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
            </div>
            <div>

            </div>
            <div>

            </div>
        </div>
        
    </section>
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
    <div class="gallery-image overlay red">
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/image1.jpg" alt="Gallery image">
    </div>
    <div class="gallery-image overlay">
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/image2.jpg" alt="Gallery image">
    </div>
    <div class="gallery-image overlay">
      <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/gt/images/image3.jpg" alt="Gallery image">
    </div>
    <div class="gallery-image overlay">
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
