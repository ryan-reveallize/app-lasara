<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 my-xl-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        What Causes Erectile Dysfunction?
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/about">About</a></li>
                    <li><a href="<?php echo get_site_url() ?>/what-causes-erectile-dysfunction">What Causes Erectile Dysfunction?</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section class="py-5 my-lg-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="video-container video-w-title">
                        <a href="https://www.youtube.com/watch?v=_LOs2k9hZTA" class="img-video d-block videoPopup">
                            <img src="<?php bloginfo('template_directory') ?>/img/man-on-phone.jpg" alt="Man on Phone Call" class="img-fluid border-r-1 w-100 h-100" />
                        </a>
                        <h1 class="">What Causes Erectile Dysfunction?</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 px-xl-5">
        <h2 class="mb-5 text-center">What We Offer</h2>
        <div class="container-fluid px-xl-5">
            <?php $services = [
                'erectile-dysfunction-shockwave-therapy' => 'Erectile Dysfunction',
                'peyronies-disease-or-penile-injury-shockwave-therapy' => 'Peyronie’s Disease',
                'penile-sensitivity-regeneration' => 'Lack Of Penile Sensitivity',
                'tennis-and-golfers-elbow' => 'Tennis Elbow',
                'plantar-fasciitis-heel-spurs' => 'Plantar Fasciitis',
                'scar-reduction-face-body' => 'Scar Tissue',
                'jumpers-knee-patellar-tendinitis' => 'Tendonopathy',
                'neuropathy' => 'Neuropathy',
                'facial-skin-tightening-rejuvenation' => 'Skin Tightening Wrinkles',
                'hip-pain' => 'Hip Pain',
            ]; ?>
            <?php get_template_part('template-parts/service-tile-w-link'); ?>
    </section>

    <section class="location py-5 rad-bor-bottom">
        <div class="container py-lg-5">
            <div class="d-flex flex-column flex-lg-row align-items-center mb-5 animate__animated" data-animate="slideInUp">
                <h2 class="me-5">Our Locations</h2>
                <h3 class="font-extralight text-primary ps-lg-5 border-lg-left">
                    Serving Los Angeles, Orange County, And San Diego
                </h3>
            </div>
            <div class="row justify-content-center mb-5 animate__animated" data-animate="slideInUp">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="location-map">
                        <img src="<?php bloginfo('template_directory') ?>/img/location/map-1.jpg" alt="MAP" class="img-fluid" />
                        <div class="c-card bg-white p-4 location-detail">
                            <p class="font-bold text-black">
                                17411 Irvine Blvd. Suite J, Tustin, CA 92780
                            </p>
                            <a href="tel:949-520-1551" class="btn btn-grad">949-520-1551</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="location-map">
                        <img src="<?php bloginfo('template_directory') ?>/img/location/map-1.jpg" alt="MAP" class="img-fluid" />
                        <div class="c-card bg-white p-4 location-detail">
                            <p class="font-bold text-black">
                                11500 W Olympic Blvd Suite 440, Los Angeles, CA 90064
                            </p>
                            <a href="tel:424-343-8998" class="btn btn-grad">424-343-8998</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="location-map">
                        <img src="<?php bloginfo('template_directory') ?>/img/location/map-1.jpg" alt="MAP" class="img-fluid" />
                        <div class="c-card bg-white p-4 location-detail">
                            <p class="font-bold text-black">
                                285 N El Camino Real Suite 117, Encinitas, CA 92024
                            </p>
                            <a href="tel:760-266-8466" class="btn btn-grad">760-266-8466</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location_slick">
                <img src="<?php bloginfo('template_directory') ?>/img/location/location-1a.jpg" alt="Location" />
                <img src="<?php bloginfo('template_directory') ?>/img/location/location-2a.jpg" alt="Location" />
                <img src="<?php bloginfo('template_directory') ?>/img/location/location-3a.jpg" alt="Location" />
                <img src="<?php bloginfo('template_directory') ?>/img/location/location-4a.jpg" alt="Location" />
                <img src="<?php bloginfo('template_directory') ?>/img/location/location-1.jpg" alt="Location" />
                <img src="<?php bloginfo('template_directory') ?>/img/location/location-2.jpg" alt="Location" />
                <img src="<?php bloginfo('template_directory') ?>/img/location/location-3.jpg" alt="Location" />
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>