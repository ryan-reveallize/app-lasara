<?php get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 mb-xl-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center z-1">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        Clinical Studies
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url() ?>/research">Research</a></li>
                    <li><a href="<?php echo get_site_url() ?>/research/clinical-studies">Clinical Studies</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <?php get_template_part('template-parts/clinical-studies'); ?>
                    <div class="card shadow border-0 border-r-1 border-none align-items-start p-4 px-lg-5 mb-4">
                        <a href="https://www.urologytimes.com/view/shock-waves-may-change-future-ed-therapy" class="d-block font-bold text-primary-light mb-4" target="_blank">Shock waves may change future of ED therapy</a>

                        <a href="<?php bloginfo('template_directory') ?>/docs/246435.pdf" class="d-block font-bold text-primary-light videoPopup" target="_blank">Low-Intensity Shockwave Treatment of Erectile Dysfunction and Peyronie`s Disease</a>
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
</div>

<?php get_footer(); ?>