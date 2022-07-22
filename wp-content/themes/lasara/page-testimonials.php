<?php get_header();?>
<div class="main-container mt-4r">
      <section
        class="bg-img bg-overlay bg-top bg-overlay-left-full py-5 bg-top bg-overlay-left-full"
        data-background-image="<?php bloginfo('template_directory')?>/img/old-man-with-cane.jpg"
      >
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
          <div class="row py-lg-5">
            <div class="col-xl-4 col-md-6 offset-md-1">
              <h1 class="text-white mb-5">Stories from our Patient</h1>
            </div>
          </div>
        </div>
      </section>

      <section
        class="testimonial-section bg-secondary-light py-5 rad-bor-bottom rad-top"
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
        </div>
      </section>
      <section class="py-5">
        <div class="container text-center">
          <h2 class="mb-5">More Patient Stories</h2>
          <div class="row justify-content-center">
            <div class="col-md-8">
              <p class="mb-5">
                “These guys are Pros. no pills, no empty promises. Just
                rational, scientific treatment that cannot avoid helping.”
                <strong class="d-block">– Maurice, 69</strong>
              </p>

              <p class="mb-5">
                “Dr. DeYoung and his medical staff went above and beyond to care
                for me. I am 100% satisfied with my experience and my ED was
                successfully reversed with the shock wave treatments. The staff
                is very professional and knowledgeable. Clean and comfortable
                office. Plus, they greeted me with a fresh coffee every visit.
                Thank you LaSara, I’ve already referred several friends to your
                clinic.” <strong class="d-block">- Stephen, 68</strong>
              </p>

              <p class="mb-5">
                “The staff was very respectful and private. The process was
                explained in detail.”
                <strong class="d-block">- Paul, age 67</strong>
              </p>

              <p class="mb-5">
                “Staff was extremely knowledgeable and friendly. Doctor made me
                feel very comfortable and listened to my needs. Starting to see
                early results from treatment. Office nice, ESPN on, felt
                comfortable.” <strong class="d-block">- Mike, 72</strong>
              </p>

              <p class="mb-5">
                “The team at LaSara asked me to provide a review once I got
                results, so here I am. No better way to say it than, I am back
                in action! Great experience all around. Especially appreciated
                the doctors time. Getting this thing in order helped me improve
                other aspect of my health. Lost 20 pounds and started eating
                better. ” <strong class="d-block">-Charles, 55</strong>
              </p>

              <p class="mb-5">
                “Life changing positive experience. We laugh at the thought of
                ED until we experience it ourselves. I’m forever thankful for
                the LaSara team – Dale, Yeon, John, and Dr DeYoung. Their
                shockwave treatment works wonders. I did the 12 treatment
                protocol and saw results about half way through. Since then it’s
                only gotten better. Nice office and environment too, which goes
                a long way when you have to come in multiple times.”
                <strong class="d-block">- Jake, 52</strong>
              </p>

              <p class="mb-5">
                “I am so glad I opted to be treated by LaSara. When I heard
                about their treatment from a mutual friend, I was intrigued
                because I was not necessarily suffering from severe ED issues
                but I was interested in the treatment as a tool to enhance my
                sex life. The shockwave therapy not only helped any issues with
                ED I was having, it also increased my sexual performance in the
                bedroom significantly enough that it was noticed by my partner.
                Especially as a younger guy it’s never comfortable talking to
                your doctor about this kind of stuff but John and the team made
                me feel comfortable from the initial phone consult throughout
                the duration of all of my sessions. They were great at
                accommodating my busy schedule allowing me to pursue treatment
                at both locations without an issue. I couldn’t be happier with
                the results of my investment and i’ve recommended LaSara to
                numerous friends and family members.”
                <strong class="d-block">- Ryan, 31</strong>
              </p>

              <p class="mb-5">
                “LaSara is changing the game for men with ED. I can’t say enough
                about my experience. Dr. Taekman was gracious and comforting,
                and his staff was more than educated on men’s health. I elected
                to do the shockwave treatment and have experienced better than
                expected results. Before coming in, I was getting worried about
                pills not working anymore. Today, I don’t have to use pills at
                all. Highly recommend this treatment to any man dealing with
                this issue.” <strong class="d-block">- Chase, 33</strong>
              </p>

              <p class="mb-5">
                “To be honest this is not a subject I EVER feel comfortable
                talking about, but my experience was so life changing I had to
                write a review. After hearing about LaSara on the radio, I
                decided to give them a call. After a brief phone call I went
                into LaSara for a consultation. I was very pleased with the
                professionalism of the staff and how comfortable they made me
                feel. After my consultation I decided to move forward with the
                shock wave therapy treatment and it has been noting but a
                blessing since. I am finally feeling comfortable in bed again!
                If you are on the fence, don’t be…”
                <strong class="d-block"> -James, 48</strong>
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

<?php get_footer();?>