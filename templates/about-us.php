<?php
/*
 * Template Name: About
 */
get_header();
//-------Banner section-----------------//
$image = get_field('banner_background_image');
$heading=get_field('heading');
//------Content section---------------//
$main_heading=get_field('main_heading');
$main_content=get_field('main_content');
$content_image=get_field('content_image');
$main_content_part=get_field('main_content_part');
$sub_heading1=get_field('sub_heading1');
$sub_heading2=get_field('sub_heading2');
$link=get_field('link');
$connection_link=get_field('connection_link');

?>

<!-- MAIN CONTENT -->
<main>
    <!-- hero-banner -->
    <section class="inner-hero-banner" style="background-image: url(<?php echo $image; ?>);">
       <div class="container">
            <div class="text-wrap typography">
                <h1 class="text-white"><?php echo $heading;?> </h1>
            </div>
        </div>
    </section>
    <!-- sd-section -->
    <section class="about-us-sd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-us-sd-text typography">
                        <h2><?php echo $main_heading?> </h2>
                        <p><?php echo $main_content ?></p>
                    </div>
                    <div class="about-us-sd-img">
                        <img src="<?php echo $content_image ?>" alt="">
                    </div>
                    <div class="about-us-sd-text typography">
                        <p><?php echo $main_content_part;?></p>
                        <div class="visiting-schedule">
                            <?php echo $sub_heading1;?>
                            
                            <?php echo $sub_heading2;?>

                            <?php echo $connection_link; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>