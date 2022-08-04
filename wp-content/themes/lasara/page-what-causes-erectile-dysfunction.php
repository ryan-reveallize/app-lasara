<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 mb-xl-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        What Causes Erectile Dysfunction?
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/about">About</a></li>
                    <li><a href="<?php echo get_site_url() ?>/about/what-causes-erectile-dysfunction">What Causes Erectile Dysfunction?</a></li>
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
      <?php get_template_part('template-parts/locations'); ?>  
</div>

<?php get_footer(); ?>