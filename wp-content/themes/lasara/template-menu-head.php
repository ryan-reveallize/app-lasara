<?php
//Template Name: Menu Heads

get_header(); ?>
<div class="main-container mt-4r">
    <section class="bg-img bg-overlay bg-top bg-overlay-left-full">
        <div class="container-fluid py-5 z-1 cross-vertical-right">
            <div class="row py-lg-5 text-center justify-content-center">
                <div class="col-xl-12 col-md-12">
                    <h1 class="display-4 text-white mb-5 ">
                        <?php the_title(); ?>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo get_site_url() ?>">Home</a></li>
                        <li><a href="<?php echo get_site_url() ?>/services">Services</a></li>
                        <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="mx-lg-5 px-lg-5">
            <?php $services = [];
            if( have_rows('menu_head_tiles_links') ):
                while( have_rows('menu_head_tiles_links') ) : the_row();
                    $link = get_sub_field('tile_link');
                    $services[$link['url']] = $link['title'];
                    $index = get_row_index();
                endwhile;
            endif;

            /* Fix Grid if item is less than 5 */
                echo '<style>.service-tile-container{';
                echo '--grid-column-count: 4';
                echo '}</style>';
            ?>
                <?php get_template_part( 'template-parts/service-tile-w-whole-link' );?>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/locations'); ?>
</div>
<?php get_footer(); ?>