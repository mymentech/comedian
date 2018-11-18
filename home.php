<?php
/**
 * Template Name: Home Page
 */
get_header();

comedian_print_custom_bg_css( get_the_ID() );
?>

<div id="content" class="site-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="home_person_content">
                    <div class="home_person_image">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/home-image.png' ) ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="home_person_content">
                    <div class="home_brand_image">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/khair-moregan.png' ) ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php get_footer() ?>
