<?php get_header(); 

?>
    <div class="main-container mt-4r">
      <section class="hero-section bg-grad-2">
        <div class="container">
          <div
            id="heroCarousel"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row align-items-end align-items-lg-center pt-lg-5">
                  <div class="col-md-6 py-5 ps-sm-4 mb-5">
                    <h1 class="text-white font-black">LaSara Medical Group</h1>
                    <p
                      class="hero-sub font-light text-white mt-4 mb-5 line-height-lg"
                    >
                      We help you regenerate & optimize your sexual and physical
                      health Offices in Los Angeles, Orange County, and San
                      Diego
                    </p>
                    <a href="<?php echo get_site_url() ?>/contact" class="btn btn-grad mb-4"
                      >Call Us</a
                    >
                    <a
                      href="<?php echo get_site_url() ?>/about"
                      class="btn btn-outline-white mb-4 ms-sm-4"
                      >Learn More</a
                    >
                  </div>
                  <div class="col-md-6">
                    <img
                      src="<?php bloginfo('template_directory')?>/img/slider-img-1.png"
                      alt="Slider Image"
                      class="img-fluid"
                    />
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row align-items-end align-items-lg-center pt-lg-5">
                  <div class="col-md-6 py-5 ps-sm-4 mb-5">
                    <h1 class="text-white font-black">LaSara Medical Group</h1>
                    <p
                      class="hero-sub font-light text-white mt-4 mb-5 line-height-lg"
                    >
                      A New, Proven Treatment to Reverse Erectile Dysfunction
                      for the Long-Term
                    </p>
                    <a href="<?php echo get_site_url() ?>/contact" class="btn btn-grad mb-4"
                      >Call Us</a
                    >
                    <a
                      href="<?php echo get_site_url() ?>/about"
                      class="btn btn-outline-white mb-4 ms-sm-4"
                      >Learn More</a
                    >
                  </div>
                  <div class="col-md-6">
                    <img
                      src="<?php bloginfo('template_directory')?>/img/slider-img-2.png"
                      alt="Slider Image"
                      class="img-fluid"
                    />
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row align-items-end align-items-lg-center pt-lg-5">
                  <div class="col-md-6 py-5 ps-sm-4 mb-5">
                    <h1 class="text-white font-black">LaSara Medical Group</h1>
                    <p
                      class="hero-sub font-light text-white mt-4 mb-5 line-height-lg"
                    >
                      The truth about Focused Shockwave Therapy vs.
                      Acoustic/Sound Wave Therapy
                    </p>
                    <a href="<?php echo get_site_url() ?>/contact" class="btn btn-grad mb-4"
                      >Call Us</a
                    >
                    <a
                      href="<?php echo get_site_url() ?>/about"
                      class="btn btn-outline-white mb-4 ms-sm-4"
                      >Learn More</a
                    >
                  </div>
                  <div class="col-md-6">
                    <img
                      src="<?php bloginfo('template_directory')?>/img/slider-img-3.png"
                      alt="Slider Image"
                      class="img-fluid"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#heroCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#heroCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </section>
      <section class="home-service">
        <div class="container-fluid px-xl-5">
        <div class="service-tile-container">
            <div class="service-tile p-2 p-lg-4">
              <a href="<?php echo get_site_url() ?>/erectile-dysfunction-shockwave-therapy">
                <span class="service-img me-1 me-md-3 service-img-svg">
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/erectile-dysfunction.svg"
                    alt="Service Icon"
                  />
                </span>
                <span class="h5 font-bold service-title"
                  >Erectile Dysfunction</span
                >
              </a>
            </div>
            <div class="service-tile p-2 p-lg-4">
              <a href="<?php echo get_site_url() ?>/peyronies-disease-or-penile-injury-shockwave-therapy">
                <span class="service-img me-1 me-md-3 service-img-svg">
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/peyronies.svg"
                    alt="Service Icon"
                  />
                </span>
                <span class="h5 font-bold service-title"
                  >Peyronies Disease</span
                >
              </a>
            </div>
            <div class="service-tile p-2 p-lg-4">
              <a href="<?php echo get_site_url() ?>/penile-sensitivity-regeneration">
                <span class="service-img me-1 me-md-3 service-img-svg">
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/penile-sensitivity.svg"
                    alt="Service Icon"
                  />
                </span>
                <span class="h5 font-bold service-title"
                  >Lack Of Penile Sensitivity</span
                >
              </a>
            </div>
            <div class="service-tile p-2 p-lg-4">
              <a href="<?php echo get_site_url() ?>/tennis-and-golfers-elbow">
                <span class="service-img me-1 me-md-3 service-img-svg">
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/tennis-elbow.svg"
                    alt="Service Icon"
                  />
                </span>
                <span class="h5 font-bold service-title">Tennis Elbow </span>
              </a>
            </div>
            <div class="service-tile p-2 p-lg-4">
              <a href="<?php echo get_site_url() ?>/plantar-fasciitis-heel-spurs">
                <span class="service-img me-1 me-md-3 service-img-svg">
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/plantar-fasciitis.svg"
                    alt="Service Icon"
                  />
                </span>
                <span class="h5 font-bold service-title"
                  >Plantar Fasciitis</span
                >
              </a>
            </div>
            <div class="service-tile p-2 p-lg-4">
              <a href="<?php echo get_site_url() ?>/scar-reduction-face-body">
                <span class="service-img me-1 me-md-3 service-img-svg">
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/scar-tissue.svg"
                    alt="Service Icon"
                  />
                </span>
                <span class="h5 font-bold service-title">Scar Tissue</span>
              </a>
            </div>
            <div class="service-tile p-2 p-lg-4">
              <a href="<?php echo get_site_url() ?>/painful-shoulder-tendinopathy">
                <span class="service-img me-1 me-md-3 service-img-png">
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/tendonopathy.png"
                    alt="Service Icon"
                    class="service-img-png-og"
                  />
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/tendonopathy-white.png"
                    alt="Service Icon"
                    class="service-img-png-white"
                  />
                </span>
                <span class="h5 font-bold service-title">Tendonopathy</span>
              </a>
            </div>
            <div class="service-tile p-2 p-lg-4">
              <a href="#">
                <span class="service-img me-1 me-md-3 service-img-png">
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/neuropathy.png"
                    alt="Service Icon"
                    class="service-img-png-og"
                  />
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/neuropathy-white.png"
                    alt="Service Icon"
                    class="service-img-png-white"
                  />
                </span>
                <span class="h5 font-bold service-title">Neuropathy</span>
              </a>
            </div>
            <div class="service-tile p-2 p-lg-4">
              <a href="<?php echo get_site_url() ?>/facial-skin-tightening-rejuvenation">
                <span class="service-img me-1 me-md-3 service-img-png">
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/skin-tightening-wrinkles.png"
                    alt="Service Icon"
                    class="service-img-png-og"
                  />
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/skin-tightening-wrinkles-white.png"
                    alt="Service Icon"
                    class="service-img-png-white"
                  />
                </span>
                <span class="h5 font-bold service-title"
                  >Skin Tightening Wrinkles</span
                >
              </a>
            </div>
            <div class="service-tile p-2 p-lg-4">
              <a href="<?php echo get_site_url() ?>/muscle-pain-tear">
                <span class="service-img me-1 me-md-3 service-img-svg">
                  <img
                    src="<?php bloginfo('template_directory')?>/img/service/pain-management.svg"
                    alt="Service Icon"
                  />
                </span>
                <span class="h5 font-bold service-title">Pain Management</span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="our-practice mt-5 py-5">
        <div class="container">
          <div class="row">
            <div
              class="col-lg-6 mb-4 mb-lg-0 animate__animated"
              data-animate="slideInUp"
            >
              <div
                class="img-container-w-caption bg-img bg-img-overlay bg-img-overlay-sm-right"
                data-background-image="<?php bloginfo('template_directory')?>/img/modern-office-design.webp"
              >
                <div class="img-caption bg-grad p-5">
                  <div class="row align-items-center">
                    <div class="col-6">
                      <span class="h2 text-white"> LaSara Medical Group </span>
                    </div>
                    <div class="col-6">
                      <span class="font-extralight text-white"
                        >Erectile Dysfunction Health Clinic located in Orange
                        County, Los Angeles, & San Diego, CA</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col-lg-6 ps-lg-5 animate__animated"
              data-animate="slideInUp"
            >
              <h2>About Our Practice</h2>
              <h5 class="font-extralight text-secondary mt-3 mb-4">
                LaSara Medical Group specializes in helping men who suffer from
                erectile dysfunction (ED).
              </h5>
              <p>
                We offer our patients the latest in ED treatment, known as low
                intensity focused shockwave therapy. As pioneers of this
                treatment, we’ve seen unimaginable results and have treated more
                men than any clinic in our region.
              </p>
              <p class="m-0">
                Focused shockwave therapy is the only clinically studied medical
                treatment that is known to reverse ED for the long-term. The
                foremost advanced medical communities around the world consider
                it to be the potential medical answer of rehabilitating or even
                curing ED. For over 10 years, successful use throughout Europe,
                Canada, Asia, and Australia, as well as numerous studies have
                proven the efficacy and long-term benefits of focused shockwave
                therapy.
              </p>
              <a href="<?php echo get_site_url() ?>/about" class="btn btn-outline-secondary mt-5">Read More</a>
            </div>
          </div>
        </div>
      </section>
      <section class="mt-lg-5 py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-2 offset-lg-2 col-md-3">
              <h2 class="h1">Men’s sexual health</h2>
            </div>
            <div class="col-lg-8 col-md-9">
              <p class="m-0">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                sed diam voluptua. At vero eos et accusam et justo duo dolores
                et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="img-side-by-side mt-lg-5 py-5">
        <div class="container pb-lg-5">
          <div class="row">
            <div
              class="col-lg-7 bg-img img-container-w-caption"
              data-background-image="<?php bloginfo('template_directory')?>/img/romantic-italy.jpg"
            >
              <div
                class="img-caption bg-white py-4 px-5 animate__animated"
                data-animate="slideInLeft"
              >
                <h2 class="mb-3">Shockwave</h2>
                <ul class="list-check-grad mb-4">
                  <li class="mb-2">Erectile Dysfunction Shockwave Therapy</li>
                  <li class="mb-2">
                    Peyronie’s Disease or Penile Injury Shockwave Therapy
                  </li>
                  <li class="mb-2">Peptides & Pharmaceuticals</li>
                  <li class="mb-2">Penile Injection Therapy</li>
                  <li class="mb-2">Penile Sensitivity Regeneration</li>
                </ul>
                <a href="#" class="btn btn-lg btn-grad">Learn More</a>
              </div>
            </div>
            <div
              class="col-lg-5 bg-img bg-top img-container-w-caption"
              data-background-image="<?php bloginfo('template_directory')?>/img/pexels-chloe.jpg"
            >
              <div
                class="img-caption bg-white py-4 px-5 animate__animated"
                data-animate="slideInRight"
              >
                <h2 class="mb-3">Shockwave</h2>
                <ul class="list-check-grad mb-4">
                  <li class="mb-2">
                    Pelvic Pain Syndrome and Chronic Prostatitis
                  </li>
                  <li class="mb-2">Testosterone Hormone Replace Therapy</li>
                </ul>
                <a href="#" class="btn btn-lg btn-grad">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section
        class="py-5 bg-img bg-top bg-left bg-overlay bg-overlay-right"
        data-background-image="<?php bloginfo('template_directory')?>/img/old-couple.jpg"
      >
        <div class="container z-1">
          <div class="row justify-content-end py-lg-5">
            <div class="col-md-6 col-sm-8 text-md-start text-end pe-md-5">
              <h2 class="text-white font-black mb-4">
                Hormones Performance with Peptides & NAD+
              </h2>
              <p class="text-white mb-5">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                takimata sanctus est Lorem ipsum dolor sit amet
              </p>
              <a href="#" class="btn btn-lg btn-grad">Buy Now</a>
            </div>
          </div>
        </div>
      </section>
      <section
        class="additional-shockwave pt-2 animate__animated"
        data-animate="slideInUp"
      >
        <div class="container pb-lg-5">
          <div class="row">
            <div
              class="col-lg-4 col-md-12 px-2 py-5 d-flex flex-md-column justify-content-lg-start justify-content-between"
            >
              <h2 class="font-black mb-md-5">
                Additional Shockwave Treatments
              </h2>
              <i class="fa-solid fa-arrow-right-long text-secondary fa-3x"></i>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="treatment-tile bg-white p-4 mb-5">
                <a href="#" class="treatment-list">
                  <span class="service-img mb-4 service-img-svg">
                    <img
                      src="<?php bloginfo('template_directory')?>/img/service/aesthetic.svg"
                      alt="Service Icon"
                    />
                  </span>
                  <span class="h5 font-bold d-block service-title mb-4"
                    >Aesthetic Treatments</span
                  >
                  <ul class="list-check-grad m-0">
                    <li class="mb-2">Facial Collagen Production Stimulation</li>
                    <li class="mb-2">Skin Tightening</li>
                    <li class="mb-0">Scar and Pigmentation Treatment</li>
                  </ul>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="treatment-tile bg-white p-4 mb-5">
                <a href="#" class="treatment-list">
                  <span class="service-img mb-4 service-img-svg">
                    <img
                      src="<?php bloginfo('template_directory')?>/img/service/pain.svg"
                      alt="Service Icon"
                    />
                  </span>
                  <span class="h5 font-bold d-block service-title mb-4"
                    >Pain Management</span
                  >
                  <ul class="list-check-grad m-0">
                    <li class="mb-2">Plantar fasciitis & heel spurs</li>
                    <li class="mb-2">Neuropathy</li>
                    <li class="mb-2">Tendinopathy</li>
                    <li class="mb-2">Tennis Elbow</li>
                    <li class="mb-2">Post Surgical pain</li>
                    <li class="mb-0">Sports related injuries</li>
                  </ul>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section
        class="testimonial-section bg-secondary-light py-5 rad-bor-bottom rad-top animate__animated"
        data-animate="slideInUp"
      >
        <div class="container py-lg-5">
          <div
            class="d-flex flex-column flex-lg-row justify-content-lg-between mb-5"
          >
            <h2 class="me-5">Testimonials</h2>
            <h3 class="font-extralight text-primary">
              We’ve Changed The Lives Of Countless Men We Can Change Yours Too
            </h3>
          </div>
          <div class="testimonial_slick">

          <?php

