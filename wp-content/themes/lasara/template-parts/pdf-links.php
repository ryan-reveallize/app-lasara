<?php if( have_rows('pdf_links') ):
    // Loop through rows.
    while( have_rows('pdf_links') ) : the_row();
?>
    <div class="card shadow border-0 border-r-1 border-none align-items-start p-4 px-lg-5 mb-4">
        <h3 class="font-bold text-primary-light"><?php echo get_sub_field('title',false);?></h3>
        <p class="mb-4"><?php echo get_sub_field('description',false);?></p>
        <a href="<?php echo get_sub_field('url',false);?>" class="btn btn-primary btn-w-icon videoPopup">
            <img src="<?php bloginfo('template_directory') ?>/img/icon-pdf.svg" alt="Icon" class="btn-icon">
            <span class="d-none d-lg-block"><?php echo get_sub_field('url',false);?></span>
            <span class="d-block d-lg-none">PDF Link</span>
        </a>
    </div> 
<?php
    // End loop.
    endwhile;
endif;
?>