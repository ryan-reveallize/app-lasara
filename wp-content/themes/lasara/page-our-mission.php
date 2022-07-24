<?php get_header();?>
<div class="main-container mt-4r">
      <section
        class="bg-img bg-overlay bg-top bg-overlay-left-full"
      >
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
          <div class="row py-lg-5 text-center justify-content-center" >
            <div class="col-xl-12 col-md-12">
              <h1 class="display-4 text-white mb-5 ">
               Our Mission
              </h1>
            </div>
            <div class="w-100"></div>
    
          </div>
        </div>
      </section>
      <section class="py-5 mt-lg-5">
        <div class="container-fluid">
          <div class="row ">
            <div class="col-md-4 offset-md-1 pe-lg-5">
              <div
                class=" sticky-top border-r-1 mb-5 mb-md-0 "
              >
                <img
                  src="<?php bloginfo('template_directory')?>/img/mission1.jpg"
                  alt="Old Couple"
                  class="img-fluid border-r-1 w-100 h-100"
                />
              </div>
            </div>
            <div class="col-xl-4 col-md-6 ps-md-5">
              <p>LaSara Medical Group is committed to helping our patients regenerate and optimize their health with innovative technology and products that deliver tangible outcomes for our patients. We specialize in Focused Shockwave Therapy, a revolutionary, non-invasive, and non-surgical solution to treat the root cause of dysfunctions, pain, and signs of aging.</p><p>
                 Regenerative medicine works to heal and grow human cells, tissues, and organs to restore normal function. Our treatments are risk free and proven with more than a decade of research. </p>
            </div>
          </div>
        </div>
      </section>
      

      <section class="py-5 mt-lg-5">
        <div class="container-fluid">
          <div class="row ">
          <div class="col-md-4 offset-md-2 pe-lg-5">
            
              <p>Since 2017, we’ve completed over 11,000 Shockwave treatments and we have been changing the lives of men and women with our approach to healing the root cause of their challenges. In addition to our Focused Shockwave Therapy, we offer cutting edge treatments such as peptides and hormone therapies that, when paired with Shockwave, trigger even greater changes in the body and mind that last.
</p><p>
              The human body is capable of amazing transformations, LaSara Medical Group is just the catalyst to make that happen! We hope we are given the chance to help you just as we have helped countless patients before you.
              </p>
            </div>
            <div class="col-xl-4 col-md-6 ps-md-5">
              <div
                class="bg-img-overlay bg-img-overlay-left-small bg-img-overlay-sm-left sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-left"
              >
                <img
                  src="<?php bloginfo('template_directory')?>/img/mission2.jpg"
                  alt="Old Couple"
                  class="img-fluid border-r-1 w-100 h-100"
                />
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

<?php get_footer();?>