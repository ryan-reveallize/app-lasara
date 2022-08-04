<?php get_header();?>
<div class="main-container mt-4r">
      <section
        class="bg-img bg-overlay bg-top bg-overlay-left-full py-5 bg-top bg-overlay-left-full"
      >
        <div class="container-fluid  z-1 cross-vertical-right">
          <div class="row py-lg-5 justify-content-center">
            <div class="col-auto text-center">
              <h1 class="text-white mb-5">Testimonials</h1>
              <h4 class="font-light text-white line-height-lg">We’ve changed the lives of countless patients and we can change yours too</h4>
            </div>
          </div>
        </div>
      </section>

    <section class="py-5 tabs-section">
<div class="container">

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
                  >Watch Video</a
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
<ul class=" mt-5 pt-5 nav nav-pills mb-3 d-flex justify-content-between" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><p>Los Angeles</p> <span class="fa fa-star"></span><span>56 Reviews</span></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><p>Tustin</p><span class="fa fa-star"></span><span>56 Reviews</span></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><p>Encinitas</p><span class="fa fa-star"></span><span>56 Reviews</span></button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <div class="grid-container">
  

  <div class="column">
    <img src="<?php bloginfo('template_directory')?>/img/testimonial/c11.png">

    <img src="<?php bloginfo('template_directory')?>/img/testimonial/c12.png">

    <img src="<?php bloginfo('template_directory')?>/img/testimonial/c13.png">

  </div>

  <div class="column">
  
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c21.png">

  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c22.png">


  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c23.png">  
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c24.png">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c25.png">
  </div>

  <div class="column">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c31.png">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c32.png">

  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c33.png">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c34.png">
  </div>

</div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="grid-container">
  
  <div class="column">
  
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c21.png">

  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c22.png">


  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c23.png">  
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c24.png">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c25.png">
  </div>
  <div class="column">
    <img src="<?php bloginfo('template_directory')?>/img/testimonial/c11.png">

    <img src="<?php bloginfo('template_directory')?>/img/testimonial/c12.png">

    <img src="<?php bloginfo('template_directory')?>/img/testimonial/c13.png">

  </div>



  <div class="column">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c31.png">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c32.png">

  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c33.png">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c34.png">
  </div>

</div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

  <div class="grid-container">
  
  <div class="column">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c31.png">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c32.png">

  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c33.png">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c34.png">
  </div>
  <div class="column">
    <img src="<?php bloginfo('template_directory')?>/img/testimonial/c11.png">

    <img src="<?php bloginfo('template_directory')?>/img/testimonial/c12.png">

    <img src="<?php bloginfo('template_directory')?>/img/testimonial/c13.png">

  </div>

  <div class="column">
  
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c21.png">

  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c22.png">


  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c23.png">  
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c24.png">
  <img src="<?php bloginfo('template_directory')?>/img/testimonial/c25.png">
  </div>

 

</div>
  </div>
</div>
  
    </section>

    </div>
    </div>
<?php get_footer();?>