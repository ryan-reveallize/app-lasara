<?php get_header();?>
<div class="main-container mt-4r">
      <section
        class="bg-img bg-overlay bg-top bg-overlay-left-full py-5 bg-top bg-overlay-left-full"
        data-background-image="<?php bloginfo('template_directory')?>/img/old-man-with-cane.jpg"
      >
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
          <div class="row py-lg-5">
            <div class="col-xl-4 col-md-6 offset-md-1">
              <h1 class="text-white mb-5">About LaSara Medical Group</h1>
            </div>
            <div class="w-100"></div>
            <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
              <h4 class="font-light text-white line-height-lg">
                LaSara Medical Group specializes in helping men who suffer from
                erectile dysfunction (ED).
              </h4>
            </div>
          </div>
        </div>
      </section>

      <section class="our-practice mt-5 py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div
                class="img-container-w-caption bg-img bg-img-overlay bg-img-overlay bg-img-overlay-sm-right"
                data-background-image="<?php bloginfo('template_directory')?>/img/about-lasara.png"
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
            <div class="col-lg-6 ps-lg-5">
              <h2>About LaSara Medical Group</h2>

              <p>
                We offer our patients the latest in ED treatment, known as low
                intensity focused shockwave therapy. As pioneers of this
                treatment, we’ve seen unimaginable results and have treated more
                men than any clinic in our region.Focused shockwave therapy is
                the only clinically studied medical treatment that is known to
                reverse ED for the long-term. The foremost advanced medical
                communities around the world consider it to be the potential
                medical answer of rehabilitating or even curing ED. For over 10
                years, successful use throughout Europe, Canada, Asia, and
                Australia, as well as numerous studies have proven the efficacy
                and long-term benefits of focused shockwave therapy.
              </p>
              <p>
                As a specialty men’s clinic, our goal is to provide a safe, drug
                free, surgery free, and needle free solution that treats the
                root cause of ED. As a result of being treated by LaSara Medical
                Group, our patient’s natural functionality is restored and they
                are able to partake in spontaneous sexual activities again. The
                way a man’s sex life is meant to be. In addition to providing
                the most cutting-edge treatment option for ED, our clinic
                provides a safe, discreet environment for our patients. Our
                professional, all male medical staff is committed to providing a
                medical experience that surpasses all patient expectations. Our
                team at LaSara Medical Group hopes you take the first step in
                beginning your path back to natural functionality by giving us a
                call to schedule your first time visit with the doctor. We look
                forward to helping you the same way we’ve helped so many men
                before you.
              </p>
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

         </main>
<?php get_footer();?>