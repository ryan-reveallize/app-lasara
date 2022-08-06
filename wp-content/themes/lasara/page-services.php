<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-top bg-overlay-left-full py-5 bg-overlay-left-full" data-background-image="<?php bloginfo('template_directory') ?>/img/bg-reseach.jpg">
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
            <div class="row py-lg-5">
                <div class="col-xl-4 col-md-6 offset-md-1">
                    <h1 class="text-white mb-5">Services</h1>
                </div>
                <div class="w-100"></div>
                <div class="col-xxl-4 col-xl-5 col-md-6 offset-md-1">
                    <h4 class="font-light text-white line-height-lg">
                        At LaSara Medical Group, our number one goal is provide treatments and products to our patients that are backed by research and clinical data proving the efficacy and safety of our offerings.
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-5 offset-md-1 pe-lg-5">
                    <div class="bg-img-overlay bg-img-overlay-sm-right sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
                        <img src="<?php bloginfo('template_directory') ?>/img/peptide-get-back.jpg" alt="Old Couple" class="img-fluid border-r-1" />
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 ps-md-5">
                    <p class="mb-0">
                        At LaSara Medical Group, our number one goal is provide treatments and products to our patients that are backed by research and clinical data proving the efficacy and safety of our offerings. We rely on the international and domestic healthcare communities and medical universities who are spearheading the advancements of patient care and treatments. We take pride in offering treatment modalities that present the greatest chance of success with the least amount of risk. Every LaSara treatment and product has been tested and proven with at least 5 or more years of research and clinical data.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mt-lg-5 what-we-offer">
        <div class="container">
            <?php get_template_part('template-parts/what-we-offer'); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>