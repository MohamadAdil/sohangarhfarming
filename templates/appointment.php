<?php
/*
 * Template Name: Appointment
 */
get_header();
?>
<main>
    <!-- hero-banner -->
    <section class="inner-hero-banner" style="background-image: url(http://49.249.236.30:3131/sohangarh_farming/wp-content/uploads/2024/09/IMG_4219-scaled.webp);">
        <div class="container">
            <div class="text-wrap typography">
                <h1 class="text-white">ਨਿਯੁਕਤੀ</h1>
            </div>
        </div>
    </section>
    <!-- sd-section -->
    <section class="appointment-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appointment-section-text typography">
                        <div class="intro">
                            <h2>ਸੋਹਨਗੜ੍ਹ ਫਾਰਮਵਰਸਿਟੀ ਦੇ ਸੰਸਥਾਪਕ</h2>
                            <p>ਕਮਲਜੀਤ ਸਿੰਘ ਹੇਅਰ ਪਿਛਲੇ 11 ਸਾਲਾਂ ਤੋ ਟਿਕਾਊ ਖੇਤੀ ਤੇ ਕੰਮ ਕਰ ਰਹੇ ਹਨ। ਅਪਣੇ ਇਸ ਸਫਰ ਦੌਰਾਨ ਉਹ ਕਾਫੀ ਲੌਕਾਂ ਨੂੰ ਟਿਕਾਊ ਖੇਤੀ ਦੀ ਟ੍ਰੇਨਿੰਗ ਦੇ ਚੁੱਕੇ ਹਨ ਅਤੇ ਕਾਫੀ ਫਾਰਮ ਡਿਜਾਇਨ ਕਰ ਚੁੱਕੇ ਹਨ। ਖੇਤਾਂ ਵਿੱਚ ਰੁੱਖ ਲਗਾਉਣ ਦੀ ਵਿਉਂਤਬੰਦੀ ਲੈਣ ਲਈ ਵੀ ਕਾਫੀ ਲੋਕ ਫਾਰਮ ਤੇ ਵਿਜਿਟ ਕਰਦੇ ਹਨ।</p>
                        </div>

                        <div class="booking-info">
                            <h4>ਮਿਲਣ ਲਈ ਸਮਾਂ ਲਵੋ</h4>
                            <p>ਉਹਨਾਂ ਨੂੰ ਮਿਲਣ ਲਈ ਪਹਿਲਾਂ ਤੋ ਸਮਾਂ ਲੈਣਾ ਜਰੂਰੀ ਹੈ। ਸਮਾਂ ਲੈਣ ਲਈ <a href="#calendar">ਕਲੈਂਡਰ ਤੇ ਕਲਿਕ</a> ਕਰ ਸਕਦੇ ਹੋ।</p>
                            <p>ਫੀਸ: 500 ਰੁ ਪ੍ਰਤੀ ਘੰਟਾ</p>
                        </div>

                        <div class="on-site-info">
                            <h4>ਫਾਰਮ ਤੇ ਸਲਾਹਸ਼ੇ ਰਾਇ ਲਈ</h4>
                            <p>ਅਪਣੇ ਫਾਰਮ ਤੇ ਲਿਜਾ ਕੇ ਰਾਇ ਲੈਣ ਲਈ ਜਾਂ ਲੈਕਚਰ ਕਰਵਾਉਣ ਲਈ <a href="#calendar">ਕਲੈਂਡਰ ਤੇ ਕਲਿਕ</a> ਕਰਕੇ ਸਮਾਂ ਲਿਆ ਜਾ ਸਕਦਾ ਹੈ।</p>
                            <p>ਫੀਸ: 5000 ਰੁ + ਆਉਣ ਜਾਣ ਦਾ ਕਿਰਾਇਆ</p>
                        </div>
                    </div>
                    <!-- calender form -->
                    <div class="calender">
                       <?php echo do_shortcode('[calendly url="https://calendly.com/therapist-haven/30-min-meeting"]'); ?> 
                    </div>
                    <!-- <div class="appointment-section-img">
                        <img src="http://49.249.236.30:3131/sohangarh_farming/wp-content/themes/sohangarh-farming/assets/images/sd-section-img.png" alt="">
                    </div> -->
                </div>
            </div>
    </section>
</main>

<?php get_footer(); ?>