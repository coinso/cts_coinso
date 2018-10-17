<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://coinso.com/project/ido-barnea
 * @since      1.0.0
 *
 * @package    Cts_coinso
 * @subpackage Cts_coinso/public/partials
 *
 *  This file should primarily consist of HTML with a little bit of PHP. 
 */

$args = array(
    'post_type'         =>  'testimonials',
    'posts_per_page'    =>  3,
    'orderby'           =>  'menu_id title',
    'order'             =>  'DESC',
);
$test_query = new WP_Query( $args );



    if ( $test_query->have_posts() ){ ?>
        <div class="toro-testimonials-wrap">
            <div id="toro-testimonials">
        <?php while ( $test_query->have_posts() ){
            $test_query->the_post();
            $testimonial_img        = get_the_post_thumbnail_url();
            $testimonial_video_id   = 1;//todo via Metabox
            $testimonial_title      = get_the_title();
        ?>
            <div class="col-3 toro-testimonial">
                <div class="toro-testimonial__thumbnail-wrap">
                    <img src="<?php echo $testimonial_img;?>" alt="<?php echo $testimonial_title;?>" data-id="<?php echo $testimonial_video_id;?>">
                    <iframe id="<?php echo $testimonial_video_id;?>" class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/<?php echo $testimonial_video_id;?>?rel=0&amp;showinfo=0" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="toro-testimonial__content">
                    <blockquote>
                        <?php echo $testimonial_title;?>
                    </blockquote>
                </div>
            </div>
        <?php } ?>
            </div>
        </div>

    <?php wp_reset_query();
    }
