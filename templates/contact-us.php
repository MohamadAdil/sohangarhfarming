<?php
/*
 * Template Name: Contact
 */
get_header();
//-----Banner Section-------------//
$background_image=get_field('background_image');
$heading=get_field('heading');
$content_heading=get_field('content_heading');
$google_map=get_field('google_map');
?>
<main>
    <!-- hero-banner -->
    <section class="inner-hero-banner" style="background-image: url(<?php echo $background_image; ?>);">
        <div class="container">
            <div class="text-wrap typography">
                <h1 class="text-white"><?php echo $heading; ?></h1>
            </div>
        </div>
    </section>
    <!-- sd-section -->
    <section class="contact-section">
        <div class="container">
            <div class="text-wrap typography">
                <h2><?php echo $content_heading;?></h2>
            </div>
            <div class="row">
                <?php 
                $contact_detail= get_field('contact_detail');
                    if($contact_detail){
                        foreach($contact_detail as $details){
                        ?>
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="contact-card">
                                    <h6><?php echo $details['contact_title'];?></h6>
                                    <a href="<?php echo $details['contact_link']['url'];?>"><?php echo $details['contact_link']['title'];?></a>
                                </div>
                            </div>
                        <?php
                        }
                    }
                ?>
            </div>    
        </div>
    </section>

    <!-- map -->
    <section class="map">
        <div>
            <iframe src="<?php echo $google_map;?>" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>
</main>

<?php get_footer(); ?>