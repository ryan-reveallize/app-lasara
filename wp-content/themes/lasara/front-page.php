<?php get_header(); 
global $services;
?>
    <div class="main-container mt-4r">
      <section class="hero-section bg-grad-2">
        <div class="container">
          <div
            id="heroCarousel"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
          >
		<?php /*?>
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
		<?php */?>		
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row align-items-end align-items-lg-center pt-lg-5">
                  <div class="col-md-6 py-5 ps-sm-4 pe-lg-5 mb-5">
                    <h1 class="text-white display-4 font-black"><span class="d-lg-block">LaSara</span> Medical Group</h1>
                    <p
                      class="hero-sub font-light text-white mt-4 mb-5 line-height-lg text-justify"
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
			<?php /*?>
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
			<?php */?>
            </div>
          </div>
        </div>

		<?php /*?>
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
		<?php */?>
      </section>
      <section class="home-service">
        <div class="container-fluid px-xl-5">
          <?php $services = [
            'Erectile Dysfunction',
            'Testosterone Replacement Therapy',
            'Performance Peptides & Nad+',
            'Orthopedics & Pain Management',
            'Aesthetics'
          ];?>
          <?php get_template_part( 'template-parts/service-tile' );?>
        </div>
      </section>
      <section class="our-practice mt-5 py-5">
        <div class="container">
          <div class="row align-items-center">
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
                        >Erectile Dysfunction Health Clinic located in Orange County, Los Angeles, & San Diego, CA</span
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
              <h2 class="mb-4">About Our Practice</h2>
              <h5 class="font-extralight text-secondary mt-3 mb-4">
              LaSara Medical Group is committed to helping our patients regenerate and optimize their health with innovative technology and products that deliver tangible outcomes for our patients. We specialize in Focused Shockwave Therapy, a revolutionary, non-invasive, and non-surgical solution to treat the root cause of dysfunctions, pain, and signs of aging.
              </h5>
              <p>
              Regenerative medicine works to heal and grow human cells, tissues, and organs to restore normal function. Our treatments are risk free and proven with more than a decade of research. 
              </p>
              <p>Since 2017, we’ve completed over 11,000 Shockwave treatments and we have been changing the lives of men and women with our approach to healing the root cause of their challenges. In addition to our Focused Shockwave Therapy, we offer cutting edge treatments such as peptides and hormone therapies that, when paired with Shockwave, trigger even greater changes in the body and mind that last. </p>
              <p class="m-0">
              The human body is capable of amazing transformations, LaSara Medical Group is just the catalyst to make that happen! We hope we are given the chance to help you just as we have helped countless patients before you.
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
              LaSara Medical Group specializes in helping men who suffer from erectile dysfunction and Peyronie’s Disease. We offer our patients the latest for sexual dysfunction treatments, known as low intensity focused shockwave therapy. As pioneers of this treatment since 2017, we’ve seen unimaginable results and have completed more than 11,000 treatments since our humble beginning. We know what works and more importantly, what doesn’t work. Our treatment protocol has been tested and proven to restore men back to experiencing full and natural erections.
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
                <h2 class="mb-3">Regenerative Treatments</h2>
                <ul class="list-check-grad mb-4">
                  <li class="mb-2"><a href="<?php echo get_site_url() ?>/erectile-dysfunction-shockwave-therapy">Erectile Dysfunction Shockwave Therapy</a></li>
                  <li class="mb-2"><a href="<?php echo get_site_url() ?>/peyronies-disease-or-penile-injury-shockwave-therapy">Peyronie’s Disease or Penile Injury Shockwave Therapy</a></li>
                  <li class="mb-2"><a href="<?php echo get_site_url() ?>/penile-sensitivity-regeneration">Penile Sensitivity Regeneration Shockwave Therapy</a></li>
                  <li class="mb-2"><a href="<?php echo get_site_url() ?>/pelvic-pain-syndrome-and-chronic-prostatitis">Pelvic Pain Syndrome and Chronic Prostatitis Shockwave Therapy</a></li>
                </ul>
                <a href="<?php echo get_site_url() ?>/why-lasara-vs-the-competition" class="btn btn-lg btn-grad">Why LaSara?</a>
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
                <h2 class="mb-3">Traditional Treatments</h2>
                <ul class="list-check-grad mb-4">
                  <li class="mb-2"><a href="<?php echo get_site_url() ?>/penile-injection-therapy">Penile Injection Therapy</a></li>
                  <li class="mb-2"><a href="<?php echo get_site_url() ?>/pharmaceuticals">Pharmaceutical Treatments</a></li>
                  <li class="mb-2"><a href="<?php echo get_site_url() ?>/peptide-therapy">Peptide Therapies</a></li>
                </ul>
                <a href="<?php echo get_site_url() ?>/why-lasara-vs-the-competition" class="btn btn-lg btn-grad">Why LaSara?</a>
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
                Hormones, Peptides & NAD+
              </h2>
              <p class="text-white mb-5">
                At LaSara Medical Group, we offer a variety of hormone treatments, peptide protocols, and NAD+ products that are designed to help our patients achieve their health and life goals. By optimizing your body’s inputs with medically advanced treatments, you provide your body and mind the tools it needs to perform at your highest level physically and mentally.
              </p>
              <a href="#" class="btn btn-lg btn-grad">Shop Now</a>
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
                    >Pain Management</span
                  >
                  <ul class="list-check-grad m-0">
                  
                    <li class="mb-2"><a href="<?php echo get_site_url() ?>/neuropathy">Neuropathy</a></li>
                    <li class="mb-2"><a href="<?php echo get_site_url() ?>/plantar-fasciitis-heel-spurs">Plantar Fasciitis & Heel Spurs </a></li>
                    <li class="mb-2"><a href="<?php echo get_site_url() ?>/jumpers-knee-patellar-tendinitis">Jumper’s Knee & Patellar Tendinitis </a></li>
                    <li class="mb-2"><a href="<?php echo get_site_url() ?>/painful-shoulder-tendinopathy">Painful Shoulder </a></li>
                    <li class="mb-2"><a href="<?php echo get_site_url() ?>/tennis-and-golfers-elbow">Tennis And Golfer’s Elbow </a></li>
                    <li class="mb-2"><a href="<?php echo get_site_url() ?>/muscle-pain-tear">Muscle Pain & Tear </a></li>
                    <li class="mb-2"><a href="<?php echo get_site_url() ?>/hip-pain">Hip Pain </a></li>
                    <li class="mb-0"><a href="#">Bone Fracture</a></li>
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
                    >Aesthetics</span
                  >
                  <ul class="list-check-grad m-0">
                    <li class="mb-2"><a href="<?php echo get_site_url() ?>/facial-skin-tightening-rejuvenation">Facial Skin Tightening & Rejuvenation </a></li>
                    <li class="mb-2"><a href="<?php echo get_site_url() ?>/scar-reduction-face-body">Scar reduction face & body </a></li>
                    <li class="mb-2"><a href="<?php echo get_site_url() ?>/cellulite">Cellulite</a></li>
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
            class="d-flex flex-column flex-lg-row mb-5"
          >
            <div class="col-auto">
              <h2 class="me-5">Testimonials</h2>
            </div>
            <div class="col-lg-8 ps-lg-5 border-lg-left">
              <h3 class="font-extralight text-primary w-75">
                We’ve Changed The Lives Of Countless Men We Can Change Yours Too
              </h3>
            </div>
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
            <h2 class="me-5">Our Locations</h2>
            <h3 class="font-extralight text-primary ps-lg-5 border-lg-left">
            Serving Los Angeles, Orange County, And San Diego
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
            <img src="<?php bloginfo('template_directory')?>/img/location/location-1a.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-2a.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-3a.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-4a.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-1.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-2.jpg" alt="Location" />
            <img src="<?php bloginfo('template_directory')?>/img/location/location-3.jpg" alt="Location" />
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