// Check rows exists.
if( have_rows('testimonials','options') ):

    // Loop through rows.
    while( have_rows('testimonials','options') ) : the_row();
?>
                 <div class="card testimonial-item p-4 p-md-5">

                <img src="<?php bloginfo('template_directory')?>/img/quote.svg" alt="" class="testimonial-icon"> 
              <div class="testimonial-author">
                <div class="testimonial-img mb-4">
                <?php 
$image = get_sub_field('image');

if( $image ) {
    echo wp_get_attachment_image( $image, 'testimonials-img', "", ["class" => "","alt"=>"Icon"]);
}
?>
                  <p class="display-6 font-bold"> <?php echo get_sub_field('title');?></p>
                </div>
                <p>
             <?php echo get_sub_field('description',false);?>
                </p>
                <a
                  href=" <?php echo get_sub_field('read_more');?>"
                  class="text-secondary font-bold videoPopup"
                  >Read More</a
                >
              </div>
            </div>
        
<?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

?>
  
          </div>
          <div class="text-center pt-5 mt-5">
            <a href="<?php echo get_site_url() ?>/testimonials" class="btn btn-grad"
              >MORE PATIENT STORIES</a
            >
          </div>
        </div>
      </section>
      <section class="location py-5 rad-bor-bottom">
        <div class="container py-lg-5">
          <div
            class="d-flex flex-column flex-lg-row align-items-center mb-5 animate__animated"
            data-animate="slideInUp"
          >
            <h2 class="me-5">Our Location</h2>
            <h3 class="font-extralight text-primary">
              Choose Your Preferred Location
            </h3>
          </div>
          <div
            class="row justify-content-center mb-5 animate__animated"
            data-animate="slideInUp"
          >
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="location-map">
                <img
                  src="<?php bloginfo('template_directory')?>/img/location/map-1.jpg"
                  alt="MAP"
                  class="img-fluid"
                />
                <div class="c-card bg-white p-4 location-detail">
                  <p class="font-bold text-black">
                    17411 Irvine Blvd. Suite J, Tustin, CA 92780
                  </p>
                  <a href="tel:949-520-1551" class="btn btn-grad"
                    >949-520-1551</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="location-map">
                <img
                  src="<?php bloginfo('template_directory')?>/img/location/map-1.jpg"
                  alt="MAP"
                  class="img-fluid"
                />
                <div class="c-card bg-white p-4 location-detail">
                  <p class="font-bold text-black">
                    11500 W Olympic Blvd Suite 440, Los Angeles, CA 90064
                  </p>
                  <a href="tel:424-343-8998" class="btn btn-grad"
                    >424-343-8998</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="location-map">
                <img
                  src="<?php bloginfo('template_directory')?>/img/location/map-1.jpg"
                  alt="MAP"
                  class="img-fluid"
                />
                <div class="c-card bg-white p-4 location-detail">
                  <p class="font-bold text-black">
                    285 N El Camino Real Suite 117, Encinitas, CA 92024
                  </p>
                  <a href="tel:760-266-8466" class="btn btn-grad"
                    >760-266-8466</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="location_slick">
            <img src="<?php bloginfo('template_directory')?>/img/location/location-1.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-2.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-3.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-1.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-2.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-3.jpg" alt="Location" />
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>